<?php
/**
 * Created by PhpStorm.
 * User: Przemek
 * Date: 12.11.2017
 * Time: 19:08
 */

require('http://przem94.ayz.pl/findYourJob' . '/app/api/dao/UserAccessDAO.php');

class UserAccess
{
    private $userAcces;

    public function __construct()
    {
        $this->userAcces = new UserAccessDAO();
    }

    public function logIn($login, $password)
    {
        $this->userAcces->logIn($login, $password);
    }

    public function register($login, $pass1, $pass2, $email, $name, $surname)
    {
        $this->userAcces->register($login, $pass1, $pass2, $email, $name, $surname);
    }

    public function checkUserIsLoggedIn($userLogin)
    {
       return $this->userAcces->checkUserIsLoggedIn($userLogin);
    }

    public function checkHash($id) {
       return $this->userAcces->getHashByID($id);
    }

    public function logOut() {
        $this->userAcces->logOut();
    }
}

