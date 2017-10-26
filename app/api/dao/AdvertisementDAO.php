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
}