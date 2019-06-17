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

        <div class="container events-map">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <header>
                        <h1>Bienvenue sur la page de vos évènements</h1>
                    </header>    
                    <p class="font-italic">Retrouvez ici tous vos évènements. Editez les au besoin.</p>
                </div>
            </div>

            <div class="row table-events">
                <div class="col-lg-12">
                    
                    <div class="events">
                        <table>
                            <thead>
                                <tr>
                                    <th>Nom</th>
                                    <th>Lattitude</th>
                                    <th>Longitude</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php foreach ($mapEvents as $mE) {
                                    echo '<tr class="row-map">';
                                        echo '<td>' . $mE->event_name() . '</td>';
                                        echo '<td class="event_lat">' . $mE->event_lat() . '</td>';
                                        echo '<td class="event_lng">' . $mE->event_lng() . '</td>';
                                        echo '<td class="buttons-map"><button type="submit" id="edit' . $mE->event_id() . '">Editer</button>';
                                        echo '<button type="submit" id="delete' . $mE->event_id() . '">Supprimer</button>';
                                        echo '<button type="submit" id="view' . $mE->event_id() . '">Voir</button></td>';
                                        echo '<input type="hidden" id="event_id" value="' . $mE->event_id() . '" />';
                                        echo '<tr></tr>';
                                    echo '</tr>';
                                } ?>

                                
                            </tbody>
                        </table>
                        
                    </div>
                </div>
                
                
            </div>

            <div id="gmap" style="width:800px; height:600px; margin: 0 auto;">
            </div>
        </div>

    <?php require('./public/views/footer.php'); ?>

    <!-- JavaScript files-->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDMYjmQOsX1wZFkHJECVFrCZet0FJYK9kg&callback=initMap"></script>
    <script src="/nacomed/js/gmapEvents.js"></script>

    </body>
</html>