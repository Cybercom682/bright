<?php
require(__DIR__ . '/includes/defines.php');
require(PATH_ROOT . PATH_INCLUDES . 'controller/frontend.php');


$frontend = new frontend();
$frontend->init('bright','layout/index.tpl');