<?php
    if (!isset($_SESSION)) {
        session_start();
    }
?>

<nav class="navbar navbar-expand-lg navbar-light fixed-top onboard-nav" id="mainNav">
    <div class="container">
        <a class="logo navbar-brand" href="/nacomed/index.php"><img src="/nacomed/img/logo_nacomed.png" /></a>
            <button class="menu_btn navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
    
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/nacomed/index.php">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/nacomed/index.php?action=displayNews">Actualités</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/nacomed/index.php?action=displayOnboard">Embarquement</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/nacomed/index.php?action=displayContact">Nous soutenir</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/nacomed/index.php?action=displayContact">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/nacomed/index.php?action=displayContact">Communauté</a>
                </li>
                <?php
                    if (isset($_SESSION['user'])) {
                        $sessionUser = $_SESSION['user'];
                        echo '<li class="nav-item admin-link"><a class="nav-link" href="/nacomed/index.php?action=displayAdmin">Administration</a></li>';
                        echo '<li class="nav-item logout"><a id ="signOut_link" class="nav-link" href="/nacomed/index.php?action=signOut">Déconnexion</a></li>';
                    } else {
                        echo '<li class="nav-item login"><a class="nav-link" href="/nacomed/index.php?action=login">Connexion</a></li>';
                    }
                ?>
            </ul>
        </div>
    </div>
</nav>