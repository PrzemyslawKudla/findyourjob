<?php session_start();
if (isset($_SESSION) && isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] != null) {
    if ($_SESSION['is_logged_in'] != true) {
        header('Location: ' . '/view/home.php');
        exit;
    }
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
            <div class="left-nav ">
                <h5 class="adds-header">Categories:</h5>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur autem commodi deleniti distinctio
                eaque, eligendi facilis fuga, fugiat harum inventore labore laborum minus molestiae mollitia
                necessitatibus neque nesciunt nobis officia pariatur placeat porro quae quam quasi quod saepe ut vitae?
                A dolorem, fuga?
            </div>
        </div>
        <div class="col-lg-9">
            <div class="main-content">
                <h5 class="adds-header">Job advertisement for you</h5>
                <div class="single-add box-style">
                    <div class="row">
                        <div class="col-lg-2 left-col">
                            <img src="../assets/img/java-logo.jpg" alt="">
                        </div>
                        <div class="col-lg-10 right-col">
                            <div class="row">
                                <div class="col-lg-9">
                                    <h5>Java junior developer</h5>
                                    <p><b>Employer: </b>Comarch S.A
                                    <p><b>Localization: </b>Generała Jarosława Dąbrowskiego 20, 35-036 Rzeszów</p>
                                    <p><b>Salary: </b>4000 - 7000PLN UoP</p>
                                </div>
                                <div class="col-lg-3 date-info">
                                    <p class="added">12.10.2017 - 20.10.2017</p>
                                    <a href="#">Java,</a>
                                    <a href="#">Spring,</a>
                                    <a href="#">Hibernate</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 description">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aspernatur atque dolorem
                                eligendi error et harum hic in iusto non, pariatur placeat possimus rerum sapiente
                                ullam. Asperiores modi mollitia porro! Autem dolorum molestias officia placeat quam sit
                                sunt tenetur vitae..</p>
                            <a href="#" class="read-more">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="single-add box-style">
                    <div class="row">
                        <div class="col-lg-2 left-col">
                            <img src="../assets/img/java-logo.jpg" alt="">
                        </div>
                        <div class="col-lg-10 right-col">
                            <div class="row">
                                <div class="col-lg-9">
                                    <h5>Java junior developer</h5>
                                    <p><b>Employer: </b>Comarch S.A
                                    <p><b>Localization: </b>Generała Jarosława Dąbrowskiego 20, 35-036 Rzeszów</p>
                                    <p><b>Salary: </b>4000 - 7000PLN UoP</p>
                                </div>
                                <div class="col-lg-3 date-info">
                                    <p class="added">12.10.2017 - 20.10.2017</p>
                                    <a href="#">Java,</a>
                                    <a href="#">Spring,</a>
                                    <a href="#">Hibernate</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 description">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aspernatur atque dolorem
                                eligendi error et harum hic in iusto non, pariatur placeat possimus rerum sapiente
                                ullam. Asperiores modi mollitia porro! Autem dolorum molestias officia placeat quam sit
                                sunt tenetur vitae..</p>
                            <a href="#" class="read-more">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="single-add box-style">
                    <div class="row">
                        <div class="col-lg-2 left-col">
                            <img src="../assets/img/java-logo.jpg" alt="">
                        </div>
                        <div class="col-lg-10 right-col">
                            <div class="row">
                                <div class="col-lg-9">
                                    <h5>Java junior developer</h5>
                                    <p><b>Employer: </b>Comarch S.A
                                    <p><b>Localization: </b>Generała Jarosława Dąbrowskiego 20, 35-036 Rzeszów</p>
                                    <p><b>Salary: </b>4000 - 7000PLN UoP</p>
                                </div>
                                <div class="col-lg-3 date-info">
                                    <p class="added">12.10.2017 - 20.10.2017</p>
                                    <a href="#">Java,</a>
                                    <a href="#">Spring,</a>
                                    <a href="#">Hibernate</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 description">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aspernatur atque dolorem
                                eligendi error et harum hic in iusto non, pariatur placeat possimus rerum sapiente
                                ullam. Asperiores modi mollitia porro! Autem dolorum molestias officia placeat quam sit
                                sunt tenetur vitae..</p>
                            <a href="#" class="read-more">Read more</a>
                        </div>
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