<?php

namespace controller\services;
require dirname(__DIR__) . '/interfaces/pluginInterface.php';
use controller\interfaces\pluginInterface;
use controller\models\pluginModel;

class pluginService implements pluginInterface
{
    public $validate;
    public $db;
    public function initialize($db,$smarty)
    {
        // TODO: Implement boot() method.
    }

    public function getPlugin(): pluginModel
    {
        $query = $this->getDb()->query('SELECT kPlugin FROM tplugin WHERE cValidate = "'.$this->getValidate().'"');
        $plugin = new pluginModel($this->getDb(),$query[0]['kPlugin']);
        return $plugin;
    }

    /**
     * @param mixed $validate
     */
    public function setValidate($validate): void
    {
        $this->validate = $validate;
    }

    /**
     * @return mixed
     */
    public function getValidate()
    {
        return $this->validate;
    }

    /**
     * @return mixed
     */
    public function getDb()
    {
        return $this->db;
    }

    /**
     * @param mixed $db
     */
    public function setDb($db): void
    {
        $this->db = $db;
    }
}