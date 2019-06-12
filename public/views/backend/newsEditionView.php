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
        <title>Association Nacomed : Gestion des news</title>
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
    </head>
    <body>
        <!-- Navigation -->
        <?php require('./public/views/header.php'); ?>

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

                                        
                                        <!-- <input class="delete_btn" type="button" value="Supprimer" /> -->
                                        <!-- <input type="hidden" class="hidden_input" id="<?php echo $value->art_id(); ?>" /> -->
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

        <?php require('./public/views/footer.php'); ?>

        <!-- JavaScript files-->
        <script src="/nacomed/js/scroll_nav.js"></script>
        <script src="/nacomed/js/editArticle.js"></script>
        <script src="/nacomed/js/controllers/editArticle.js"></script>
    </body>
</html>

