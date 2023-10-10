<?php

namespace controller\tools;
use elFinder;
use elFinderConnector;
use Exception;

class elfinderFunc
{
    /**
     * @throws Exception
     */
    public function init(): void
    {
        $opts = array(
            'roots' => array(
                array(
                    'driver' => 'LocalFileSystem',
                    'path' => '/',
                    'URL' => 'localhost/bright/admin'
                )
            )
        );
        $connector = new elFinderConnector(new elFinder($opts));
        $connector->run();
    }

}