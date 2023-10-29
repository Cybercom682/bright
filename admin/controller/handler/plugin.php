<?php

namespace controller\handler;

use Exception;
use FilesystemIterator;
use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;
use ZipArchive;


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

    private function getInstalledPluginList() : array
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
                $xmlData = simplexml_load_string($pluginXmlContent);

                try {
                    $cTitle = $xmlData['title'];
                    $cDescription = $xmlData['description'];
                    $cVersion = $xmlData['version'];
                    $cValidate = $xmlData['validate'];
                    $cWebsite = $xmlData['website'];
                    $cLicence = $xmlData['licence'];
                    $cAuthor = $xmlData['author'];

                    // Überprüft, ob ein Eintrag mit denselben Daten bereits existiert
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
                    } else {
                        echo "Ein Eintrag mit denselben Daten existiert bereits.";
                    }
                } catch (Exception $e) {
                    // echo $e;
                }


                echo "Das Plugin wurde erfolgreich installiert.";
            } else {
                echo "Die Datei 'plugin.xml' wurde nicht im Verzeichnis gefunden.";
            }
        } else {
            echo "Das Verzeichnis '$pluginFolder' existiert nicht.";
        }
    }

    public function openPluginMenu(){
        $this->getSmarty()->assign('pluginData',$this->getDb()->query('SELECT * FROM tplugin WHERE kPlugin ='. $_POST['kPlugin']))->display(PATH_ROOT . PATH_ADMIN . PATH_TEMPLATES . 'bootstrap/areas/config/pluginMenu.tpl');
        die;
    }
    public function removePlugin(){
        $pluginPath = $this->getPluginPath();
        $pluginFolder = $_POST['validate'];

        $folderPath = $pluginPath . '/' . $pluginFolder;

        if (file_exists($folderPath) && is_dir($folderPath)) {
            $iterator = new RecursiveIteratorIterator(
                new RecursiveDirectoryIterator($folderPath, FilesystemIterator::SKIP_DOTS),
                RecursiveIteratorIterator::CHILD_FIRST
            );

            foreach ($iterator as $file) {
                if ($file->isDir()) {
                    rmdir($file->getRealPath());
                } else {
                    unlink($file->getRealPath());
                }
            }

            if (rmdir($folderPath)) {
                echo "Der Ordner '$pluginFolder' wurde erfolgreich gelöscht.";
            } else {
                echo "Fehler beim Löschen des Ordners '$pluginFolder'.";
            }
        } else {
            echo "Der Ordner '$pluginFolder' existiert nicht oder ist kein Verzeichnis.";
        }
    }


    public function updatePlugin()
    {
    //        try{
    //            $kTicket = $_POST['t_id'];
    //            $cTitle = $_POST['t_title'];
    //            $cContent = $_POST['t_task'];
    //            $cPrio = $_POST['t_prio'];
    //            $cStatus = $_POST['t_status'];
    //
    //            $data = [
    //                'cTitle' => $cTitle,
    //                'cContent' => $cContent,
    //                'cPrio' => $cPrio,
    //                'cStatus' => $cStatus
    //            ];
    //
    //            $this->getDb()->updateData('ttickets',$data,'kTicket',$kTicket);
    //        }catch (Exception $e){
        //echo $e;
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
                            echo 'Die ZIP-Datei wurde erfolgreich entpackt und enthält nur einen Ordner.';
                        } else {
                            echo 'Die ZIP-Datei sollte nur einen Ordner im Hauptverzeichnis enthalten.';
                        }
                    } else {
                        echo 'Fehler beim Entpacken der ZIP-Datei.';
                    }
                } else {
                    echo 'Bitte laden Sie eine ZIP-Datei hoch.';
                }
            } else {
                echo 'Es ist ein Fehler beim Hochladen der Datei aufgetreten.';
            }
        } catch (Exception $e) {
            echo 'Es ist ein Fehler aufgetreten: ' . $e->getMessage();
        }
    }
}