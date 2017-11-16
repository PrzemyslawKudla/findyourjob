<?php
/**
 * Created by PhpStorm.
 * User: Przemek
 * Date: 15.11.2017
 * Time: 21:27
 */


$app->post('/api/register', function (\Slim\Http\Request $request) {
    require($_SERVER["DOCUMENT_ROOT"] . '/app/api/functions/UserAccess.php');
    $login = $request->getParsedBody()['login'];
    $password1 = $request->getParsedBody()['password1'];
    $password2 = $request->getParsedBody()['password2'];
    $email = $request->getParsedBody()['email'];
    $name = $request->getParsedBody()['name'];
    $surname = $request->getParsedBody()['surname'];

    $registerUser = new UserAccess();
    $registerUser->register($login, $password1, $password2,$email, $name, $surname);
});