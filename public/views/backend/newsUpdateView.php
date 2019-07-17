<?php $title = 'Association Nacomed : Mise à jour de la news'; ?>
<?php $meta_description = 'Page de mise à jour de la news'; ?>

<?php ob_start(); ?>

<div class="container admin_interface">
    <div class="row mgmt">
        <div class="col-lg-12 text-center">
            <header>
                <h1>Mise à jour de la news</h1>
            </header>

            <p class="font-italic lead">
                Apportez les modifications à votre news puis validez les
            </p>
        </div>
    </div>

    <div class="row text-center">
        <form id="news-update-form" class="article_form" action="./index.php?action=updateArticle" method="post" enctype="multipart/form-data">
            <p>Titre de la news :</p>
                <textarea class="content" id="art_title" name="title">
                    <?php echo $article->art_title(); ?>
                </textarea><br>
            <p>Contenu de la news :</p>
                <textarea class="content" id="art_content" name="content">
                    <?php echo $article->art_content(); ?> 
                </textarea><br>
                <input type="file" name="img" id="img" /><br>
                <p>Insérer le lien de votre vidéo</p>
                    <input type="text" name="video" id="video" /><br> 
                <input type="hidden" name="art_id" id="art_id" value="<?php echo $article->art_id(); ?>" />
                <input id="art_update_btn" name="art_send" type="submit" value="Envoyer" />
        </form>
    </div>
</div>

<div id="modal_update" class="modal">
    <div class="modal_content">
        <p id="modal_text"></p>
    </div>
</div>

<?= $tinymce = '<script src="../../../js/tinymce/default_editor.js"></script>'; ?>

<?php $content = ob_get_clean(); ?>
<?php require('public/views/layoutBack.php'); ?>

<!-- JavaScript files-->
<script>tinymce.init({ selector: 'content' });</script>
<script>var sUser = '<?php echo $_SESSION['user']; ?>'; console.log(sUser);</script>
<script src="./js/scroll_nav.js"></script>
<script src="./js/newsUpdater.js"></script>
<script src="./js/controllers/newsUpdater.js"></script>