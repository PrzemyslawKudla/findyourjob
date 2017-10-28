<?php
/**
 * Created by PhpStorm.
 * User: Przemek
 * Date: 26.10.2017
 * Time: 22:34
 */

$app->get('/api/advertisement', function () {
    require($_SERVER["DOCUMENT_ROOT"] . '/app/api/domain/Advertisement.php');
    $advertisement = new  Advertisement();
    $advertisement->getAllAdvertisements();
});

$app->get('/api/advertisement/{id}', function (\Slim\Http\Request $request){
    require($_SERVER["DOCUMENT_ROOT"] . '/app/api/domain/Advertisement.php');
    $id = $request->getAttribute('id');
    $advertisement = new  Advertisement();
    $advertisement->getAdvertisementById($id);
});

$app->delete('/api/advertisement/{id}', function (\Slim\Http\Request $request) {
    require($_SERVER["DOCUMENT_ROOT"] . '/app/api/domain/Advertisement.php');
    $id = $request->getAttribute('id');
    $advertisement = new  Advertisement();
    $advertisement->deleteAdvertisementById($id);
});

$app->post('/api/advertisement', function (\Slim\Http\Request $request) {
    require($_SERVER["DOCUMENT_ROOT"] . '/app/api/domain/Advertisement.php');
});

$app->put('/api/advertisement', function (\Slim\Http\Request $request){
    require($_SERVER["DOCUMENT_ROOT"] . '/app/api/domain/Advertisement.php');
});