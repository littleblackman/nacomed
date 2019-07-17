<?php $title = 'Association Nacomed : Page de mise à jour des évènements google map'; ?>
<?php $meta_description = 'Page de mise à jour des évènements google map'; ?>

<?php ob_start(); ?>

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

<!-- <?php include('./config.php'); $gmap_script = '<script async defer src="https://maps.googleapis.com/maps/api/js?key=' . $apiKey . '&callback=initMap"></script>'; ?> -->

<?php $content = ob_get_clean(); ?>
<?php require('public/views/layoutBack.php'); ?>

<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDMYjmQOsX1wZFkHJECVFrCZet0FJYK9kg&callback=initMap" async defer></script>

<script src="./js/gmapEditEvent.js"></script>
<script src="./js/adminOptions.js"></script>
<script src="./js/controllers/adminOptions.js"></script>