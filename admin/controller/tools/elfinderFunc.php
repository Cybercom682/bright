<?php

namespace controller\tools;
$root = dirname(dirname(dirname(__DIR__)));
require ( $root . '/includes/vendor/autoload.php');
require ( $root . '/includes/defines.php');
use elFinder;
use elFinderConnector;
use Exception;

$rootURL = 'http://localhost/bright/admin';

$opts = array(
    'roots' => array(
        array(
            'driver' => 'LocalFileSystem',
            'path' => PATH_ROOT,
            'URL' => $rootURL
        )
    )
);

$connector = new elFinderConnector(new elFinder($opts));

try {
    $connector->run();
} catch (Exception $e) {
    echo $e->getMessage();
}
