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
                        <h1>Page de mise à jour de la map</h1>
                    </header>    
                    <p class="font-italic">Mettez à jour votre évènement en modifiant ses informations</p>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-2 actions">
                    <button id="events-list">Liste des events</button>
                </div>

                <div class="col-lg-10 area-map">
                    <form class="form-group" id="event-update-form" method="post" action="/nacomed/index.php?action=updateEvent">
                        <label for="name">Nom de l'évènement : </label><input class="form-control" type="text" id="name" name="name" placeholder="<?php echo $event['event_name']; ?>" /><br/>
                        <label for="lng">Longitude : </label><input class="form-control" type="text" id="lng" name="lng" placeholder="<?php echo $event['event_lng']; ?>" /><br/>
                        <label for="lat">Lattitude : </label><input class="form-control" type="text" id="lat" name="lat" placeholder="<?php echo $event['event_lat']; ?>" /><br>
                        <label for="on_date">Date d'embarquement : </label><input class="form-control" type="text" id="on_date" name="on_date" placeholder="<?php echo $event['onboarding_date']; ?>" /><br>
                        <label for="comments">Commentaires : </label><input class="form-control" type="text" id="comments" name="comments" placeholder="<?php echo $event['event_comments']; ?>" /><br>
                        <label for="city">Ville : </label><input class="form-control" type="text" id="city" name="city" /><br>
                        <label for="event_id"></label><input type="hidden" id="event_id" name="event_id" value="<?php echo $event['event_id']; ?>" />


                        <input type="submit" id="updateFormSubmit" name="updateFormSubmit" value="Envoyer" />
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
    <script src="./js/gmapEditEvent.js"></script>
    <!-- Google Map -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=<?php include('./config.php'); echo $apiKey; ?>&callback=initMap">google.maps.event.addDomListener(window,'load', initMap);</script>

    <script src="./js/adminOptions.js"></script>
    <script src="./js/controllers/adminOptions.js"></script>
    
    </body>
</html>