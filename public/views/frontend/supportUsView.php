    <!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Association Nacomed : Nous soutenir</title>
        <meta name="description" content="Page pour soutenir l'association Nacomed : les dons">
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
        <link rel="shortcut icon" href="./img/logo_nacomed.png">
        <!-- Open Graph Data Facebook -->
        <meta property="og:title" content="Page de dons Nacomed" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="https://www.nacomed.oc-maxlau.fr/index.php?action=displaySupport" />
        <meta property="og:image" content="http://zupimages.net/viewer.php?id=19/28/69dv.png" />
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-142576167-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-142576167-1');
        </script>
        
        <!-- Tweaks for older IEs--><!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    </head>
    <body>

        <!-- Navigation -->
        <?php require('./public/views/header.php'); ?>

        <!-- <div class="donation">
            <p>A VENIR : VOUS POURREZ SOUTENIR L'ASSOCIATION EN FAISANT DES DONS</p>
        </div> -->

        <iframe id="haWidget" allowtransparency="true" scrolling="auto" src="https://www.helloasso.com/associations/nacomed/formulaires/1/widget" style="width:100%;height:750px;border:none;" onload="window.scroll(0, this.offsetTop)"></iframe>


        <?php require('./public/views/footer.php'); ?>
    </body>
</html>

        