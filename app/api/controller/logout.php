<?php
/**
 * Created by PhpStorm.
 * User: Przemek
 * Date: 12.11.2017
 * Time: 19:06
 */

$app->post('/api/logout', function (\Slim\Http\Request $request) {
    require('http://przem94.ayz.pl/findYourJob' . '/app/api/functions/UserAccess.php');
    $loginUser = new UserAccess();
    $loginUser->logOut();
});