<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Association Nacomed : Contact</title>
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
    </head>
    <body>

        <!-- Navigation -->
        <?php require('./public/views/header.php'); ?>

        <div class="conteneur">
            <!-- Header -->
            <header class="masthead">
                <div class="overlay"></div>
                    <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-10 mx-auto">
                            <div class="text-center site-heading">
                                <h1>Contact</h1>
                                <span class="subheading">Vous avez des questions ? J'ai des réponses.<span>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Main Content -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-10 mx-auto">
                        <p class="text-center">Vous souhaitez entrer en contact ? Remplissez le formulaire ci-dessous pour m'envoyer un message et je vous répondrais le plus vite possible!</p>
                        <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
                        <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
                        <!-- To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
                        <form name="sentMessage" id="contactForm" novalidate>
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls">
                                <label>Nom</label>
                                <input type="text" class="form-control" placeholder="Nom" id="name" required data-validation-required-message="Entrez votre nom.">
                                <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls">
                                <label>Addresse Email</label>
                                <input type="email" class="form-control" placeholder="Adresse Email" id="email" required data-validation-required-message="Entrez votre adresse Email.">
                                <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Numéro de téléphone</label>
                                <input type="tel" class="form-control" placeholder="Numéro de téléphone" id="phone" required data-validation-required-message="Entrez votre numéro de téléphone.">
                                <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls">
                                <label>Message</label>
                                <textarea rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Ecrivez un message."></textarea>
                                <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <br>
                            <div id="success"></div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary" id="sendMessageButton">Envoyer</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <?php require('./public/views/footer.php'); ?>

        <script src="./js/jqBootstrapValidation.js"></script>
        <script src="./js/contact_me.js"></script>
        <script src="./js/scroll_nav.js"></script>

    </body>
</html>