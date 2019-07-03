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
        <title>Association Nacomed : Gestion des news</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="all,follow">
        <!-- Bootstrap CSS-->
        <link rel="stylesheet" href="../../../vendor/bootstrap/css/bootstrap.min.css">
        <!-- Google fonts-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cardo:400,400i">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
        <!-- Font Awesome-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <!-- Custom stylesheet - for your changes-->
        <link rel="stylesheet" href="../../../css/custom.css">
        <!-- Favicon-->
        <link rel="shortcut icon" href="./img/logo_nacomed.png">
        <!-- Tweaks for older IEs--><!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    </head>
    <body>
        <!-- Navigation -->
        <?php require('./public/views/header.php'); ?>

        <div class="container admin_interface">
            <div class="row mgmt">
                <div class="col-lg-12 text-center">
                    <header>
                        <h1>Gestion des news</h1>
                    </header>

                    <p class="font-italic lead">
                        Bienvenue sur la page de gestion de news, sélectionnez une option
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 text-center">
                    <header>
                        <h4>Créer une news</h4>
                            <button id="news-creation">Créer</button>
                    </header>
                </div>

                <div class="col-lg-6 text-center">
                    <header>
                        <h4>Editer une news<br>(mise à jour, suppression)</h4>
                            <button id="edit-mgmt">Edition</button>
                    </header>
                </div>
            </div>
        </div>


        <?php require('./public/views/footer.php'); ?>

    <!-- JavaScript files-->
    <script src="../../../js/scroll_nav.js"></script>
    <script src="../../../js/adminOptions.js"></script>
    <script src="../../../js/controllers/adminOptions.js"></script>
    </body>
</html>
