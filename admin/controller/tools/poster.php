<?php

namespace controller\tools;
use controller\handler\plugin;
use controller\handler\plugins;
use controller\handler\ticket;

include (dirname(__DIR__) . '/handler/ticket.php');
include (dirname(__DIR__) . '/handler/plugin.php');
include (__DIR__ . '/cache.php');

class poster
{
    private mixed $smarty;
    private $db;

    /**
     * @param $smarty
     */
    public function __construct($smarty,$db)
    {
        $this->smarty = $smarty;
        $this->db = $db;
        $this->init();
    }

    /**
     * @return void
     */
    public function init(): void
    {
        if (isset($_POST['action'])){
            switch ($_POST['action']){
                case 'create' : $this->create($_POST['handler']);
                    break;
                case 'update' : $this->update($_POST['handler']);
                    break;
                case 'delete' : $this->delete($_POST['handler']);
                    break;
                case 'cache' : (new cache())->clearTemplateCache($this->getSmarty());
                    break;
                case 'install' : $this->install($_POST['handler']);
                    break;
                case 'upload' : $this->upload($_POST['handler']);
                    break;
            }
        }
    }

    /**
     * @return mixed
     */
    public function getSmarty(): mixed
    {
        return $this->smarty;
    }

    private function create($handler): void
    {
        switch ($handler){
            case 'ticket' : (new ticket())->create($this->getDb());
            break;
            case 'page' : echo 'ser';
        }
    }

    private function update($handler): void
    {
        switch ($handler){
            case 'ticket' : (new ticket())->update($this->getDb());
                break;
            case 'page' : echo 'ser';
                break;
            case 'plugins' : echo 'dsf';
                break;
        }
    }

    private function delete($handler): void
    {
        switch ($handler){
            case 'ticket' : (new ticket())->delete($this->getDb());
                break;
            case 'page' : echo 'ser';
                break;
            case 'plugins' : echo 'dsf';
                break;
        }
    }

    private function install($handler): void
    {
        switch ($handler){
            case 'plugins' : echo 'dsf';
                break;
            case 'template' : echo 'sdf';
                break;
        }
    }

    private function upload($handler): void
    {
        switch ($handler){
            case 'plugin' : (new plugin($this->getDb()))->uploadPlugin();
                break;
            case 'template' : 'dsf';
                break;
        }
    }

    /**
     * @return mixed
     */
    public function getDb(): mixed
    {
        return $this->db;
    }
}