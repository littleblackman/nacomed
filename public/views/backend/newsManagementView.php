<?php $title = 'Association Nacomed : Gestion des news'; ?>
<?php $meta_description = 'Page de gestion des news'; ?>

<?php ob_start(); ?>

<div class="container admin_interface">
    <div class="row mgmt">
        <div class="col-lg-12 text-center">
            <header>
                <h1>Gestion des news</h1>
            </header>

            <p class="font-italic lead">
                Bienvenue sur la page de gestion de news, sélectionnez une option
            </p>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6 text-center">
            <header>
                <h4>Créer une news</h4>
                    <button id="news-creation">Créer</button>
            </header>
        </div>

        <div class="col-lg-6 text-center">
            <header>
                <h4>Editer une news<br>(mise à jour, suppression)</h4>
                    <button id="edit-mgmt">Edition</button>
            </header>
        </div>
    </div>
</div>

<?php $content = ob_get_clean(); ?>
<?php require('public/views/layoutBack.php'); ?>

<!-- JavaScript files-->
<script src="../../../js/scroll_nav.js"></script>
<script src="../../../js/adminOptions.js"></script>
<script src="../../../js/controllers/adminOptions.js"></script>
