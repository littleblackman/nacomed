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
        <link rel="stylesheet" href="../../../vendor/bootstrap/css/bootstrap.min.css">
        <!-- Google fonts-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cardo:400,400i">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
        <!-- Font Awesome-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <!-- Custom stylesheet - for your changes-->
        <link rel="stylesheet" href="../../../css/custom.css">
        <!-- Favicon-->
        <link rel="shortcut icon" href="./img/logo_nacomed.png">
        <!-- Tweaks for older IEs--><!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    </head>
    <body>
        <!-- Navigation -->
        <?php require('./public/views/header.php'); ?>
        
        <div class="container">
            <div class="row">
                <div class="col-lg-12 reported_comments">
                    <header>
                        <h4 class="text-center">Retrouvez-ici tous les commentaires qui ont été signalés par les visiteurs</h4>
                    </header>
                        <p class="text-center">Voici la liste des derniers commentaires signalés :</p>

                            <div class="rep-coms-list">
                                <?php
                                    foreach ($comments as $com) {
                                ?>
                                    <div>
                                        <p class="reported-com">
                                            Auteur : <?php echo $com->com_author(); ?></br>
                                            Commentaire : <?php echo $com->com_content(); ?></br>
                                            Signalé le : <?php echo $com->com_date_fr() . ', ' . $com->com_report_number() . ' fois.'; ?></br>
                                            <input type="button" class="del_btn" name="<?php echo $com->com_id(); ?>" value="Supprimer" />
                                        </p>
                                    </div>
                                <?php 
                                    } 
                                ?>
                            </div>
                </div>
            </div>
        </div>

        <div id="modal_delete" class="modal">
            <div class="modal_del_content">
                <span class="close">&times;</span>
                <p id="modal_text"></p>
                <div id="buttons">
                    <button id="yes">Oui</button>
                    <button id="no">Non</button>
                </div>
            </div>
        </div>

        <?php require('./public/views/footer.php'); ?>

        <!-- JavaScript files-->
        <script src="./js/deleteCom.js"></script>
        <script src="./js/controllers/deleteCom.js"></script>
    </body>
</html>