<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Association Nacomed : Actualités</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="all,follow">
        <!-- Bootstrap CSS-->
        <link rel="stylesheet" href="./vendor/bootstrap/css/bootstrap.min.css">
        <!-- Google fonts-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cardo:400,400i">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
        <!-- OwlCarousel -->
        <link rel="stylesheet" href="./vendor/owl.carousel/assets/owl.carousel.css">
        <link rel="stylesheet" href="./vendor/owl.carousel/assets/owl.theme.default.min.css">
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
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="post-preview">
                        <?php
                            $i = 0;
                            foreach ($articles as $value) {   
                            $i++;                          
                        ?>

                                    <div class="post">
                                        <a href="index.php?action=getArticle&amp;article_id=<?php echo $value->art_id(); ?>">
                                            <h2 class="post-title">
                                                <?php echo $value->art_title(); ?>
                                            </h2>
                                            <p class="post-content">
                                                <?php echo $value->art_content(); ?>
                                            </p>
                                        </a>
                                        
                                        <p class="post-meta">
                                        Publié le : <?php echo $value->date_fr(); ?>  
                                        </p> 
                                    </div>
                            <?php
                                
                                var_dump($i);}
                            ?>
                    </div>
                </div>
            </div>
        </div>

        <?php require('./public/views/footer.php'); ?>

        <!-- JavaScript files-->
        <script src="./vendor/jquery/jquery/jquery.min.js"></script>
        <script src="./vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="./js/scroll_nav2.js"></script>
    </body>
</html>

