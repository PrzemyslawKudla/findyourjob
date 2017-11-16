<?php
/**
 * Created by PhpStorm.
 * User: Przemek
 * Date: 12.11.2017
 * Time: 19:48
 */

session_start();

class UserAccessDAO
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

    public function logIn($userLogin, $password)
    {

        $login = $this->filterUserData($userLogin);
        $pass = $this->filterUserData($password);
        $hash = $this->generateHash($login . time());
        $_SESSION['hash'] = $hash;
        $_SESSION['userLogin'] = $login;

        $res = $this->db->prepare("SELECT id_user, login, password, salt, rights, name FROM user WHERE login = :login");
        $res->bindValue(':login', $login, PDO::PARAM_STR);
        $res->execute();
        if ($res->rowCount() < 1) {
            $this->jsonUtils->convert_to_json(false, 100, "Incorrect user login");
            exit;
        }
        $res = $res->fetch(PDO::FETCH_ASSOC);
        $salt = $res['salt'];

        $user = array();
        $user['rights'] = $res['rights'];
        $user['name'] = $res['name'];
        $user['id'] = $res['id_user'];
        $pass_in_db = $res['password'];

        $decodePass = PassCrypt::compare($pass_in_db, $pass, $salt);

        if ($decodePass) {
            $this->db->exec("UPDATE `user` SET `last_login` = " . time() . " WHERE login = '" . $login . "';");

            $res = $this->db->prepare("SELECT id_user FROM user WHERE login= :login");
            $res->bindValue(':login', $login, PDO::PARAM_STR);
            $success = $res->execute();

            $res = $res->fetch(PDO::FETCH_ASSOC);
            $user_id = $res['id_user'];
            $query = $this->db->query("INSERT INTO session(session_id, user_id, hash) VALUES('','" . $user_id . "','" . $hash . "')");
            if ($query && $success) {
                $this->jsonUtils->convert_to_json($user, 200, "Login success");
            }
        } else {
            $this->jsonUtils->convert_to_json(null, 100, "Login failed. Incorrect credentials");
            exit;
        }
    }

    public function register($login, $pass1, $pass2, $email, $name, $surname)
    {
        if ($this->checkFields($login, $pass1, $pass2, $email, $name, $surname)) {

            $login = $this->filterUserData($login);
            $pass1 = $this->filterUserData($pass1);
            $pass2 = $this->filterUserData($pass2);
            $email = $this->filterUserData($email);
            $name = $this->filterUserData($name);
            $surname = $this->filterUserData($surname);

            if (!preg_match('/^([a-z|A-Z|0-9]{4,20})@([a-z|A-Z|0-9]{2,10})\\.(pl|gr|com)$/', $email)) {
                $this->jsonUtils->convert_to_json(false, 103, "Incorrect email address");
                exit;
            }

            $query = $this->db->prepare("SELECT * FROM user WHERE login = :login");
            $query->bindValue(':login', $login, PDO::PARAM_STR);
            $query->execute();

            if ($query->rowCount() == 0) {
                if ($pass1 == $pass2) {
                    $salt = PassCrypt::salt($pass1);
                    $pass1 = PassCrypt::encode($pass1, $salt);
                    $dateDays = date('Y-m-d');
                    $result = $this->db->exec("INSERT INTO `user` (`id_user`, `login`, `password`, `salt`, `name`, `surname`, `email`, `rights`, `date_of_register`, `last_login`, `status`)
			        VALUES('', '" . $login . "', '" . $pass1 . "', '" . $salt . "', '" . $name . "', '" . $surname . "', '" . $email . "', 3, " . $dateDays . ", " . $dateDays . ", " . 0 . ")");

                    if ($result) {
                        $this->jsonUtils->convert_to_json(true, 201, "Record added to database");
                    } else {
                        $this->jsonUtils->convert_to_json(false, 105, "INSERT error");
                    }
                } else $this->jsonUtils->convert_to_json(false, 106, "Password isn't the same");
            } else $this->jsonUtils->convert_to_json(false, 107, "This login is in use");
        } else $this->jsonUtils->convert_to_json(false, 108, "PLease, fill all fields");
    }

    private function filterUserData($string)
    {
        $string = htmlentities($string, ENT_QUOTES, "UTF-8");
        $this->db->quote($string);
        return $string;
    }

    private function checkFields($login, $pass1, $pass2, $email, $name, $surname)
    {
        return ($login != null && $pass1 != null && $pass2 != null && $email != null && $name != null && $surname != null);
    }

    private function generateHash($stringToHash)
    {
        return substr(md5(microtime() . substr($stringToHash, 2, 6)), 0, 10);
    }

    public function checkUserIsLoggedIn($userLogin)
    {
        if (isset($_SESSION['hash']) && $_SESSION['hash']) {
            if($_SESSION['hash'] == $this->getHashByID($this->getIdByLogin($userLogin))) {
                $this->jsonUtils->convert_to_json(true,203,'User is logged in');
            }
            else {
                $this->jsonUtils->convert_to_json(false,106,'User is not logged in!');
            }
        }
    }

    private function getIdByLogin($userLogin)
    {
        $res = $this->db->prepare("SELECT id_user FROM user WHERE login= :login");
        $res->bindValue(':login', $userLogin, PDO::PARAM_STR);
        $success = $res->execute();
        $res = $res->fetch(PDO::FETCH_ASSOC);
        if ($success) {
            return $res['id_user'];
        } else {
            return null;
        }
    }

    public function getHashByID($ID) {
        $res = $this->db->prepare("SELECT hash FROM session WHERE user_id= :id_user");
        $res->bindValue(':id_user', $ID, PDO::PARAM_STR);
        $success = $res->execute();
        $res = $res->fetch(PDO::FETCH_ASSOC);
        if ($success) {
            return $res['hash'];
        } else {
            return null;
        }
    }
}