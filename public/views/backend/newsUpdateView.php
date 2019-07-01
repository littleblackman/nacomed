<?php
    if (!isset($_SESSION)) {
        session_start();
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Association Nacomed : Mise à jour de news</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="all,follow">
        <!-- Bootstrap CSS-->
        <link rel="stylesheet" href="./vendor/bootstrap/css/bootstrap.min.css">
        <!-- Google fonts-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cardo:400,400i">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
        <!-- Font Awesome-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <!-- Custom stylesheet - for your changes-->
        <link rel="stylesheet" href="./css/custom.css">
        <!-- Favicon-->
        <link rel="shortcut icon" href="favicon.png">
        <!-- Tweaks for older IEs--><!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
        <!-- TinyMCE -->
        <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=0ofr5ymckej6ac4mcq2doqoozjut2zifnyjjfp067bqy5s12"></script>
        <script src="./js/tinymce/default_editor.js"></script>
    </head>

    <body>
        <!-- Navigation -->
        <?php require('./public/views/header.php'); ?>

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

        <?php require('./public/views/footer.php'); ?>

        <!-- JavaScript files-->

        <script>tinymce.init({ selector: 'content' });</script>
        <script>var sUser = '<?php echo $_SESSION['user']; ?>'; console.log(sUser);</script>
        <script src="./js/scroll_nav.js"></script>
        <script src="./js/newsUpdater.js"></script>
        <script src="./js/controllers/newsUpdater.js"></script>
    </body>
</html>