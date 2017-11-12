<!DOCTYPE html>
<html lang="pl_PL">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login page</title>


    <link href="../js/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/pages/login-page.css" rel="stylesheet">
    <link href="../css/partials/top-menu.css" rel="stylesheet">
    <link href="../css/global-styles.css" rel="stylesheet">

</head>
<body>
<?php require_once("top-menu.php")?>
<div class="container">
    <div class="row">
        <form class="login-form col-lg-6 col-sm-12 mx-auto" role="form" method="POST" action="/login">
            <div class="row">
                <div class="col-md-12">
                    <img class="logo" src="../assets/img/logo-v2.png" alt="logo">
                    <h2 class="login-text">Please Login</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group has-danger">
                        <label class="sr-only" for="email">E-Mail Address</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <img src="../assets/img/mail-icon.png" alt="mail">
                                </i></div>
                            <input type="text" name="email" class="form-control" id="email"
                                   placeholder="Enter your email" required autofocus>
                        </div>
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
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" name="remember"
                                   type="checkbox">
                            <span>Remember me</span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <button type="submit" class="btn button-global"> Login</button>
                    <a class="forgot-password" href="">Forgot Your Password?</a>
                </div>
            </div>
        </form>
    </div>
</div>

<script src="../js/scripts/jquery-3.2.1.min.js"></script>
<script src="../js/libs/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>