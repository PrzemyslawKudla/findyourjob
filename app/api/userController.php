<?php
/**
 * Created by PhpStorm.
 * User: Przemek
 * Date: 11.10.2017
 * Time: 21:31
 */

$app->get('/api/user', function () {
    require('domain/User.php');
    $user = new User();
    $user->getAllUsers();
});

$app->delete('/api/user', function (\Slim\Http\Request $request) {
    echo $request->getParsedBody()['id'];
});

$app->get('/api/user/{id}', function (\Slim\Http\Request $request){
    require('domain/User.php');
    $id = $request->getAttribute('id');
    $user = new User();
    $user->getUserDataById($id);
});

//
$app->post('/api/user', function (\Slim\Http\Request $request) {
    //  require_once('DBConnector.php');
    print_r($request->getParams());

});

//$app->put('/api/user/', function (\Slim\Http\Request $request){
//    require_once('DBConnector.php');
//    $name = $request->getParsedBody()['name'];
//    echo "test put ".$name;
//});

