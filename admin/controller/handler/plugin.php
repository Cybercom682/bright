<?php

namespace controller\handler;

use Exception;
use ZipArchive;

class plugin
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    /**
     * @return mixed
     */
    public function getDb()
    {
        return $this->db;
    }

    private function getInstalledPluginList() : array
    {
        return $this->getDb()->query('SELECT * FROM tplugin');
    }

    private function installPlugin($pluginListArray,$post){
        //TODO: Search for not Installed Plugins -> if Post = install -> migrate to db! (other sections to tpluginsettings)
        //TODO: if plugin is migrated and installed -> init PluginMenu.tpl to show settings
    }

    private function openPluginMenu($post){
        //TODO: Return PluginMenu tpl file with PluginID | async request via jq/js
    }
    private function removePlugin($type,$post){
        //TODO: Remove Plugin as folder and from db!
    }

    public function updatePlugin()
    {
        try{
            $kTicket = $_POST['t_id'];
            $cTitle = $_POST['t_title'];
            $cContent = $_POST['t_task'];
            $cPrio = $_POST['t_prio'];
            $cStatus = $_POST['t_status'];

            $data = [
                'cTitle' => $cTitle,
                'cContent' => $cContent,
                'cPrio' => $cPrio,
                'cStatus' => $cStatus
            ];

            $this->getDb()->updateData('ttickets',$data,'kTicket',$kTicket);
        }catch (Exception $e){
    //echo $e;
}
    }
    public function uploadPlugin() {
        try {
            if (isset($_FILES['pluginZip'])){
                $pluginPath = PATH_ROOT . PATH_PLUGINS;
                chmod($pluginPath, 0777);
                $zipFile = $_FILES['pluginZip']['tmp_name'];

                $zipInfo = pathinfo($_FILES['pluginZip']['name']);
                if (strtolower($zipInfo['extension']) === 'zip') {

                    $zip = new ZipArchive();
                    if ($zip->open($zipFile) === true) {
                        $zip->extractTo($pluginPath);
                        $zip->close();

                        echo 'done';
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