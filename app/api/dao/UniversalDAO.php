<?php
/**
 * Created by PhpStorm.
 * User: Przemek
 * Date: 25.10.2017
 * Time: 16:45
 */

class UniversalDAO
{
    public $db;
    public $jsonUtils;

    function __construct()
    {
        try {
            require('http://przem94.ayz.pl/findYourJob' . '/app/api/JSONUtils.php');
            require('http://przem94.ayz.pl/findYourJob' . '/app/api/connection_data.php');
            $this->db = new PDO('mysql:host=' . $server_address . ';dbname=' . $db_name . ';charset=utf8', $user_login
                , $user_password);
            $this->jsonUtils = new JSONUtils();
        } catch (PDOException $e) {
            print "Błąd połączenia z bazą!: " . $e->getMessage() . "<br/>";
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

    public function doStandardQuery($queryString)
    {

    }

    public function doExec($execQuery)
    {

    }
}