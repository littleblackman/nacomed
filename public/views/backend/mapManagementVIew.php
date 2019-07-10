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

        <div class="container welcome-map">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <header>
                        <h1>Bienvenue sur la page de gestion de la map</h1>
                    </header>    
                    <p class="font-italic">Placez un nouveau marqueur ou consulter la liste existante pour les éditer</p>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-2 actions">
                    <button id="events-list">Liste des events</button>
                </div>

                <div class="col-lg-10 area-map">
                    <form class="form-group" id="map-form" method="post" action="/nacomed/index.php?action=addEvent">
                        <label for="name">Nom de l'évènement : </label><input class="form-control" type="text" id="name" name="name" /><br/>
                        <label for="lng">Longitude : </label><input class="form-control" type="text" id="lng" name="lng" /><br/>
                        <label for="lat">Lattitude : </label><input class="form-control" type="text" id="lat" name="lat" /><br>
                        <label for="on_date">Date d'embarquement : </label><input class="form-control" type="text" id="on_date" name="on_date" /><br>
                        <label for="comments">Commentaires : </label><input class="form-control" type="text" id="comments" name="comments" /><br>
                        <label for="city">Ville : </label><input class="form-control" type="text" id="city" name="city" /><br>

                        <input type="submit" id="mapFormSubmit" name="mapFormSubmit" value="Envoyer" />
                    </form>

                    <div id="gmap" style="width:100%; height:600px">
                    </div>
                </div>      
            </div>
        </div>

    <div id="modal_map" class="modal">
        <div class="modal_content">
            <p id="modal_text"></p>
        </div>
    </div>

    <?php require('./public/views/footer.php'); ?>

    <!-- JavaScript files-->
    <script src="./js/gmap.js"></script>
    <!-- Google Map -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDMYjmQOsX1wZFkHJECVFrCZet0FJYK9kg&callback=initMap">google.maps.event.addDomListener(window,'load', initMap);</script>
    <script src="./js/adminOptions.js"></script>
    <script src="./js/controllers/adminOptions.js"></script>
    <script src="./js/eventAdder.js"></script>
    <script src="./js/controllers/eventAdder.js"></script>
    
    
    </body>
</html>
