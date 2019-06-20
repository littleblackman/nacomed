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
        <title>Association Nacomed : Actualités</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="all,follow">
        <!-- Bootstrap CSS-->
        <link rel="stylesheet" href="./vendor/bootstrap/css/bootstrap.min.css">
        <!-- Google fonts-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cardo:400,400i">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
        <!-- Font Awesome-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <!-- Custom stylesheet - for your changes-->
        <link rel="stylesheet" href="./css/custom.css">
        <!-- Favicon-->
        <link rel="shortcut icon" href="favicon.png">
        <!-- Tweaks for older IEs--><!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    </head>
    <body>
        <!-- Navigation -->
        <?php require('./public/views/header.php'); ?>

        <div class=container>
            <div class="row welcome-program">
                <div class="col-lg-12 text-center">
                    <header>
                        <h2>Bienvenue sur la page de gestion du programme du bateau<h2>
                    </header>
                    <p class="font-italic">
                        Renseignez les informations relatives au programme du bateau : 
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <form class="form-group" id="program-form" method="post" action="/nacomed/index.php?action=addProgramInfos">
                        <label for="month">Sélectionner un mois</label>
                            <select>
                                <option>Mai</option>
                                <option>Juin</option>
                                <option>Juillet</option>
                                <option>Août</option>
                                <option>Septembre</option>
                                <option>Octobre</option>
                            </select><br>
                        <label for="week">Sélectionner un numéro de semaine</label>
                            <select>
                                <option>Semaine 1</option>
                                <option>Semaine 2</option>
                                <option>Semaine 3</option>
                                <option>Semaine 4</option>
                            </select><br>
                        <label for="mission">Mission :</label><input class="form-control" type="text" id="mission" name="mission" placeholder="Infos de mission" /><br>
                        <label for="details-mission">Détails de mission :</label><input class="form-control" type="text" id="details-mission" name="details-mission" placeholder="Détails de mission" /><br>
                        <label for="location">Localisation :</label><input class="form-control" type="text" id="location" name="location" placeholder="Localisation" /><br>
                        <label for="available-beds">Nombre de banettes disponible(s) :</label><input class="form-control" type="text" id="available-beds" name="available-beds" placeholder="nombre de banettes" /><br>
                        <label for="comments">Remarques :</label><input class="form-control" type="text" id="comments" name="comments" placeholder="Remarques" /><br>
                    </form>
                </div>
            </div>


        <?php require('./public/views/footer.php'); ?>
    </body>
</html>