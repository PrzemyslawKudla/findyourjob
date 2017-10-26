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
        $rows = array();

        if ($query != null) {
            while ($result = $query->fetch(PDO::FETCH_ASSOC)) {
                $rows[] = $result;
            }
            $this->jsonUtils->convert_to_json($rows, 200, 'Success, table downloaded');
            $query->closeCursor();
        } else {
            $this->jsonUtils->throwError(101, 'Error while getting table');
        }
    }

    public function getRecordsByID($tableName, $id)
    {
        $query = $this->db->prepare("SELECT * FROM $tableName WHERE  id_user=$id");
        $query->execute();
        $rows = array();
        if ($query->rowCount() > 0) {
            while ($result = $query->fetch(PDO::FETCH_ASSOC)) {
                $rows[] = $result;
            }
            $this->jsonUtils->convert_to_json($rows, 200, 'Success, record downloaded');
            $query->closeCursor();
        } else {
            $this->jsonUtils->throwError(101, 'Error while getting record');
        }
    }

    public function deleteRecordById($id)
    {
        $query = $this->db->prepare("DELETE FROM user WHERE id_user = :id_user");
        $query->bindParam(':id_user', $id);
        $query->execute();

        if ($query->rowCount() > 0) {
            $this->jsonUtils->convert_to_json(null, 200, "Success, record (id=$id) deleted");
            $query->closeCursor();
        } else {
            $this->jsonUtils->throwError(101, 'Error while deleting record');
        }
    }

    public function addUser($login, $password, $name, $surname, $email, $rights, $status)
    {   $date = date('Y-m-d');
        $query = $this->db->prepare("INSERT INTO user (`login`, `password`, `name`, `surname`, `email`, `rights`, `date_of_register`, `status`) 
                                              VALUES (:login, :password, :user_name, :surname, :email, :rights, '$date', :status)");
        $query->bindParam(':login', $login);
        $query->bindParam(':password', $password);
        $query->bindParam(':user_name', $name);
        $query->bindParam(':surname', $surname);
        $query->bindParam(':email', $email);
        $query->bindParam(':rights', $rights);
        $query->bindParam(':status', $status);
        $result = $query->execute();

        if ($result) {
            $this->jsonUtils->convert_to_json(null, 200, "Success, user added to database");
            $query->closeCursor();
        } else {
            $this->jsonUtils->throwError(101, 'Error while adding user');
        }
    }

    public function updateUser($id, $name, $surname, $email) {
        $query = $this->db->prepare("UPDATE user SET `name` = :user_name, `surname` = :surname, `email` = :email WHERE `id_user` = :id");
        $query->bindParam(':user_name', $name);
        $query->bindParam(':surname', $surname);
        $query->bindParam(':email', $email);
        $query->bindParam(':id', $id);
        $result = $query->execute();

        if ($result) {
            $this->jsonUtils->convert_to_json(null, 200, "Success, user updated");
            $query->closeCursor();
        } else {
            $this->jsonUtils->throwError(101, 'Error while updating user');
        }
    }
}


