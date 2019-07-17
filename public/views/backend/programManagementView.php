<?php $title = 'Association Nacomed : Mise à jour des infos du programme du navire'; ?>
<?php $meta_description = 'Mise à jour des infos du programme du navire'; ?>

<?php ob_start(); ?>

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

<?php $content = ob_get_clean(); ?>
<?php require('public/views/layoutBack.php'); ?>

<!-- JavaScript files-->
<script src="./js/programInfosAdder.js"></script>
<script src="./js/controllers/programInfosAdder.js"></script>