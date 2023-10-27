<?php

namespace controller\services;

class pluginService
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
}