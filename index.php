<!doctype html>

<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

    <title>Project</title>
    <meta name="Internet Applications Project" content="Internet Applications Project">
    <meta name="author" content="Przemysław Kudła">


    <link rel="stylesheet" href="css/global-styles.css">
    <link rel="stylesheet" href="js/libs/bootstrap/css/bootstrap.min.css">
    <script src="js/scripts/jquery-3.2.1.min.js" ></script>
    <script src="js/ajax/user/getAllUsers.js"></script>
    <script src="js/ajax/user/getUserById.js"></script>
    <script src="js/scripts/global-scripts.js" ></script>

</head>

<body>
<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-lg-12"><h2>Projekt- Aplikacje internetowe</h2>


            </div>
            <div class="mx-auto col-lg-6">
                <form method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input">
                            Check me out
                        </label>
                    </div>
                    <button type="button" id="get-data" class="btn btn-primary">All users</button>
                    <button type="button" id="get-user-by-id" class="btn btn-primary">User by ID</button>
                </form>
            </div>
            <div class="col-lg-12" id="ajax-container"></div>
        </div>
    </div>
</div>
</body>
</html>