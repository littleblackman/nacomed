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
        <?php require('./public/views/header.php'); ?>

        <div class="container login-div">
            <div class="row mgmt">
                <div class="col-lg-12 text-center">
                    <header>
                        <h1>Espace de connexion</h1>
                    </header>

                    <p class="font-italic lead">
                        Veuillez rentrer vos identifiants pour vous connecter
                    </p>
                </div>
            </div>

            <div>
                <form id="login_form" action="./index.php?action=adminLogin" method="post">
                    <div>
                        <label for="user">Login : </label>
                        <input type="text" id="user_login" name="user" required />
                    </div>

                    <div>
                        <label for="password">Mot de passe : </label>
                        <input type="password" id="user_password" name="password" required />
                    </div>

                    <div>
                        <input id="login_btn" type="submit" value="Se connecter" />
                    </div>
                </form>
            </div>

        </div>

        <div id="modal_login" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>  
                <p id="modal_text"></p>
            </div>
        </div>

        <?php require('./public/views/footer.php'); ?>

        <!-- JavaScript files-->
        <script src="/nacomed/vendor/jquery/jquery/jquery.min.js"></script>
        <script src="/nacomed/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="/nacomed/js/login.js"></script>
        <script>$(function() {
                    var login = Object.create(loginValid);
                    login.init();
                });
        </script>

    </body>
</html>