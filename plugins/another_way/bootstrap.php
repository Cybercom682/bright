<?php

use controller\services\pluginService;

class another_way extends pluginService
{
    public function initialize($db,$smarty): void
    {
        if($this->getPlugin()->getConfigValue('test_activate_plugin') === 'on'){
            $smarty->assign('tp_isActive',true);
        }else{
            $smarty->assign('tp_isActive',false);
        }
    }
}
