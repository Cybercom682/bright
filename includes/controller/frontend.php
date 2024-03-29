<?php
require(dirname(__DIR__) . '/vendor/autoload.php');
class frontend
{
    public function init(string $templateName, string $startTemplateFile, bool $debug = false)
    {
        $smarty = new Smarty();
        $smarty->setTemplateDir(PATH_TEMPLATES)
            ->setCacheDir(PATH_COMPILEDIR)
            ->setDebugging($debug);

        return $smarty->display(PATH_ROOT . PATH_TEMPLATES . $templateName . '/' . $startTemplateFile);
    }
}