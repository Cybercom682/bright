<?php declare(strict_types=1);

// Config
$currentDirectory = __DIR__;
$parentDirectory = dirname($currentDirectory) . '/';


// Bright
define('BRIGHT_VERSION','v1.0.0.1a');
// Paths
define('PATH_ROOT', $parentDirectory);
define('PATH_ADMIN', 'admin/');
define('PATH_INCLUDES', 'includes/');
define('PATH_INC_LIBS', PATH_INCLUDES . 'libs/');
define('PATH_TEMPLATES', 'templates/');
define('PATH_COMPILEDIR', 'templates_c/');
define('PATH_PLUGINS', 'plugins/');