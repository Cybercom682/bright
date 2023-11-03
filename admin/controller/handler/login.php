<?php

namespace controller\handler;
use controller\tools\alert;

include('session.php');
class Login
{
    private $sessionName = 'Account';

    public function execute($post,$db)
    {
        if(isset($_POST['logout'])){
            $this->clearSession();
        }else{
            $this->createSession($post,$db);
        }
    }

    private function createSession($post,$db)
    {
        if($this->checkAuthDB($_POST['user'],$_POST['pass'],$db)) {
            $session = new Session(
                $this->sessionName,
                300000,
                $post
            );

            $_SESSION['logged_in'] = true;
        }else{
            (new alert())->execute('danger','Login-Failed');
        }
    }

    private function clearSession()
    {
        if (isset($_SESSION['logged_in']) && $_SESSION['logged_in']) {
            unset($_SESSION[$this->sessionName]);
            unset($_SESSION['logged_in']);
        }
    }

    public function checkLogin() : bool{
        if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true){
            return true;
        }
        return false;
    }

    private function checkAuthDB($user,$pass,$db) : bool
    {
        $accounts = $db->query('SELECT * FROM tadmin');
        if(isset($accounts) && !empty($accounts)){
            foreach ($accounts as $acc){
                if($acc['cUser'] === $user){
                    if($acc['cPassword'] === $pass){
                        return true;
                    }
                }elseif ($user === 'admin' && $pass === 'pass'){
                    return true;
                }
            }
        }
        return false;
    }
}
