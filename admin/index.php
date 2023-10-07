<?php
require(dirname(__DIR__) . '/includes/defines.php');
require('controller/backend.php');


$backend = new backend();
$backend->init('bootstrap','layout/index.tpl');