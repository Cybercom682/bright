<?php
$adminPath = dirname(__DIR__);
require(PATH_ROOT . PATH_INCLUDES . '/vendor/autoload.php');

class backend
{
    public function init(string $templateName, string $startTemplateFile, bool $debug = false)
    {
        $smarty = new Smarty();
        $smarty->setTemplateDir(PATH_TEMPLATES)
            ->setCacheDir(PATH_COMPILEDIR)
            ->setDebugging($debug);

        return $smarty->display(PATH_ROOT . PATH_ADMIN . PATH_TEMPLATES . $templateName . '/' . $startTemplateFile);
    }
}