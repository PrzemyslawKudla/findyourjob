<?php
if (!isset($_SESSION)) {
    session_start();
}
if (isset($_SESSION) && isset($_SESSION['is-logged-in']) && $_SESSION['is-logged-in'] != null) {
    if ($_SESSION['is-logged-in'] != true || $_SESSION['user_data']['rights'] != 'admin') {
        header('Location: ' . 'findYourJob/view/home.php');
        exit;
    }
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
    <title>Admin dashboard</title>


    <link href="../js/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/pages/admin-parts/admin-tabs.css" rel="stylesheet">
    <link href="../css/pages/admin-parts/options-accordion.css" rel="stylesheet">
    <link href="../css/partials/top-menu.css" rel="stylesheet">
    <link href="../css/pages/admin.css" rel="stylesheet">
    <link href="../css/pages/admin-parts/admin-add-user.css" rel="stylesheet">
    <link href="../css/_global-styles.css" rel="stylesheet">

</head>
<body>
<?php require_once("top-menu.php") ?>
<div class="loader-container">
    <div class="loader"></div>
</div>
<div class="container main-container">
    <div class="row">
        <div class="col-12">
            <h1>Admin dashboard</h1>
            <div class="tab_container">
                <input id="tab1" type="radio" name="tabs" checked>
                <label for="tab1"><span>Users</span></label>

                <input id="tab2" type="radio" name="tabs">
                <label for="tab2"><span>Advertisements</span></label>

                <input id="tab3" type="radio" name="tabs">
                <label for="tab3"><span>View</span></label>

                <input id="tab4" type="radio" name="tabs">
                <label for="tab4"><span>Localizations</span></label>

                <input id="tab5" type="radio" name="tabs">
                <label for="tab5"><span>Categories</span></label>

                <section id="content1" class="tab-content">
                    <div class="col-md-12 col-sm-12 col-xs-12 px-0">
                        <div class="panel-group wrap" id="bs-collapse">

                            <div class="panel">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#bs-collapse" href="#one"
                                           id="see-all-users">
                                            See all users
                                        </a>
                                    </h4>
                                </div>
                                <div id="one" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <table class="table" id="all-users"></table>
                                    </div>
                                </div>

                            </div>
                            <!--ADD USER                                 -->
                            <div class="panel">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#bs-collapse" href="#two">
                                            Add user
                                        </a>
                                    </h4>
                                </div>

                                <div id="two" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <?php include_once('view-parts/admin-add-user.php'); ?>
                                    </div>

                                </div>
                            </div>
                            <!-- END OF ADD USER                                 -->
                            <!-- DELETE USER                               -->
                            <div class="panel">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#bs-collapse" href="#three"
                                           id="delete-user">
                                            Delete user
                                        </a>
                                    </h4>
                                </div>
                                <div id="three" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <table class="table" id="delete-users-table"></table>
                                    </div>
                                </div>
                            </div>
                            <!-- END OF DELETE USER                               -->

                            <div class="panel">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#bs-collapse" href="#four">
                                            Update user
                                        </a>
                                    </h4>
                                </div>
                                <div id="four" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </section>

                <section id="content2" class="tab-content">
                    <div class="col-md-12 col-sm-12 col-xs-12 px-0">
                        <div class="panel-group wrap" id="bs-collapse">

                            <div class="panel">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#bs-collapse" href="#one">
                                            See all advertisement
                                        </a>
                                    </h4>
                                </div>
                                <div id="one" class="panel-collapse collapse">
                                    <div class="panel-body">
                                    </div>
                                </div>

                            </div>
                            <!-- end of panel -->

                            <div class="panel">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#bs-collapse" href="#two">
                                            Add advertisement
                                        </a>
                                    </h4>
                                </div>
                                <div id="two" class="panel-collapse collapse">
                                    <div class="panel-body">
                                    </div>

                                </div>
                            </div>
                            <!-- end of panel -->

                            <div class="panel">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#bs-collapse" href="#three">
                                            Delete advertisement
                                        </a>
                                    </h4>
                                </div>
                                <div id="three" class="panel-collapse collapse">
                                    <div class="panel-body">
                                    </div>
                                </div>
                            </div>
                            <!-- end of panel -->

                            <div class="panel">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#bs-collapse" href="#four">
                                            Update advertisement
                                        </a>
                                    </h4>
                                </div>
                                <div id="four" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                    </div>
                                </div>
                            </div>
                            <!-- end of panel -->

                        </div>
                        <!-- end of #bs-collapse  -->

                    </div>
                </section>

                <section id="content3" class="tab-content">
                    <div class="col-md-12 col-sm-12 col-xs-12 px-0">
                        <div class="panel-group wrap" id="bs-collapse">

                            <div class="panel">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#bs-collapse" href="#one"
                                           id="see-all-users">
                                            See all users
                                        </a>
                                    </h4>
                                </div>
                                <div id="one" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <table class="table" id="all-users"></table>
                                    </div>
                                </div>

                            </div>

                            <div class="panel">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#bs-collapse" href="#two">
                                            Add user
                                        </a>
                                    </h4>
                                </div>
                                <div id="two" class="panel-collapse collapse">
                                    <div class="panel-body">
                                    </div>

                                </div>
                            </div>

                            <div class="panel">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#bs-collapse" href="#three">
                                            Delete user
                                        </a>
                                    </h4>
                                </div>
                                <div id="three" class="panel-collapse collapse">
                                    <div class="panel-body">
                                    </div>
                                </div>
                            </div>

                            <div class="panel">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#bs-collapse" href="#four">
                                            Update user
                                        </a>
                                    </h4>
                                </div>
                                <div id="four" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </section>

                <section id="content4" class="tab-content">
                    <div class="col-md-12 col-sm-12 col-xs-12 px-0">
                        <div class="panel-group wrap" id="bs-collapse">

                            <div class="panel">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#bs-collapse" href="#one"
                                           id="see-all-users">
                                            See all users
                                        </a>
                                    </h4>
                                </div>
                                <div id="one" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <table class="table" id="all-users"></table>
                                    </div>
                                </div>

                            </div>

                            <div class="panel">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#bs-collapse" href="#two">
                                            Add user
                                        </a>
                                    </h4>
                                </div>
                                <div id="two" class="panel-collapse collapse">
                                    <div class="panel-body">
                                    </div>

                                </div>
                            </div>

                            <div class="panel">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#bs-collapse" href="#three">
                                            Delete user
                                        </a>
                                    </h4>
                                </div>
                                <div id="three" class="panel-collapse collapse">
                                    <div class="panel-body">
                                    </div>
                                </div>
                            </div>

                            <div class="panel">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#bs-collapse" href="#four">
                                            Update user
                                        </a>
                                    </h4>
                                </div>
                                <div id="four" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </section>

                <section id="content5" class="tab-content">
                    <div class="col-md-12 col-sm-12 col-xs-12 px-0">
                        <div class="panel-group wrap" id="bs-collapse">

                            <div class="panel">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#bs-collapse" href="#one"
                                           id="see-all-users">
                                            See all users
                                        </a>
                                    </h4>
                                </div>
                                <div id="one" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <table class="table" id="all-users"></table>
                                    </div>
                                </div>

                            </div>

                            <div class="panel">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#bs-collapse" href="#two">
                                            Add user
                                        </a>
                                    </h4>
                                </div>
                                <div id="two" class="panel-collapse collapse">
                                    <div class="panel-body">
                                    </div>

                                </div>
                            </div>

                            <div class="panel">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#bs-collapse" href="#three">
                                            Delete user
                                        </a>
                                    </h4>
                                </div>
                                <div id="three" class="panel-collapse collapse">
                                    <div class="panel-body">
                                    </div>
                                </div>
                            </div>

                            <div class="panel">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#bs-collapse" href="#four">
                                            Update user
                                        </a>
                                    </h4>
                                </div>
                                <div id="four" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </section>
            </div>
        </div>
    </div>
</div>

<script src="../js/scripts/jquery-3.2.1.min.js"></script>
<script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>
<script src="../js/libs/bootstrap/js/bootstrap.min.js"></script>
<script src="../js/pages/admin-get-all-users.js"></script>
<script src="../js/pages/admin-add-user.js"></script>
<script src="../js/pages/admin-delete-user.js"></script>
<script src="../js/ajax/log-out.js"></script>
<script src="../js/scripts/global-scripts.js"></script>

</body>
</html>