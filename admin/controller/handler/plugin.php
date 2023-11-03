<?php

namespace controller\handler;

use controller\models\pluginModel;
use controller\tools\alert;
use Exception;
use ZipArchive;

include dirname(__DIR__) . '/models/pluginModel.php';

class plugin
{
    private $db;
    private $smarty;

    public function __construct($db,$smarty = null)
    {
        $this->db = $db;
        $this->smarty = $smarty;
    }

    /**
     * @return mixed|null
     */
    public function getSmarty(): mixed
    {
        return $this->smarty;
    }

    /**
     * @return mixed
     */
    public function getDb()
    {
        return $this->db;
    }

    public function getPluginPath(): string
    {
        $pluginPath = PATH_ROOT .PATH_PLUGINS;
        chmod($pluginPath, 0777);
        return $pluginPath;
    }

    public function getInstalledPluginList() : array
    {
        return $this->getDb()->query('SELECT * FROM tplugin');
    }

    public function installPlugin(): void
    {
        $pluginPath = $this->getPluginPath();
        $pluginFolder = $_POST['validate'];

        $folderPath = $pluginPath . '/' . $pluginFolder;

        if(is_dir($folderPath)){

            $pluginXmlFile = $folderPath . '/plugin.xml';
            if (file_exists($pluginXmlFile)) {

                $pluginXmlContent = file_get_contents($pluginXmlFile);
                $xmlData = $this->getAsocArrFromXml(simplexml_load_string($pluginXmlContent));

                try {
                    // PluginInfo
                    $cTitle = $xmlData['title'];
                    $cDescription = $xmlData['description'];
                    $cVersion = $xmlData['version'];
                    $cValidate = $xmlData['validate'];
                    $cWebsite = $xmlData['website'];
                    $cLicence = $xmlData['licence'];
                    $cAuthor = $xmlData['author'];
                    $PluginWidgets = $xmlData['widgets'];
                    $PluginSettings = $xmlData['sections'];

                    $existingEntry = $this->getDb()->query("SELECT kPlugin FROM tplugin WHERE cTitle = '$cTitle' AND cDescription = '$cDescription' AND cVersion = '$cVersion' AND cAuthor = '$cAuthor'");

                    if (empty($existingEntry)) {
                        $nextID = $this->getDb()->getNextID('tplugin', 'kPlugin');

                        $data = [
                            'kPlugin' => $nextID,
                            'cTitle' => $cTitle,
                            'cDescription' => $cDescription,
                            'cAuthor' => $cAuthor,
                            'cVersion' => $cVersion,
                            'cWebsite' => $cWebsite,
                            'cLicence' => $cLicence,
                            'cValidate' => $cValidate
                        ];

                        $this->getDb()->insertData('tplugin', $data);


                        foreach ($PluginSettings as $settings) {
                            $sectionData = [
                                'cSectionName' => $settings['name'],
                                'cSectionType' => $settings['type']
                            ];

                            foreach ($settings['settings'] as $setting) {
                                $settingData = [
                                    'kPluginSetting' => $this->getDb()->getNextID('tpluginsettings', 'kPluginSetting'),
                                    'type' => $setting['type'],
                                    'cTitle' => $setting['title'],
                                    'value' => $setting['initValue'],
                                    'name' => $setting['assign'],
                                    'kPlugin' => $nextID
                                ];

                                $settingsData = array_merge($sectionData, $settingData);

                                $psType = $setting['type'];
                                $psName = $settings['name'];

                                $existingPluginEntry = $this->getDb()->query("SELECT kPluginSetting FROM tpluginsettings WHERE type = ".$psType ." AND name = ".$psName);
                                if (empty($existingPluginEntry)) {
                                    $this->getDb()->insertData('tpluginsettings', $settingsData);
                                }else{
                                    (new alert())->execute('danger','Einträge mit denselben Daten existieren bereits.');
                                }
                            }
                        }


                    } else {
                        (new alert())->execute('danger','Ein Eintrag mit denselben Daten existiert bereits.');
                    }
                } catch (Exception $e) {
                    (new alert())->execute('danger',$e->getMessage());
                }


                echo "Das Plugin wurde erfolgreich installiert.";
            } else {
                echo "Die Datei 'plugin.xml' wurde nicht im Verzeichnis gefunden.";
            }
        } else {
            echo "Das Verzeichnis '$pluginFolder' existiert nicht.";
        }
    }

    private function getAsocArrFromXml($xmlData){

        $xmlObjekt = $xmlData;

        $resultArray = [];

        $attributes = $xmlObjekt->attributes();
        foreach ($attributes as $name => $value) {
            $resultArray[$name] = $value;
        }

        $backend = $xmlObjekt->backend;
        $widgets = $backend->widgets->widget;

        foreach ($widgets as $widget) {
            $widgetAttributes = $widget->attributes();
            $widgetName = $widgetAttributes['name'];
            $tpl = $widget->tpl;
            $resultArray['widgets'][] = ['name' => $widgetName, 'tpl' => $tpl];
        }

        $settings = $backend->settings->section;
        foreach ($settings as $section) {
            $sectionAttributes = $section->attributes();
            $sectionName = $sectionAttributes['name'];

            $sectionArray = ['name' => $sectionName];

            $sectionType = $sectionAttributes['type'];
            $sectionArray['type'] = $sectionType;

            $sectionSettings = $section->setting;
            $settingsArray = [];

            foreach ($sectionSettings as $setting) {
                $settingAttributes = $setting->attributes();
                $settingType = $settingAttributes['type'];
                $settingTitle = $settingAttributes['title'];
                $initValue = $settingAttributes['initValue'];
                $sort = $settingAttributes['sort'];
                $assign = $setting->assign;

                $settingArray = [
                    'type' => $settingType,
                    'title' => $settingTitle,
                    'initValue' => $initValue,
                    'sort' => $sort,
                    'assign' => $assign,
                ];

                // Wenn es ein 'select'-Element gibt, die Optionen hinzufügen
                if ($settingType === 'select') {
                    $options = $setting->options->option;
                    $settingArray['options'] = [];

                    foreach ($options as $option) {
                        $settingArray['options'][] = (string) $option;
                    }
                }

                $settingsArray[] = $settingArray;
            }

            $sectionArray['settings'] = $settingsArray;
            $resultArray['sections'][] = $sectionArray;
        }
        return $resultArray;
    }

    public function openPluginMenu(){
        $this->getSmarty()->assign('pluginInfo',(new pluginModel($this->getDb(),$_POST['kPlugin']))->getPluginInformations())
            ->assign('pluginConfig', (new pluginModel($this->getDb(),$_POST['kPlugin']))->getPluginConfig())
            ->display(PATH_ROOT . PATH_ADMIN . PATH_TEMPLATES . 'bootstrap/areas/config/pluginMenu.tpl');
        die;
    }
    public function removePlugin(){
        $pluginPath = $this->getPluginPath();
        $pluginFolder = $_POST['validate'];

        if (is_dir($pluginPath)) {
            $dir = opendir($pluginPath);
            while (false !== ($file = readdir($dir))) {
                if ($file != '.' && $file != '..') {
                    $file_path = $pluginPath . DIRECTORY_SEPARATOR . $file;
                    if (is_dir($file_path) && $file == $pluginFolder) {
                        array_map('unlink', glob("$file_path/*.*"));
                        rmdir($file_path);
                    }
                }
            }
            closedir($dir);
        }
    }

    public function uninstallPlugin()
    {
        try {
            $this->getDb()->deleteById('tplugin','kPlugin',$_POST['kPlugin']);
            $this->getDb()->deleteById('tpluginsettings','kPlugin',$_POST['kPlugin']);
        }catch (Exception $e){
            //echo $e;
        }
    }

    public function updatePlugin()
    {
    // TODO: next...
    }

    public function uploadPlugin() {
        try {
            if (isset($_FILES['pluginZip'])){
                $pluginPath = $this->getPluginPath();
                $zipFile = $_FILES['pluginZip']['tmp_name'];

                $zipInfo = pathinfo($_FILES['pluginZip']['name']);
                if (strtolower($zipInfo['extension']) === 'zip') {

                    $zip = new ZipArchive();
                    if ($zip->open($zipFile) === true) {
                        $zip->extractTo($pluginPath);
                        $zip->close();

                        $mainDir = scandir($pluginPath);
                        $dirCount = 0;
                        foreach ($mainDir as $item) {
                            if (is_dir($pluginPath . $item) && $item != '.' && $item != '..') {
                                $dirCount++;
                            }
                        }

                        if ($dirCount === 1) {
                            (new alert())->execute('success','Das Plugin wurde erfolgreich hochgeladen.');
                        } else {
                            (new alert())->execute('warning','');
                            echo 'fehlerhafte Dateistruktur des Plugins.';
                        }
                    } else {
                        (new alert())->execute('warning','Fehler beim Entpacken des Plugins.');
                    }
                } else {
                    (new alert())->execute('danger','Bitte laden Sie eine ZIP-Datei hoch.');
                }
            } else {
                (new alert())->execute('danger','Es ist ein Fehler beim Hochladen der Datei aufgetreten.');
            }
        } catch (Exception $e) {
            (new alert())->execute('warning','Es ist ein Fehler aufgetreten: ' . $e->getMessage());
        }
    }
}