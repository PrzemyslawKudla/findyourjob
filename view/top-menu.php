<nav class="navbar navbar-toggleable-md navbar-inverse">
    <div class="container">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarText" aria-controls="navbarText" aria-expanded="false">
            <span class="navbar-toggler-icon">
                <img src="../assets/img/hamburger-icon.png" alt="">
            </span>
        </button>
        <a href="/view/home.php"> <img class="text-logo" src="../assets/img/logo-text.png" alt="logo"></a>
        <div class="collapse navbar-collapse menu-items" id="navbarText">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="single-link" href="/findYourJob/view/home.php">HOME<span></span></a>
                </li>
                <li class="nav-item">
                    <a class="single-link admin-link" href="/findYourJob/view/admin.php">ADMIN</a>
                </li>
                <li class="nav-item">
                    <a class="single-link" href="#">EMPLOYERS</a>
                </li>
            </ul>
            <form class="form-inline search-form">
                <input class="form-control mr-sm-2 search-field" type="text" placeholder="Search">
                <button class="btn search-button" type="submit">Search</button>
                <?php if (isset($_SESSION) && isset($_SESSION['is-logged-in']) && $_SESSION['is-logged-in'] != null) :
                    ?>
                    <button id="button-log-out">Log out</button>

                <?php endif; ?>
            </form>
        </div>
    </div>
</nav>