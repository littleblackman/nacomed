<?php $title = 'Association Nacomed : Création de news' ?>
<?php $meta_description = 'Page de création de news'; ?>

<?php ob_start(); ?>

<div class="container news-creation">
    <div class="row mgmt">
        <div class="col-lg-12 text-center">
            <header>
                <h1>Création de news</h1>
            </header>

            <p class="font-italic lead">
                Bienvenue sur la page de création de news (articles)
            </p>
        </div>
    </div>

    <div class="row text-center">
        <form class="article_form" id="NcrForm" action="../../../index.php?action=addNews" method="post" enctype="multipart/form-data">
            <p>Titre de la news :</p>
                <textarea class="content" id="art_title" name="title"></textarea></br>
            <p>Contenu de la news :</p>
                <textarea class="content" id="art_content" name="content"></textarea></br>
            <p>Sélectionner une image :</p>
                <input type="file" name="img" id="img" /><br>
            <p>Insérer le lien de votre vidéo</p>
                <input type="text" name="video" id="video" /><br>
            <input id="art_submit_btn" name="art_send" type="submit" value="Envoyer" />
        </form>
    <div>
</div>

<div id="modal_create" class="modal">
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
<script src="../../../js/newsAdder.js"></script>
<script src="../../../js/controllers/newsAdder.js"></script>
