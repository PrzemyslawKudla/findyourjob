<?php
/**
 * Created by PhpStorm.
 * User: Przemek
 * Date: 17.10.2017
 * Time: 22:08
 */

require($_SERVER["DOCUMENT_ROOT"].'/app/api/DBConnector.php');

class User
{
    private $id_user;
    private $login;
    private $password;
    private $name;
    private $surname;
    private $email;
    private $rights;
    private $date_of_register;
    private $status;
    private $db;
    private $table = 'user';

    public function __construct()
    {
        $this->db = new DBConnector();
    }

    public function getIdUser()
    {
        return $this->id_user;
    }

    public function setIdUser($id_user)
    {
        $this->id_user = $id_user;
    }

    public function getLogin()
    {
        return $this->login;
    }

    public function setLogin($login)
    {
        $this->login = $login;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getSurname()
    {
        return $this->surname;
    }

    public function setSurname($surname)
    {
        $this->surname = $surname;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getRights()
    {
        return $this->rights;
    }

    public function setRights($rights)
    {
        $this->rights = $rights;
    }

    public function getDateOfRegister()
    {
        return $this->date_of_register;
    }

    public function setDateOfRegister($date_of_register)
    {
        $this->date_of_register = $date_of_register;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function deleteUserById($id)
    {
        $this->db->deleteRecordById($this->table, $id);
    }

    public function getUserDataById($id)
    {
        echo $this->db->getRecordsByID($this->table, $id);
    }

    public function getAllUsers()
    {
        echo $this->db->getTable($this->table);
    }
}