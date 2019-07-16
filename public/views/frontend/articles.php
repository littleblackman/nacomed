<?php $title = 'Association Nacomed : News'; ?>
<?php $meta_description = 'Page des News de Nacomed, retrouvez ici toutes les news'; ?>
<?php $og_title = 'Page des news de Nacomed'; ?>

<?php ob_start(); ?>

<div class="container welcome-news">
    <div class="row">
        <div class="col-lg-12 text-center">
            <header>
                <h1>Bienvenue sur la page des actualités</h1>
            </header>    
            <p>Vous trouverez ici toutes les news concernant Nacomed et le milieu marin (sciences, écologie, navigation)</p>
        </div>
    </div>
</div>

<div class="container post-news">
    <?php
        foreach ($articles as $value) {                           
    ?>
    <div class="row post-div">
        <div class="col-lg-8 col-md-10 mx-auto">
            <div class="post-preview">
                
                    <div class="post-list">
                        <div class="post post-item">
                            <a href="index.php?action=getArticle&amp;article_id=<?php echo $value->art_id(); ?>">
                                <h2 class="post-title">
                                    <?php echo $value->art_title(); ?>
                                </h2>
                                <p class="post-content">
                                    <?php echo $value->art_content(); ?>
                                </p>
                            </a>
                        </div>
                        <p class="post-meta">
                            Publié le : <?php echo $value->date_fr(); ?> par <?php echo $value->art_author(); ?>.
                        </p>
                    </div> 
                
            </div>
        </div>
        <div class="col-lg-4 img-div">
            <div class="image-news">
                <img src="<?php echo $value->url_img(); ?>" />
            </div>
        </div>
    </div>
    <?php
        }
    ?>
</div>

<div><a id="header_link" href="#header">Retour en haut</a></div>

<?php $content = ob_get_clean(); ?>
<?php require('public/views/layoutFront.php'); ?>

