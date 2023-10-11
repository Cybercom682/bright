<?php
require(dirname(__DIR__) . '/includes/defines.php');
require(dirname(__DIR__) . '/includes/config.php');
require('controller/backend.php');

$backend = new backend();
$backend->init('bootstrap','layout/index.tpl');