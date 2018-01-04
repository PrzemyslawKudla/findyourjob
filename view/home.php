<?php
if(!isset($_SESSION))
{
    session_start();
}
if (isset($_SESSION) && isset($_SESSION['is-logged-in']) && $_SESSION['is-logged-in'] != null) {
print_r($_SESSION);
}
else {
    header('Location: ' . 'findYourJob/view/login.php');
    exit;
}


?>

<!DOCTYPE html>
<html lang="pl_PL">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>


    <link href="../js/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/pages/home-page.css" rel="stylesheet">
    <link href="../css/partials/top-menu.css" rel="stylesheet">
    <link href="../css/_global-styles.css" rel="stylesheet">

</head>
<body>
<?php require_once("top-menu.php") ?>
<div class="container main-container">
    <div class="row">
        <div class="col-lg-3">
            <div class="left-nav">
                <h5 class="categories-header">Categories:</h5>
                <div class="left-panel">
                    <div class="categories">
                        <ul>
                            <li><a href="#">Java</a></li>
                            <li><a href="#">PHP</a></li>
                            <li><a href="#">Spring</a></li>
                            <li><a href="#">C++</a></li>
                            <li><a href="#">Java Script</a></li>
                        </ul>
                    </div>

                    <h5 class="newest-header">Newest advertisements:</h5>
                    <div class="newest">
                        <ul>
                            <li><a href="#">Junior JAVA developer - Kraków</a></li>
                            <li><a href="#">PHP Senior - Warszawa</a></li>
                            <li><a href="#">Android JUnior developer - Rzeszów</a></li>
                            <li><a href="#">C++ Senior</a></li>
                            <li><a href="#">Java Script, SQL, PHP Developer</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-lg-9">
            <div class="main-content">
                <h5 class="adds-header">Job advertisement for you</h5>
            </div>
        </div>
    </div>
</div>

<script src="../js/scripts/jquery-3.2.1.min.js"></script>
<script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>
<script src="../js/libs/bootstrap/js/bootstrap.min.js"></script>
<script src="../js/ajax/home-page.js"></script>
<script src="../js/pages/home-get-adds.js"></script>
<script src="../js/ajax/log-out.js"></script>
</body>
</html>