<?php session_start(); ?>

<!DOCTYPE html>
<html lang="pl_PL">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>


    <link href="../js/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/pages/login-page.css" rel="stylesheet">
    <link href="../css/partials/top-menu.css" rel="stylesheet">
    <link href="../css/global-styles.css" rel="stylesheet">

</head>
<body>
<?php require_once("top-menu.php")?>
<div class="container">
    <div class="row">
        <h2>Home page - User : <?=  $_SESSION['userLogin'] ?></h2>
        <p><?php print_r($_SESSION['user_data']); ?></p>
    </div>
</div>

<script src="../js/scripts/jquery-3.2.1.min.js"></script>
<script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>
<script src="../js/libs/bootstrap/js/bootstrap.min.js"></script>
<script src="../js/ajax/login.js"></script>
</body>
</html>