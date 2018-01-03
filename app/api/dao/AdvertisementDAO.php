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

    public function getTable($tableName)
    {
        $query = 'SELECT * FROM ' . $tableName;
        $query = $this->db->query($query);
        $this->jsonUtils->processResult($query, 200, "Success, advertisements downloaded", 101,
            'Error while getting advertisements');
    }

    public function getAdvertisementByID($id)
    {
        $query = $this->db->prepare("SELECT * FROM advertisement WHERE  id_advertisment=$id");
        $query->execute();
        $this->jsonUtils->processResult($query, 200, "Success, advertisement (id=$id) downloaded", 101,
            "Error while getting advertisement (id=$id)");
    }

    public function deleteAdvertisementById($id)
    {
        $query = $this->db->prepare("DELETE FROM advertisement WHERE id_advertisment = :id_ad");
        $query->bindParam(':id_ad', $id);
        $query->execute();

        $this->jsonUtils->processResult($query, 200, "Success, advertisement (id=$id) deleted", 101,
            'Error while deleting advertisement');
    }

    public function addAdvertisement($title, $description, $salary, $user_id, $category_id, $localization_id)
    {
        $start_date = date('Y-m-d');
        $exp_date = strtotime($start_date);
        $exp_date = strtotime("+14 day", $exp_date);
        $exp_date = date('Y-m-d', $exp_date);

        $query = $this->db->prepare("INSERT INTO advertisement (`title`, `description`, `salary`, `user_id`, `status_id`, `category_id`, `localization_id`, `expiration_date`) 
                                              VALUES (:title, :description, :salary, :user_id, 1, :category_id, :localization_id, '$exp_date')");
        $query->bindParam(':title', $title);
        $query->bindParam(':description', $description);
        $query->bindParam(':salary', $salary);
        $query->bindParam(':user_id', $user_id);
        $query->bindParam(':category_id', $category_id);
        $query->bindParam(':localization_id', $localization_id);
        $query->execute();

        $this->jsonUtils->processResultInsert($query, 200, "Success, user advertisement", 101,
            'Error while adding advertisement');
    }

    public function updateAdvertisement($id, $title, $description, $salary, $category_id, $localization_id)
    {
        $query = $this->db->prepare("UPDATE advertisement SET `title` = :title, `description` = :description,
                                              `salary` = :salary, `category_id` = :category_id, `localization_id` = :localization_id  
                                              WHERE `id_advertisement` = :id");
        $query->bindParam(':id', $id);
        $query->bindParam(':title', $title);
        $query->bindParam(':description', $description);
        $query->bindParam(':salary', $salary);
        $query->bindParam(':category_id', $category_id);
        $query->bindParam(':localization_id', $localization_id);
        $query->execute();

        $this->jsonUtils->processResultInsert($query, 200, "Success, advertisement updated", 101,
            'Error while updating advertisement');
    }

    public function getSingleAdvertisementDataArray()
    {
        $query = "SELECT a.title, a.description, a.salary, a.expiration_date, a.added_date, u.name as userName,
                  c.name as company, j.name as category, l.address FROM advertisement a, user u, company c,
                  job_category j, localization l, advertisement_category ac 
                    WHERE u.id_user = a.user_id 
                    AND a.localization_id = l.id_localization
                    AND a.id_advertisment = ac.advertisement_id
                    AND j.id_category = ac.category_id";

        $result = $this->db->query($query);
        $this->jsonUtils->processResult($result, 220, "Success, array of single advertisements downloaded", 109,
            'Error while getting array of single adds');
    }

    public function getCompanyLocalization($id)
    {
        $query = "SELECT longitude, latitude FROM localization WHERE id_localization = $id";
        $result = $this->db->query($query);
        $this->jsonUtils->processResult($result, 223, "Success, localization downloaded", 114,
            'Error while getting localization');
    }
}