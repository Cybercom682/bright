<?php

namespace controller\models;

class pluginModel
{
    public $kPlugin;
    public $cTitle;
    public $cDescription;
    public $cAuthor;
    public $cVersion;
    public $cWebsite;
    public $cLicence;
    public $cValidate;
    public $PluginSettings;

    public $db;


    public function __construct($db,$kPlugin)
    {
        $this->db = $db;
        $plugin = $this->getPlugin($kPlugin);
        $pluginSettings = $this->getPluginSettings($kPlugin);
        $this->kPlugin = $kPlugin;
        $this->cTitle = $plugin[0]['cTitle'];
        $this->cDescription = $plugin[0]['cDescription'];
        $this->cAuthor = $plugin[0]['cAuthor'];
        $this->cVersion = $plugin[0]['cVersion'];
        $this->cWebsite = $plugin[0]['cWebsite'];
        $this->cLicence = $plugin[0]['cLicence'];
        $this->cValidate = $plugin[0]['cValidate'];
        $this->PluginSettings = $pluginSettings;
    }

    private function getPlugin($kPlugin)
    {
        return $this->getDb()->query('SELECT * FROM tplugin WHERE kPlugin ='.$kPlugin);
    }

    private function getPluginSettings($kPlugin){
        return $this->getDb()->query('SELECT * FROM tpluginsettings WHERE kPlugin ='.$kPlugin);
    }

    public function getPluginInformations()
    {
        return [
          'kPlugin' => $this->kPlugin,
          'cTitle' => $this->cTitle,
          'cDescription' => $this->cDescription,
          'cAuthor' => $this->cAuthor,
          'cVersion' => $this->cVersion,
            'cLicence' => $this->cLicence,
            'cWebsite' => $this->cWebsite,
            'cValidate' => $this->cValidate
        ];
    }

    public function getPluginConfig()
    {
        $pluginConfig = [];
        foreach ($this->PluginSettings as $key => $setting){
            if(intval($setting['kPlugin']) === intval($this->kPlugin)){
                $pluginConfig[] = $setting;
            }
        }
        return $pluginConfig;
    }

    public function getConfigValue($configName)
    {
        foreach ($this->PluginSettings as $setting){
            if(intval($setting['kPlugin']) === intval($this->kPlugin)){
                if(is_string($setting['name']) === is_string($configName)){
                    return $setting['value'];
                }
            }
        }
        return null;
    }

    /**
     * @return mixed
     */
    public function getDb(): mixed
    {
        return $this->db;
    }

}