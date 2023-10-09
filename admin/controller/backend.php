<?php

use controller\serverInfo;
use tools\smartyFuncs;

$adminPath = dirname(__DIR__);
require(PATH_ROOT . PATH_INCLUDES . '/vendor/autoload.php');
require(PATH_ROOT . PATH_INCLUDES . '/controller/xmlHelper.php');
require(PATH_ROOT . PATH_ADMIN . '/controller/serverInfo.php');
require(PATH_ROOT . PATH_ADMIN . '/controller/tools/smartyFuncs.php');

class backend
{
    public function init(string $templateName, string $startTemplateFile, bool $debug = false)
    {
        $smarty = new Smarty();
        $functions = new smartyFuncs($smarty);
        $smarty->setTemplateDir(PATH_TEMPLATES)
            ->setCacheDir(PATH_COMPILEDIR)
            ->assign('templatePath', PATH_TEMPLATES . $templateName)
            ->assign('serverInfo', (new serverInfo())->getServerInfo())
            ->assign('templateConf',$this->executeConfig($smarty,PATH_ROOT . PATH_ADMIN . PATH_TEMPLATES . $templateName . '/template.xml'))
            ->setDebugging($debug);
        return $smarty->display(PATH_ROOT . PATH_ADMIN . PATH_TEMPLATES . $templateName . '/' . $startTemplateFile);
    }

    private function executeConfig(Smarty $smarty, $templateXml){
        $xml = new xmlHelper();
        $configArray = $xml->readFromXml($templateXml, 0);
        if(!empty($configArray)){
            return $configArray;
        }
        return false;
    }
}