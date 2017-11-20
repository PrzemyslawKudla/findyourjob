<?php
session_start();
if(isset( $_SESSION['is_logged_in']) &&  $_SESSION['is_logged_in'] != null){
    if( $_SESSION['is_logged_in'] == true) {
        header('Location: '.'/view/home.php');
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
    <title>Registration</title>


    <link href="../js/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/pages/registration.css" rel="stylesheet">
    <link href="../css/partials/top-menu.css" rel="stylesheet">
    <link href="../css/global-styles.css" rel="stylesheet">

</head>
<body>
<?php require_once("top-menu.php")?>
<div class="container">
    <div class="row">
        <form class="login-form col-lg-6 col-sm-12 mx-auto" role="form">
            <div class="row">
                <div class="col-md-12">
                    <img class="logo" src="../assets/img/logo-v2.png" alt="logo">
                    <h2 class="login-text">Registration form</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group has-danger">
                        <label class="sr-only" for="email">Login</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <img src="../assets/img/user_icon.png" alt="mail">
                                </i></div>
                            <input type="text" name="login" class="form-control" id="login"
                                   placeholder="Enter your login" required autofocus>
                        </div>
                        <span class="login-required">Uzupełnij to pole</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group has-danger">
                        <label class="sr-only" for="email">Email</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <img src="../assets/img/mail-icon.png" alt="mail">
                                </i></div>
                            <input type="text" name="login" class="form-control" id="email"
                                   placeholder="Enter your e-mail" required autofocus>
                        </div>
                        <span class="email-required">Uzupełnij to pole</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="sr-only" for="password">Password</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <img src="../assets/img/pad-icon.png" alt="pad-icon">
                            </div>
                            <input type="password" name="password" class="form-control" id="password"
                                   placeholder="Password" required>
                        </div>
                        <span class="password-required">Uzupełnij to pole</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="sr-only" for="password">Password again</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <img src="../assets/img/pad-icon.png" alt="pad-icon">
                            </div>
                            <input type="password" name="password" class="form-control" id="password2"
                                   placeholder="Password again" required>
                        </div>
                        <span class="password2-required">Uzupełnij to pole</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="sr-only" for="name">Name</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <img src="../assets/img/user_icon.png" alt="pad-icon">
                            </div>
                            <input type="text" name="name" class="form-control" id="userName"
                                   placeholder="Name" required>
                        </div>
                        <span class="name-required">Uzupełnij to pole</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="sr-only" for="surname">Surname</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <img src="../assets/img/user_icon.png" alt="pad-icon">
                            </div>
                            <input type="text" name="surname" class="form-control" id="userSurname"
                                   placeholder="Surname" required>
                        </div>
                        <span class="surname-required">Uzupełnij to pole</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <button type="submit" id="register-button" class="btn button-global"> Register</button>
                    <span class="have-account">You have account?</span>
                    <a class="login-link" href="/view/login.php"> Log in</a>
                </div>
            </div>
        </form>
    </div>
</div>

<script src="../js/scripts/jquery-3.2.1.min.js"></script>
<script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>
<script src="../js/libs/bootstrap/js/bootstrap.min.js"></script>
<script src="../js/ajax/register.js"></script>
</body>
</html>