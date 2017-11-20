<?php
/**
 * Created by PhpStorm.
 * User: Przemek
 * Date: 12.11.2017
 * Time: 19:06
 */

$app->post('/api/logout', function (\Slim\Http\Request $request) {
    require($_SERVER["DOCUMENT_ROOT"] . '/app/api/functions/UserAccess.php');
    $loginUser = new UserAccess();
    $loginUser->logOut();
});