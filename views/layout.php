<?php
    if (!isset($_SESSION)) {
        session_start();
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Association Nacomed</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="all,follow">
        <!-- Bootstrap CSS-->
        <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
        <!-- Google fonts-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cardo:400,400i">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
        <!-- Lightbox-->
        <link rel="stylesheet" href="vendor/lightbox2/css/lightbox.min.css">
        <!-- Font Awesome-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <!-- Parallax-->
        <link rel="stylesheet" href="vendor/onepage-scroll/onepage-scroll.css">
        <!-- theme stylesheet-->
        <link rel="stylesheet" href="css/style.blue.css" id="theme-stylesheet">
        <!-- Custom stylesheet - for your changes-->
        <link rel="stylesheet" href="css/custom.css">
        <!-- Favicon-->
        <link rel="shortcut icon" href="favicon.png">
        <!-- Tweaks for older IEs--><!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="index.html">NACOMED</a>
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                        Menu
                        <i class="fas fa-bars"></i>
                    </button>
          
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="./index.php">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?action=displayAbout">Actualités</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?action=listArticles">Embarquement</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?action=displayContact">Nous soutenir</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="./index.php">Contact</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="./index.php">Communauté</a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>

        <?= $content ?>

        <!-- Footer -->
        <footer class="page-footer font-small indigo">
            <!-- Footer Links -->
            <div class="container">
                <!-- Grid row-->
                <div class="row text-center d-flex justify-content-center pt-5 mb-3">
                    <!-- Grid column -->
                    <div class="col-md-2 mb-3">
                        <h6 class="text-uppercase font-weight-bold">
                            <a href="#!">About us</a>
                        </h6>
                    </div>
                    <!-- Grid column -->
                    <!-- Grid column -->
                    <div class="col-md-2 mb-3">
                        <h6 class="text-uppercase font-weight-bold">
                            <a href="#!">Products</a>
                        </h6>
                    </div>
                    <!-- Grid column -->
                    <!-- Grid column -->
                    <div class="col-md-2 mb-3">
                        <h6 class="text-uppercase font-weight-bold">
                            <a href="#!">Awards</a>
                        </h6>
                    </div>
                    <!-- Grid column -->
                    <!-- Grid column -->
                    <div class="col-md-2 mb-3">
                        <h6 class="text-uppercase font-weight-bold">
                            <a href="#!">Help</a>
                        </h6>
                    </div>
                    <!-- Grid column -->
                    <!-- Grid column -->
                    <div class="col-md-2 mb-3">
                        <h6 class="text-uppercase font-weight-bold">
                            <a href="#!">Contact</a>
                        </h6>
                    </div>
                    <!-- Grid column -->
                </div>
                
                <!-- Grid row-->
                <hr class="rgba-white-light" style="margin: 0 15%;">
                <!-- Grid row-->
                <div class="row d-flex text-center justify-content-center mb-md-0 mb-4">
                    <!-- Grid column -->
                    <div class="col-md-8 col-12 mt-5">
                        <p style="line-height: 1.7rem">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                            accusantium doloremque laudantium, totam rem
                            aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                            explicabo.
                            Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.
                        </p>
                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row-->
                <hr class="clearfix d-md-none rgba-white-light" style="margin: 10% 15% 5%;">
                <!-- Grid row-->
                <div class="row pb-3">
                    <!-- Grid column -->
                    <div class="col-md-12">
                        <div class="mb-5 flex-center">
                            <!-- Facebook -->
                            <a class="fb-ic">
                            <i class="fab fa-facebook-f fa-lg white-text mr-4"> </i>
                            </a>
                            <!-- Twitter -->
                            <a class="tw-ic">
                            <i class="fab fa-twitter fa-lg white-text mr-4"> </i>
                            </a>
                            <!-- Google +-->
                            <a class="gplus-ic">
                            <i class="fab fa-google-plus-g fa-lg white-text mr-4"> </i>
                            </a>
                            <!--Linkedin -->
                            <a class="li-ic">
                            <i class="fab fa-linkedin-in fa-lg white-text mr-4"> </i>
                            </a>
                            <!--Instagram-->
                            <a class="ins-ic">
                            <i class="fab fa-instagram fa-lg white-text mr-4"> </i>
                            </a>
                            <!--Pinterest-->
                            <a class="pin-ic">
                            <i class="fab fa-pinterest fa-lg white-text"> </i>
                            </a>
                        </div>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row-->
            </div>
            <!-- Footer Links -->

            <!-- Copyright -->
            <div class="footer-copyright text-center py-3">© 2019 Copyright:
                <a href="https://mdbootstrap.com/education/bootstrap/"> NACOMED</a>
            </div>
            <!-- Copyright -->
        </footer>
        <!-- Footer -->
        

