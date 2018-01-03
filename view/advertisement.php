<?php
if(!isset($_SESSION))
{
    session_start();
}
if (isset($_SESSION) && isset($_SESSION['is-logged-in']) && $_SESSION['is-logged-in'] != null) {
}
else {
    header('Location: ' . '/view/login.php');
    exit;
}


?>

<!DOCTYPE html>
<html lang="pl_PL">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Advertisement</title>


    <link href="../js/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/pages/advertisement.css" rel="stylesheet">
    <link href="../css/partials/top-menu.css" rel="stylesheet">
    <link href="../css/_global-styles.css" rel="stylesheet">
</head>
<body>
<?php require_once("top-menu.php") ?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="main-content">
                <h5 class="adds-header">Details of advertisement</h5>
            </div>
            <div id="map"></div>
            <script async defer
                    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyABbVxkDhVsqJvAmuZuVx2gH5isBBEXtrw&callback=initMap">
            </script>
        </div>
    </div>
</div>


<script src="../js/scripts/jquery-3.2.1.min.js"></script>
<script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>
<script src="../js/libs/bootstrap/js/bootstrap.min.js"></script>
<script src="../js/ajax/log-out.js"></script>
<script src="../js/pages/advertisement.js"></script>
</body>
</html>