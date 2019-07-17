<?php
    if (!isset($_SESSION)) {
        session_start();
    }
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Association Nacomed : Accueil</title>
        <meta name="description" content="Page d'accueil du site de l'association Nacomed">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="all,follow">
        <!-- Bootstrap CSS-->
        <link rel="stylesheet" href="./vendor/bootstrap/css/bootstrap.min.css">
        <!-- Google fonts-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cardo:400,400i">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
        <!-- OwlCarousel -->
        <link rel="stylesheet" href="./vendor/owl.carousel/assets/owl.carousel.css">
        <link rel="stylesheet" href="./vendor/owl.carousel/assets/owl.theme.default.min.css">
        <!-- Font Awesome-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <!-- Parallax-->
        <link rel="stylesheet" href="./vendor/onepage-scroll/onepage-scroll.css">
        <!-- theme stylesheet-->
        <link rel="stylesheet" href="./css/style.blue.css" id="theme-stylesheet">
        <!-- Custom stylesheet - for your changes-->
        <link rel="stylesheet" href="./css/custom.css">
        <!-- Favicon-->
        <link rel="shortcut icon" href="./img/logo_nacomed.png">
        <!-- Open Graph Data Facebook -->
        <meta property="og:title" content="Page d'accueil de l'association Nacomed" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="https://www.nacomed.oc-maxlau.fr" />
        <meta property="og:image" content="http://zupimages.net/viewer.php?id=19/28/69dv.png" />
        <!-- Lightbox CSS -->
        <link rel="stylesheet" href="./vendor/lightbox2/css/lightbox.css">
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-142576167-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-142576167-1');
        </script>
        
        <!-- Tweaks for older IEs--><!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    </head>

    <body>
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container home-navbar">
                <a class="logo navbar-brand" href="./index.php"><img src="./img/logo_nacomed.png" alt="logo de nacomed" /></a>
                    <button class="menu_btn navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                        Menu
                        <i class="fas fa-bars"></i>
                    </button>
          
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="./index.php">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./index.php?action=displayNews">Actualités</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./index.php?action=displayOnboard">Embarquement</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link support-link" href="./index.php?action=displaySupport">Nous soutenir</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./index.php?action=displayContact">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./index.php?action=displayContact">Communauté</a>
                        <?php
                            if (isset($_SESSION['user'])) {
                                $sessionUser = $_SESSION['user'];
                                echo '<li class="nav-item admin-link"><a class="nav-link" href="./index.php?action=displayAdmin">Administration</a></li>';
                                echo '<li class="nav-item logout"><a id ="signOut_link" class="nav-link" href="./index.php?action=signOut">Déconnexion</a></li>';
                            } else {
                                echo '<li class="nav-item login"><a class="nav-link" href="./index.php?action=login">Connexion</a></li>';
                            }
                        ?>
                    </ul>
                </div>
            </div>
        </nav>

        <?= $content ?>

        <!-- Footer -->
        <footer class="page-footer font-small special-color-dark pt-4">

        <!-- Footer Elements -->
        <div class="container">

            <!-- Social buttons -->
            <ul class="list-unstyled list-inline text-center">
            <li class="list-inline-item">
                <a class="btn-floating btn-fb mx-1">
                <i class="fab fa-facebook-f"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-tw mx-1">
                <i class="fab fa-twitter"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-gplus mx-1">
                <i class="fab fa-google-plus-g"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-li mx-1">
                <i class="fab fa-linkedin-in"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-dribbble mx-1">
                <i class="fab fa-dribbble"> </i>
                </a>
            </li>
            </ul>
            <!-- Social buttons -->

        <div class="text-center">
            <p>ATTENTION : SITE EN CONSTRUCTION. LES INFORMATIONS CONCERNANT LES MISSIONS ET LES EMBARQUEMENTS SONT POUR LE MOMENT FICTIVES. POUR TOUTE QUESTION CONTACTEZ-NOUS (PAGE CONTACT)</p>
        </div>
        </div>
        <!-- Footer Elements -->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2019 Copyright :
            <a href="./index.php?action=displayContact"> NACOMED</a>
        </div>
        <!-- Copyright -->

        </footer>
        <!-- Footer -->

        <div id="modal_logout" class="modal">
            <div class="modal_content">
                <p id="modal_text">A bientôt <?php echo $sessionUser; ?></p>
            </div>
        </div>

        <!-- JavaScript files--> 
        <script src="./vendor/jquery/jquery/jquery.min.js"></script>
        <script src="./vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="./js/signOut.js"></script>
        <script src="./js/controllers/signOut.js"></script>
        <script src="./js/scroll_nav.js"></script>
        <script src="./vendor/owl.carousel/owl.carousel.js"></script>
        <script src="./vendor/onepage-scroll/jquery.onepage-scroll.js"></script>
        <script src="./vendor/lightbox2/js/lightbox.js"></script>
        <script src="./js/controllers/main.js"></script>

        <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    </body>
</html>