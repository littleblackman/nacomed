<?php $title = 'Association Nacomed : Edition de news' ?>
<?php $meta_description = 'Page d\'édition des news'; ?>

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
        <div class="col-lg-8 col-md-10 mx-auto">
            <div class="post-preview">
        
                <?php
                    foreach ($articles as $value) {
                ?>
                
                    <div class="post">
                        <h2 class="post-title">
                            <?php echo $value->art_title(); ?>
                        </h2>
                        <p class="post-content">
                            <?php echo $value->art_content(); ?>
                        </p>
                    </div>
                    <div class="edit-btn-div">
                        <input class="edit_btn" type="button" name="<?php echo $value->art_id(); ?>" value="Editer" />
                    </div>
                <?php
                    }
                ?>
            </div>
        </div>
    </div>
</div>

<div id="modal_edit" class="modal">
    <div class="modal_content modal_edit_content">
        <span class="close">&times;</span>
        <p id="modal_text"></p>
        <div id="buttons">
            <button id="edit">Editer</button>
            <button id="delete">Supprimer</button>
            <button id="yes">Oui</button>
            <button id="no">Non</button>
        </div>
    </div>
</div>

<?php $content = ob_get_clean(); ?>
<?php require('public/views/layoutBack.php'); ?>

<!-- JavaScript files-->
<script src="./js/scroll_nav.js"></script>
<script src="./js/editArticle.js"></script>
<script src="./js/controllers/editArticle.js"></script>

