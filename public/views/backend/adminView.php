<?php $title = 'Association Nacomed : Tableau de bord'; ?>
<?php $meta_description = 'Tableau de bord d\'administration : Dashboard'; ?>

<?php ob_start(); ?>

<div class="container admin_interface">
    <div class="row mgmt">
        <div class="col-lg-12 text-center">
            <header>
                <h1>Espace d'administration</h1>
            </header>

            <p class="font-italic lead">
                Bienvenue sur votre espace d'administration, sélectionnez une option
            </p>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4 text-center">
            <header>
                <h4>Gestion des news (articles)</h4>
                    <button id="news-mgmt">Gérer</button>
            </header>
        </div>

        <div class="col-lg-4 text-center">
            <header>
                <h4>Gestion de la map</h4>
                    <button id="map-mgmt">Gérer</button>
            </header>
        </div>

        <div class="col-lg-4 text-center">
            <header>
                <h4>Gestion des commentaires</h4>
                    <button id="com-mgmt">Gérer</button>
            </header>
        </div>
    </div>

    <div class="row program-div">
        <div class="col-lg-12 text-center">
            <header>
                <h4>Gestion du programme</h4>
                    <button id="program-mgmt">Gérer</button>
            </header>
        </div>
    </div>
</div>

<?php $content = ob_get_clean(); ?>
<?php require('public/views/layoutBack.php'); ?>
