<?php

use controller\services\pluginService;
use controller\tools\alert;

class test_plugin extends pluginService
{
    public function initialize($db,$smarty): void
    {
        if(isset($_GET['test'])){
            (new alert())->execute('success',$this->getPlugin()->cTitle . ' erfolgreich gestartet!');
        }
    }
}