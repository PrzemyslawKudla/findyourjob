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
    <link href="../css/pages/home-page.css" rel="stylesheet">
    <link href="../css/partials/top-menu.css" rel="stylesheet">
    <link href="../css/global-styles.css" rel="stylesheet">

</head>
<body>
<?php require_once("top-menu.php") ?>
<div class="container main-container">
    <div class="row">
        <div class="col-lg-3">
            <div class="left-nav ">
                <div class="user-info box-style">
                    <p>Hello <b><?= $_SESSION['userLogin'] ?></b></p>
                    <p>Last login: <b>12:32, 14 Jan 2107</b></p>
                </div>
                <div class="user-adds box-style">
                    <p>Your adds:</p>
                    Java developer.. <br>
                    Location: Kraków
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="main-content">
                <h5 class="adds-header">Newest advertisements</h5>
                <div class="single-add box-style">
                    <div class="row">
                        <div class="col-md-6 add-details">
                            <div class="row no-gutters text-row">
                                <div class="col-2"><img class="single-add-icon" src="../assets/img/user_icon.png" alt=""></div>
                                <div class="col-10"><b> Java senior developer</b></div>
                            </div>
                            <div class="row no-gutters text-row">
                                <div class="col-2"><img class="single-add-icon" src="../assets/img/location-icon.png" alt=""></div>
                                <div class="col-10"><b> Kraków</b></div>
                            </div>
                            <div class="row no-gutters text-row">
                                <div class="col-2"><img class="single-add-icon" src="../assets/img/money-icon.png" alt=""></div>
                                <div class="col-10"><b>4500 - 1200 PLN UoP</b></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <img class="add-image" src="../assets/img/java-logo.jpg" alt="add image">
                        </div>
                        <div class="col-md-12">EY Global Delivery Services means 24,000 specialists serving customers
                            from significant number of countries across the world. Thus far, we have opened three
                            offices in Poland where we speak 11 languages. Together with EY, we participate in diverse
                            projects for our partners from all over the world and from almost all industries, providing
                            high-quality and value-added support to our clients.
                        </div>
                        <a href="" class="read-more">Read more..</a>
                    </div>
                </div>

                <div class="single-add box-style">
                    <div class="row">
                        <div class="col-md-6 add-details">
                            <div class="row no-gutters text-row">
                                <div class="col-2"><img class="single-add-icon" src="../assets/img/user_icon.png" alt=""></div>
                                <div class="col-10"><b> Java senior developer</b></div>
                            </div>
                            <div class="row no-gutters text-row">
                                <div class="col-2"><img class="single-add-icon" src="../assets/img/location-icon.png" alt=""></div>
                                <div class="col-10"><b> Kraków</b></div>
                            </div>
                            <div class="row no-gutters text-row">
                                <div class="col-2"><img class="single-add-icon" src="../assets/img/money-icon.png" alt=""></div>
                                <div class="col-10"><b>4500 - 1200 PLN UoP</b></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <img class="add-image" src="../assets/img/java-logo.jpg" alt="add image">
                        </div>
                        <div class="col-md-12">EY Global Delivery Services means 24,000 specialists serving customers
                            from significant number of countries across the world. Thus far, we have opened three
                            offices in Poland where we speak 11 languages. Together with EY, we participate in diverse
                            projects for our partners from all over the world and from almost all industries, providing
                            high-quality and value-added support to our clients.
                        </div>
                        <a href="" class="read-more">Read more..</a>
                    </div>
                </div>

                <div class="single-add box-style">
                    <div class="row">
                        <div class="col-md-6 add-details">
                            <div class="row no-gutters text-row">
                                <div class="col-2"><img class="single-add-icon" src="../assets/img/user_icon.png" alt=""></div>
                                <div class="col-10"><b> Java senior developer</b></div>
                            </div>
                            <div class="row no-gutters text-row">
                                <div class="col-2"><img class="single-add-icon" src="../assets/img/location-icon.png" alt=""></div>
                                <div class="col-10"><b> Kraków</b></div>
                            </div>
                            <div class="row no-gutters text-row">
                                <div class="col-2"><img class="single-add-icon" src="../assets/img/money-icon.png" alt=""></div>
                                <div class="col-10"><b>4500 - 1200 PLN UoP</b></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <img class="add-image" src="../assets/img/java-logo.jpg" alt="add image">
                        </div>
                        <div class="col-md-12">EY Global Delivery Services means 24,000 specialists serving customers
                            from significant number of countries across the world. Thus far, we have opened three
                            offices in Poland where we speak 11 languages. Together with EY, we participate in diverse
                            projects for our partners from all over the world and from almost all industries, providing
                            high-quality and value-added support to our clients.
                        </div>
                        <a href="" class="read-more">Read more..</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="right-nav">
                <div class="most-popular box-style">
                    <h5>Most popular:</h5>
                    <div class="single-popular">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="../js/scripts/jquery-3.2.1.min.js"></script>
<script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>
<script src="../js/libs/bootstrap/js/bootstrap.min.js"></script>
<script src="../js/ajax/home-page.js"></script>
</body>
</html>