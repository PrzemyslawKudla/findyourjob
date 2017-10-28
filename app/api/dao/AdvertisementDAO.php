<?php
/**
 * Created by PhpStorm.
 * User: Przemek
 * Date: 26.10.2017
 * Time: 22:33
 */

class AdvertisementDAO
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

    public function getTable($tableName) {
        $query = 'SELECT * FROM ' . $tableName;
        $query = $this->db->query($query);
        $this->jsonUtils->processResult($query,200,"Success, advertisements downloaded",101,
            'Error while getting advertisements');
    }

    public function getAdvertisementByID($id)
    {
        $query = $this->db->prepare("SELECT * FROM advertisement WHERE  id_advertisement=$id");
        $query->execute();
        $this->jsonUtils->processResult($query,200,"Success, advertisement (id=$id) downloaded",101,
            "Error while getting advertisement (id=$id)");
    }

    public function deleteAdvertisementById($id)
    {
        $query = $this->db->prepare("DELETE FROM advertisement WHERE id_advertisement = :id_ad");
        $query->bindParam(':id_ad', $id);
        $query->execute();

        $this->jsonUtils->processResult($query,200,"Success, advertisement (id=$id) deleted",101,
            'Error while deleting advertisement');
    }
}