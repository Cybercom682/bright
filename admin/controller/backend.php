<?php

use controller\serverInfo;
use controller\tools\poster;
use controller\visitors;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use tools\smartyFuncs;

$adminPath = dirname(__DIR__);
require(PATH_ROOT . PATH_INCLUDES . '/vendor/autoload.php');
require(PATH_ROOT . PATH_INCLUDES . '/controller/xmlHelper.php');
require(PATH_ROOT . PATH_INCLUDES . '/controller/database.php');
require(PATH_ROOT . PATH_ADMIN . '/controller/serverInfo.php');
require(PATH_ROOT . PATH_ADMIN . '/controller/visitors.php');
require(PATH_ROOT . PATH_ADMIN . '/controller/tools/smartyFuncs.php');
require(PATH_ROOT . PATH_ADMIN . '/controller/tools/poster.php');

class backend
{
    public function init(string $templateName, string $startTemplateFile, bool $debug = false)
    {
        $logger = new Logger('backend');
        $logFilePath = PATH_ROOT . 'log/log.txt';
        $logger->pushHandler(new StreamHandler($logFilePath));

        $db = new database();
        $db->connect();

        $smarty = new Smarty();
        (new smartyFuncs($smarty,$db));
        (new visitors())->initSmarty($smarty);

        $smarty->setTemplateDir(PATH_TEMPLATES)
            ->setCacheDir(PATH_COMPILEDIR)
            ->assign('templatePath', PATH_TEMPLATES . $templateName)
            ->assign('rootPath', PATH_ROOT)
            ->assign('vendorPath', PATH_INCLUDES . 'vendor/')
            ->assign('logValues',$this->getArrayFromFile($logFilePath))
            ->assign('includesPath',PATH_INCLUDES)
            ->assign('serverInfo', (new serverInfo())->getServerInfo())
            ->assign('sidebar',$this->executeConfig(PATH_ROOT . PATH_ADMIN . PATH_TEMPLATES . $templateName . '/template.xml')->xpath('//sidebar'))
            ->setDebugging($debug);

        (new poster($smarty));

        return $smarty->display(PATH_ROOT . PATH_ADMIN . PATH_TEMPLATES . $templateName . '/' . $startTemplateFile);
    }

    private function executeConfig($templateXml){
        $xml = new xmlHelper();
        $configArray = $xml->readFromXml($templateXml, 1);
        if(!empty($configArray)){
            return $configArray;
        }
        return false;
    }

    public function getArrayFromFile($filepath)
    {
        $output = array();
        if (file_exists($filepath)) {
            $fileContent = file($filepath, FILE_IGNORE_NEW_LINES);
            if ($fileContent !== false) {
                $output = $fileContent;
            }
        }

        return $output;
    }

}