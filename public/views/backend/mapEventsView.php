<?php $title = 'Association Nacomed : Liste des évènements google map'; ?>
<?php $meta_description = 'Liste des évènements google map'; ?>

<?php ob_start(); ?>

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
            
            <div class="events table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Nom</th>
                            <th scope="col">Embarquement</th>
                            <th scope="col">Lattitude</th>
                            <th scope="col">Longitude</th>
                            <th scope="col">Commentaires</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($mapEvents as $mE) {
                            echo '<tr scope="row" class="row-map">';
                                echo '<td class="event_name">' . $mE->event_name() . '</td>';
                                echo '<td class="on_date">' . $mE->onboarding_date() . '</td>';
                                echo '<td class="event_lat">' . $mE->event_lat() . '</td>';
                                echo '<td class="event_lng">' . $mE->event_lng() . '</td>';
                                echo '<td class="comments">' .$mE->event_comments() . '</td>';
                                echo '<td class="buttons-map"><button id="edit' . $mE->event_id() . '">Editer</button>';
                                echo '<button id="delete' . $mE->event_id() . '">Supprimer</button>';
                                echo '<input type="hidden" id="event_id" value="' . $mE->event_id() . '" />';
                                echo '<tr></tr>';
                            echo '</tr>';
                        } ?>

                        
                    </tbody>
                </table>
                
            </div>
        </div>
        
        
    </div>

    <div id="gmap" style="width:100%; height:600px; margin: 0 auto;">
    </div>
</div>

<div id="modal_map" class="modal">
    <div class="modal_content">
        <p id="modal_text"></p>
    </div>
</div>

<div id="modal_edit" class="modal">
    <div class="modal_content_edit">
        <span class="close">&times;</span>
        <p id="modal_text_edit"></p>
            <div id="edit_buttons">
                <button id="yes">Oui</button>
                <button id="no">Non</button>
            </div>
    </div>
</div>

<!-- <?php include('./config.php'); $gmap_script = '<script async defer src="https://maps.googleapis.com/maps/api/js?key=' . $apiKey . '&callback=initMap"></script>'; ?> -->

<?php $content = ob_get_clean(); ?>
<?php require('public/views/layoutBack.php'); ?>

<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDMYjmQOsX1wZFkHJECVFrCZet0FJYK9kg&callback=initMap" async defer></script>

<!-- JavaScript files-->
<script src="./js/gmapEvents.js"></script>