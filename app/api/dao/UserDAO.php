<?php
/**
 * Created by PhpStorm.
 * User: Przemek
 * Date: 07.10.2017
 * Time: 17:55
 */


class UserDAO
{

    public $db;
    public $jsonUtils;

    function __construct()
    {
        try {
            require($_SERVER["DOCUMENT_ROOT"] . '/app/api/JSONUtils.php');
            require($_SERVER["DOCUMENT_ROOT"] . '/app/api/connection_data.php');
            require($_SERVER["DOCUMENT_ROOT"] . '/app/api/PassCrypt.php');
            $this->db = new PDO('mysql:host=' . $server_address . ';dbname=' . $db_name . ';charset=utf8', $user_login
                , $user_password);
            $this->jsonUtils = new JSONUtils();
        } catch (PDOException $e) {
            print "Error while connecting with database: " . $e->getMessage();
            die();
        }
    }

    public function getTable($tableName)
    {
        $query = 'SELECT * FROM ' . $tableName;
        $query = $this->db->query($query);
        $this->jsonUtils->processResult($query,200,'Success, all users downloaded',101,
            'Error while getting users');
    }

    public function getPublicUserData($tableName, $id)
    {
        $query = $this->db->prepare("SELECT `login`, `name`, `surname`, `email` FROM  $tableName WHERE `id_user`=:id_user");
        $query->bindParam(':id_user', $id);
        $query->execute();
        $this->jsonUtils->processResult($query,200,'Success, user public data downloaded',
            101,'Error while getting user public data');
    }

    public function getRecordsByID($tableName, $id)
    {
        $query = $this->db->prepare("SELECT * FROM $tableName WHERE  id_user=$id");
        $query->execute();
        $this->jsonUtils->processResult($query,200,'Success, record downloaded',101,
            'Error while getting record');
    }

    public function deleteRecordById($id)
    {
        $query = $this->db->prepare("DELETE FROM user WHERE id_user = :id_user");
        $query->bindParam(':id_user', $id);
        $query->execute();

        $this->jsonUtils->processResult($query,200,"Success, record (id=$id) deleted",101,
            'Error while deleting record');
    }

    public function addUser($login, $password, $name, $surname, $email, $rights, $status)
    {
        $salt = PassCrypt::salt($password);
        $pass = PassCrypt::encode($password, $salt);
        $date = date('Y-m-d');
        $query = $this->db->prepare("INSERT INTO user (`login`, `password`, `salt`, `name`, `surname`, `email`, `rights`, `date_of_register`, `status`) 
                                              VALUES (:login, :password, :salt, :user_name, :surname, :email, :rights, '$date', :status)");
        $query->bindParam(':login', $login);
        $query->bindParam(':password', $pass);
        $query->bindParam(':salt', $salt);
        $query->bindParam(':user_name', $name);
        $query->bindParam(':surname', $surname);
        $query->bindParam(':email', $email);
        $query->bindParam(':rights', $rights);
        $query->bindParam(':status', $status);
        $query->execute();

        $this->jsonUtils->processResultInsert($query,200,"Success, user added",101,
            'Error while adding user');
    }

    public function updateUser($id, $name, $surname, $email)
    {
        $query = $this->db->prepare("UPDATE user SET `name` = :user_name, `surname` = :surname, `email` = :email WHERE `id_user` = :id");
        $query->bindParam(':user_name', $name);
        $query->bindParam(':surname', $surname);
        $query->bindParam(':email', $email);
        $query->bindParam(':id', $id);
        $query->execute();

        $this->jsonUtils->processResultInsert($query,200,"Success, user updated",101,
            'Error while updating user');
    }
}


