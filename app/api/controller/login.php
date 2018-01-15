<?php
/**
 * Created by PhpStorm.
 * User: Przemek
 * Date: 12.11.2017
 * Time: 19:06
 */

$app->post('/api/login', function (\Slim\Http\Request $request) {
    require('http://przem94.ayz.pl/findYourJob' . '/app/api/functions/UserAccess.php');
    $login = $request->getParsedBody()['login'];
    $password = $request->getParsedBody()['password'];

    $loginUser = new UserAccess();
    $loginUser->logIn($login, $password);
});