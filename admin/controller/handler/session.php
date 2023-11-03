<?php

namespace controller\handler;

class session
{
    public function __construct($sessionName, $sessionTimeout, $postData)
    {

        if (session_status() == PHP_SESSION_NONE) {
            session_name($sessionName);
            session_start();
        }

        if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity'] > $sessionTimeout)) {
            session_unset();
            session_destroy();
            session_start();
        }

        $_SESSION['last_activity'] = time();

        $_SESSION['postData'] = $postData;
    }
}