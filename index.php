<!doctype html>

<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

    <title>Project</title>
    <meta name="Internet Applications Project" content="Internet Applications Project">
    <meta name="author" content="Przemysław Kudła">


    <link rel="stylesheet" href="css/global-styles.css">
    <link rel="stylesheet" href="js/libs/bootstrap/css/bootstrap.min.css">

    <script src="js/scripts/jquery-3.2.1.min.js"></script>
    <script src="js/ajax/user/getAllUsers.js"></script>
    <script src="js/ajax/user/getUserById.js"></script>
    <script src="js/ajax/user/deleteUserById.js"></script>
    <script src="js/ajax/user/addUser.js"></script>
    <script src="js/ajax/user/updateUser.js"></script>

    <script src="js/ajax/advertisement/getAllAdvertisement.js"></script>
    <script src="js/ajax/advertisement/getAdvertisementById.js"></script>
    <script src="js/ajax/advertisement/deleteAdvertisement.js"></script>
    <script src="js/ajax/advertisement/addAdvertisement.js"></script>
    <script src="js/scripts/global-scripts.js"></script>

</head>

<body>
<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 offset-3"><h2>Projekt- Aplikacje internetowe</h2>
            </div>
            <div class="mx-auto col-lg-6">
                <button type="button" id="get-data" class="btn btn-primary">All users</button>
                <button type="button" id="get-user-by-id" class="btn btn-primary">Get user</button>
                <button type="button" id="delete-user-by-id" class="btn btn-primary">Delete user</button>
                <button type="button" id="add-user" class="btn btn-primary">Add user</button>
                <button type="button" id="update-user" class="btn btn-primary">Update</button>
                <hr>
                <button type="button" id="get-all-ads" class="btn btn-primary ads">All ads</button>
                <button type="button" id="get-ad" class="btn btn-primary ads">Get ad</button>
                <button type="button" id="delete-ad" class="btn btn-primary ads">Delete ad</button>
                <button type="button" id="add-ad" class="btn btn-primary ads">Add ad</button>
                <button type="button" id="update-ad" class="btn btn-primary ads">Update ad</button>

            </div>
            <div class="col-lg-12" id="ajax-container"></div>
        </div>
    </div>
</div>
</body>
</html>