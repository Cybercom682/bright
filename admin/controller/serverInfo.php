<?php
namespace controller;

class serverInfo
{
    public function getServerInfo()
    {
        return array(
            'Domain' => $_SERVER['HTTP_HOST'],
            'Bright' => BRIGHT_VERSION,
            'Host' => gethostname(),
            'System' => php_uname(),
            'PHP Version' => phpversion()
        );
    }
}