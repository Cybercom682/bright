<?php

namespace controller\tools;
include (__DIR__ . '/cache.php');

class poster
{
    private mixed $smarty;

    /**
     * @param $smarty
     */
    public function __construct($smarty)
    {
        $this->smarty = $smarty;
        $this->init();
    }

    /**
     * @return void
     */
    public function init(): void
    {
        if (isset($_POST['action'])){
            switch ($_POST['action']){
                case 'create' : echo 'create!';
                    break;
                case 'update' : echo 'update!';
                    break;
                case 'delete' : echo 'delete!';
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
}