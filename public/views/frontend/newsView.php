<?php $title = 'Association Nacomed : votre News'; ?>
<?php $meta_description = 'Page de votre news Nacomed'; ?>
<?php $og_title = 'Page de votre News Nacomed'; ?>

<?php ob_start(); ?>

<div class="container news-view">
    <div class="row">
        <div class="col-lg-12 col-md-10 mx-auto news-display">
            <div class="news-img">
                <img src="<?php echo $article->url_img(); ?>" alt="<?php echo $article->art_title(); ?>" />
            </div>
            <div class="news-heading">
                <h1><?php echo $article->art_title(); ?></h1>
                <span class="meta">Publié le : <?php echo $article->date_fr(); ?></span>
            </div>

            <!-- Post Content -->
            <article class="art-content">
                <div class="container news-content">
                    <div class="row">
                        <div class="col-lg-8 col-md-10 mx-auto">
                            <p><?php echo $article->art_content(); ?></p>
                        </div>
                    </div>
                </div>
            </article>

            <div class="video">
                <iframe id="video-iframe" src="<?php echo $article->url_video(); ?>" width="500" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allowFullScreen="true"></iframe>
            </div>
        </div>
    </div>

    <div id="add_com">
        <button>Ajouter un commentaire</button>
    </div>

    <form id="com_form" action="/nacomed/index.php?action=addComment" method="post">
        <div>
            <label for="com_author">Pseudo : </label>
            <textarea class="com_author" id="author" name="com_author" placeholder="Votre pseudo" required></textarea>
            <span id="missPseudo"></span>
        </div>

        <div>
            <label for="com_content">Votre commentaire : </label>
            <textarea class="com_content" id="content" name="com_content" placeholder="Votre commentaire" required></textarea>
            <span id="missCom"></span>
        </div>

        <input type="hidden" id="art_id" name="art_id" value="<?php echo $article->art_id(); ?>" />

        <div class="sub-btn">
            <input id="com_submit_btn" type="submit" />
        </div>
    </form>

    <div id="comments-area">
        <p class="com_heading">Commentaires :</p>
            <?php foreach ($comments as $comment) {
                $censoredCommentClass = $comment->com_report_number() > 0 ? "comment_censored" : "";
                $censoredSpanClass = $comment->com_report_number() > 0 ? "span_censored" : "";
            ?>
                <div class="comment_content <?= $censoredCommentClass ?>">
                    <p class="com_text"><?php echo $comment->com_content(); ?></br></br>
                        Posté par : <?php echo $comment->com_author(); ?></br>
                        le : <?php echo $comment->com_date_fr(); ?></br>
                        <input type="button" class="report_com_btn" value="Signaler" id="<?php echo $comment->com_id(); ?>"/>
                    </p>
                    <span class="<?= $censoredSpanClass ?>"></span>
                </div></br>
            <?php } ?>
    </div>

    <div id="modal_com" class="modal">
        <div class="modal_content">
            <p id="modal_text"></p>
        </div>
    </div>
</div>
        
<div><a id="header_link" href="#header">Retour en haut</a></div>

<?php $content = ob_get_clean(); ?>
<?php require('public/views/layoutFront.php'); ?>

<!-- JavaScript files-->
<script src="./js/scroll_nav.js"></script>
<script src="./js/commentAdder.js"></script>
<script src="./js/reportCom.js"></script>
<script src="./js/controllers/newsView.js"></script>
<script src="./js/headerLink.js"></script>