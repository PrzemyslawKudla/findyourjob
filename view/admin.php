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
    <title>Admin dashboard</title>


    <link href="../js/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/pages/admin-tabs.css" rel="stylesheet">
    <link href="../css/pages/option-accordions.css" rel="stylesheet">
    <link href="../css/partials/top-menu.css" rel="stylesheet">
    <link href="../css/global-styles.css" rel="stylesheet">

</head>
<body>
<?php require_once("top-menu.php") ?>
<div class="container main-container">
    <div class="row">
        <div class="col-12">
            <h1>Admin dashboard</h1>
            <div class="tab_container">
                <input id="tab1" type="radio" name="tabs" checked>
                <label for="tab1"><i class="fa fa-code"></i><span>Users</span></label>

                <input id="tab2" type="radio" name="tabs">
                <label for="tab2"><i class="fa fa-pencil-square-o"></i><span>Advertisements</span></label>

                <input id="tab3" type="radio" name="tabs">
                <label for="tab3"><i class="fa fa-bar-chart-o"></i><span>View</span></label>

                <input id="tab4" type="radio" name="tabs">
                <label for="tab4"><i class="fa fa-folder-open-o"></i><span>Localizations</span></label>

                <input id="tab5" type="radio" name="tabs">
                <label for="tab5"><i class="fa fa-envelope-o"></i><span>Categories</span></label>

                <section id="content1" class="tab-content">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="panel-group wrap" id="bs-collapse">

                            <div class="panel">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#bs-collapse" href="#one">
                                            See all users
                                        </a>
                                    </h4>
                                </div>
                                <div id="one" class="panel-collapse collapse">
                                    <div class="panel-body">

                                        Where now are the horse and the rider? Where is the horn that was blowing? Where
                                        is the helm and the hauberk, and the bright hair flowing?
                                    </div>
                                </div>

                            </div>
                            <!-- end of panel -->

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

                                        Where is the harp on the harpstring, and the red fire glowing? Where is the
                                        spring and the harvest and the tall corn growing?

                                    </div>

                                </div>
                            </div>
                            <!-- end of panel -->

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
                                        ave gone down in the West behind the hills into shadow. Who shall gather the
                                        smoke of the deadwood burning, Or behold the flowing years from the Sea
                                        returning? The days have gone down in the West behind the hills into shadow. Who
                                        shall gather the smoke of the deadwood burning, Or behold the flowing years from
                                        the Sea returning? The days have gone down in the West behind the hills into
                                        shadow. Who shall gather the smoke of the deadwood burning, Or behold the
                                        flowing years from the Sea returning? The days have gone down in the West behind
                                        the hills into shadow. Who shall gather the smoke of the deadwood burning, Or
                                        behold the flowing years from the Sea returning?
                                    </div>
                                </div>
                            </div>
                            <!-- end of panel -->

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

                                        They have passed like rain on the mountain, like a wind in the meadow; The days
                                        have gone down in the West behind the hills into shadow.
                                    </div>
                                </div>
                            </div>
                            <!-- end of panel -->

                        </div>
                        <!-- end of #bs-collapse  -->

                    </div>
                </section>

                <section id="content2" class="tab-content">
                    <div class="col-md-12 col-sm-12 col-xs-12">
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

                                        Where now are the horse and the rider? Where is the horn that was blowing? Where
                                        is the helm and the hauberk, and the bright hair flowing?
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

                                        Where is the harp on the harpstring, and the red fire glowing? Where is the
                                        spring and the harvest and the tall corn growing?

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
                                        ave gone down in the West behind the hills into shadow. Who shall gather the
                                        smoke of the deadwood burning, Or behold the flowing years from the Sea
                                        returning? The days have gone down in the West behind the hills into shadow. Who
                                        shall gather the smoke of the deadwood burning, Or behold the flowing years from
                                        the Sea returning? The days have gone down in the West behind the hills into
                                        shadow. Who shall gather the smoke of the deadwood burning, Or behold the
                                        flowing years from the Sea returning? The days have gone down in the West behind
                                        the hills into shadow. Who shall gather the smoke of the deadwood burning, Or
                                        behold the flowing years from the Sea returning?
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

                                        They have passed like rain on the mountain, like a wind in the meadow; The days
                                        have gone down in the West behind the hills into shadow.
                                    </div>
                                </div>
                            </div>
                            <!-- end of panel -->

                        </div>
                        <!-- end of #bs-collapse  -->

                    </div>
                </section>

                <section id="content3" class="tab-content">
                    <h3>Headline 3</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                </section>

                <section id="content4" class="tab-content">
                    <h3>Headline 4</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua.</p>

                </section>

                <section id="content5" class="tab-content">
                    <h3>Headline 5</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>

                </section>
            </div>
        </div>
    </div>
</div>

<script src="../js/scripts/jquery-3.2.1.min.js"></script>
<script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>
<script src="../js/libs/bootstrap/js/bootstrap.min.js"></script>
<script src="../js/ajax/home-page.js"></script>
<script src="../js/pages/admin-dashboard.js"></script>
</body>
</html>