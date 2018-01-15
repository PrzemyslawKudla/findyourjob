<?php
/**
 * Created by PhpStorm.
 * User: Przemek
 * Date: 26.10.2017
 * Time: 22:34
 */

$app->get('/api/advertisement', function () {
    require('../app/api/domain/Advertisement.php');
    $advertisement = new  Advertisement();
    $advertisement->getAllAdvertisements();
});

$app->get('/api/advertisement/{id}', function (\Slim\Http\Request $request) {
    require('../app/api/domain/Advertisement.php');
    $id = $request->getAttribute('id');
    $advertisement = new  Advertisement();
    $advertisement->getAdvertisementById($id);
});

$app->get('/api/advertisements', function (\Slim\Http\Request $request) {
    require('../app/api/domain/Advertisement.php');
    $advertisement = new Advertisement();
    $advertisement->getSingleAdvertisementDataArray();
});

$app->get('/api/localization/{id}', function (\Slim\Http\Request $request) {
    require('../app/api/domain/Advertisement.php');
    $id = $request->getAttribute('id');
    $advertisement = new Advertisement();
    $advertisement->getCompanyLocalization($id);
});

$app->delete('/api/advertisement/{id}', function (\Slim\Http\Request $request) {
    require('../app/api/domain/Advertisement.php');
    $id = $request->getAttribute('id');
    $advertisement = new  Advertisement();
    $advertisement->deleteAdvertisementById($id);
});

$app->post('/api/advertisement', function (\Slim\Http\Request $request) {
    require('../app/api/domain/Advertisement.php');
    $title = $request->getParsedBody()['title'];
    $description = $request->getParsedBody()['description'];
    $salary = $request->getParsedBody()['salary'];
    $user_id = $request->getParsedBody()['user_id'];
    $category_id = $request->getParsedBody()['category_id'];
    $localization_id = $request->getParsedBody()['localization_id'];

    $advertisement = new  Advertisement();
    $advertisement->addAdvertisement($title, $description, $salary, $user_id, $category_id, $localization_id);
});

$app->put('/api/advertisement', function (\Slim\Http\Request $request) {
    require('../app/api/domain/Advertisement.php');
    $advertisement_id = $request->getParsedBody()['advertisement_id'];
    $title = $request->getParsedBody()['title'];
    $description = $request->getParsedBody()['description'];
    $salary = $request->getParsedBody()['salary'];
    $category_id = $request->getParsedBody()['category_id'];
    $localization_id = $request->getParsedBody()['localization_id'];

    $advertisement = new  Advertisement();
    $advertisement->updateAdvertisement($advertisement_id, $title, $description, $salary, $category_id, $localization_id);
});