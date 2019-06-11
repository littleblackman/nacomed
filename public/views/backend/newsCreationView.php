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
        <title>Association Nacomed : Création de news</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="all,follow">
        <!-- Bootstrap CSS-->
        <link rel="stylesheet" href="/nacomed/vendor/bootstrap/css/bootstrap.min.css">
        <!-- Google fonts-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cardo:400,400i">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
        <!-- Font Awesome-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <!-- Custom stylesheet - for your changes-->
        <link rel="stylesheet" href="/nacomed/css/custom.css">
        <!-- Favicon-->
        <link rel="shortcut icon" href="favicon.png">
        <!-- Tweaks for older IEs--><!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
        <!-- TinyMCE -->
        <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=0ofr5ymckej6ac4mcq2doqoozjut2zifnyjjfp067bqy5s12"></script>
        <script src="/nacomed/js/tinymce/default_editor.js"></script>
    </head>
    <body>
        <!-- Navigation -->
        <?php require('../header.php'); ?>

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
                <form class="article_form" action="/nacomed/index.php?action=addNews" method="post">
                    <p>Titre du billet :</p>
                        <textarea class="content" id="art_title" name="title"></textarea></br>
                    <p>Contenu du billet :</p>
                        <textarea class="content" id="art_content" name="content"></textarea></br>
                    <input id="art_submit_btn" name="art_send" type="submit" value="Envoyer" />
                </form>
            <div>
        </div>

        <div id="modal_create" class="modal">
            <div class="modal_content">
                <p id="modal_text"></p>
            </div>
        </div>

        <script>tinymce.init({ selector: 'content' });</script>
        <?php require('../footer.php'); ?>

        <!-- JavaScript files-->
        <script src="/nacomed/vendor/jquery/jquery/jquery.min.js"></script>
        <script src="/nacomed/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script>$(function() {
                    var artToAdd = Object.create(articleToAdd);
                    artToAdd.init();
                });
        </script>
        <script>var sUser = '<?php echo $_SESSION['user']; ?>'; console.log(sUser);</script>
        <script src="/nacomed/js/newsAdder.js"></script>
    </body>
</html>
