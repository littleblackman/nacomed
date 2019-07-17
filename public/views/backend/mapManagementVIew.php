<?php $title = 'Association Nacomed : Page de création d\'évènement google map'; ?>
<?php $meta_description = 'Page de création d\'évènement google map'; ?>

<?php ob_start(); ?>

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

<!-- <?php include('./config.php'); $gmap_script = '<script async defer src="https://maps.googleapis.com/maps/api/js?key=' . $apiKey . '&callback=initMap"></script>'; ?> -->

<?php $content = ob_get_clean(); ?>
<?php require('public/views/layoutBack.php'); ?>

<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDMYjmQOsX1wZFkHJECVFrCZet0FJYK9kg&callback=initMap" async defer></script>

<!-- JavaScript files-->
<script src="./js/gmap.js"></script>
<script src="./js/adminOptions.js"></script>
<script src="./js/controllers/adminOptions.js"></script>
<script src="./js/eventAdder.js"></script>
<script src="./js/controllers/eventAdder.js"></script>