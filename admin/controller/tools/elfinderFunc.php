<?php

namespace controller;
use elFinder;
use elFinderConnector;

class elfinderFunc
{
    /**
     * @throws Exception
     */
    public function init()
    {
        $opts = array(
            'roots' => array(
                array(
                    'driver' => 'LocalFileSystem',
                    'path' => '/',
                    'URL' => 'http://localhost/'
                )
            )
        );
        $connector = new elFinderConnector(new elFinder($opts));
        $connector->run();
    }

}