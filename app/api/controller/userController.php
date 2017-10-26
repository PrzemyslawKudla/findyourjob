<?php
/**
 * Created by PhpStorm.
 * User: Przemek
 * Date: 11.10.2017
 * Time: 21:31
 */

$app->get('/api/user', function () {
    require($_SERVER["DOCUMENT_ROOT"] . '/app/api/domain/User.php');
    $user = new User();
    $user->getAllUsers();
});

$app->delete('/api/user/{id}', function (\Slim\Http\Request $request) {
    require($_SERVER["DOCUMENT_ROOT"] . '/app/api/domain/User.php');
    $id = $request->getAttribute('id');
    $user = new User();
    $user->deleteUserById($id);
});

$app->get('/api/user/{id}', function (\Slim\Http\Request $request){
    require($_SERVER["DOCUMENT_ROOT"] . '/app/api/domain/User.php');
    $id = $request->getAttribute('id');
    $user = new User();
    $user->getUserDataById($id);
});

$app->post('/api/user', function (\Slim\Http\Request $request) {
    require($_SERVER["DOCUMENT_ROOT"] . '/app/api/domain/User.php');
    $login = $request->getParsedBody()['login'];
    $password = $request->getParsedBody()['password'];
    $name = $request->getParsedBody()['name'];
    $surname = $request->getParsedBody()['surname'];
    $email = $request->getParsedBody()['email'];
    $rights = $request->getParsedBody()['rights'];
    $status = $request->getParsedBody()['status'];

    $user = new User();
    $user->addUser($login,$password,$name,$surname,$email,$rights,$status);
});

$app->put('/api/user', function (\Slim\Http\Request $request){
    require($_SERVER["DOCUMENT_ROOT"] . '/app/api/domain/User.php');
    $name = $request->getParsedBody()['name'];
    $surname = $request->getParsedBody()['surname'];
    $email = $request->getParsedBody()['email'];
    $id = $request->getParsedBody()['id'];

    $user = new User();
    $user->updateUserByID($id, $name, $surname, $email);

});

