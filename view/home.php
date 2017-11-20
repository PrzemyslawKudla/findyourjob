<?php session_start();
?>

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
<?php require_once("top-menu.php") ?>
<div class="container">
    <div class="row">
    </div>
    <div class="row">
        <div class="col-lg-2">Hello <?= $_SESSION['userLogin'] ?></div>
        <div class="col-lg-8">
        </div>
        <div class="col-lg-2"></div>
    </div>
</div>

<script src="../js/scripts/jquery-3.2.1.min.js"></script>
<script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>
<script src="../js/libs/bootstrap/js/bootstrap.min.js"></script>
<script src="../js/ajax/login.js"></script>
</body>
</html>