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
        <link rel="shortcut icon" href="./img/logo_nacomed.png">
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
                    <form class="form-group" id="program-form" method="post" action="/nacomed/index.php?action=addProgInfos">
                        <label for="month">Sélectionner un mois</label>
                            <select name="month" id="month">
                                <option id="jan">Janvier</option>
                                <option id="feb">Février</option>
                                <option id="mar">Mars</option>
                                <option id="apr">Avril</option>
                                <option id="may">Mai</option>
                                <option id="jun">Juin</option>
                                <option id="jul">Juillet</option>
                                <option id="aug">Aout</option>
                                <option id="sep">Septembre</option>
                                <option id="oct">Octobre</option>
                                <option id="nov">Novembre</option>
                                <option id="dec">Décembre</option>
                            </select><br>
                        <label for="week">Sélectionner un numéro de semaine</label>
                            <select name="week" id="week">
                                <option id="week1">1</option>
                                <option id="week2">2</option>
                                <option id="week3">3</option>
                                <option id="week4">4</option>
                            </select><br>
                        <label for="mission">Mission :</label><input class="form-control" type="text" id="mission" name="mission" placeholder="Infos de mission" /><br>
                        <label for="details-mission">Détails de mission :</label><input class="form-control" type="text" id="details-mission" name="details-mission" placeholder="Détails de mission" /><br>
                        <label for="location">Localisation :</label><input class="form-control" type="text" id="location" name="location" placeholder="Localisation" /><br>
                        <label for="available-beds">Nombre de banettes disponible(s) :</label><input class="form-control" type="text" id="available-beds" name="available-beds" placeholder="nombre de banettes" /><br>
                        <label for="comments">Remarques :</label><input class="form-control" type="text" id="comments" name="comments" placeholder="Remarques" /><br>
                        <input type="submit" id="progFormSubmit" value="Envoyer" />
                    </form>
                </div>
            </div>

            <div id="modal_prog" class="modal">
                <div class="modal_content">
                    <p id="modal_text"></p>
                </div>
            </div>
        </div>


        <?php require('./public/views/footer.php'); ?>

        <!-- JavaScript files-->
        <script src="./js/programInfosAdder.js"></script>
        <script src="./js/controllers/programInfosAdder.js"></script>
    </body>
</html>