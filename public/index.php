<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';

$app = new \Slim\App;
    require_once('../app/api/controller/userController.php');
    require_once('../app/api/controller/advertisementController.php');
    require_once('../app/api/controller/login.php');
    require_once('../app/api/controller/register.php');
    require_once('../app/api/controller/logout.php');
$app->run();



