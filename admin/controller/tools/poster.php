<?php

namespace controller\tools;
use controller\handler\ticket;

include (dirname(__DIR__) . '/handler/ticket.php');
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

    private function create($handler)
    {
        switch ($handler){
            case 'ticket' : (new ticket())->create($this->getDb());
            break;
            case 'page' : echo 'ser';
        }
    }

    private function update($handler)
    {
        switch ($handler){
            case 'ticket' : (new ticket())->update($this->getDb());
                break;
            case 'page' : echo 'ser';
        }
    }

    private function delete($handler)
    {
        switch ($handler){
            case 'ticket' : (new ticket())->delete($this->getDb());
                break;
            case 'page' : echo 'ser';
        }
    }

    /**
     * @return mixed
     */
    public function getDb()
    {
        return $this->db;
    }
}