
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
        <title>Association Nacomed : Accueil</title>
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
        <!-- Parallax-->
        <link rel="stylesheet" href="./vendor/onepage-scroll/onepage-scroll.css">
        <!-- theme stylesheet-->
        <link rel="stylesheet" href="./css/style.blue.css" id="theme-stylesheet">
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
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container">
                <a class="logo navbar-brand" href="./index.php"><img src="./img/logo_nacomed.png" /></a>
                    <button class="menu_btn navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                        Menu
                        <i class="fas fa-bars"></i>
                    </button>
          
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="./index.php">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./index.php?action=displayNews">Actualités</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./index.php?action=displayOnboard">Embarquement</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./index.php?action=displayContact">Nous soutenir</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./index.php?action=displayContact">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./index.php?action=displayContact">Communauté</a>
                        <?php
                            if (isset($_SESSION['user'])) {
                                $sessionUser = $_SESSION['user'];
                                echo '<li class="nav-item admin-link"><a class="nav-link" href="./index.php?action=displayAdmin">Administration</a></li>';
                                echo '<li class="nav-item logout"><a id ="signOut_link" class="nav-link" href="./index.php?action=signOut">Déconnexion</a></li>';
                            } else {
                                echo '<li class="nav-item login"><a class="nav-link" href="./index.php?action=login">Connexion</a></li>';
                            }
                        ?>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="main">
            <section class="bg-cover bg-center hero">
                <div class="dark-overlay"></div>
                    <div class="position-relative z-index-1">
                        <div class="container welcome text-center text-white">
                            <p class="font-italic lead">Bienvenue sur le site de</p>
                            <h1 class="text-uppercase my-4">NACOMED</h1>
                            <h2>Navire d'&Eacute;tudes Corse Méditerranée</h2>
                            <p class="font-italic lead">Un savant mélange d’années passées dans la navigation de plaisance, la marine marchande, en école et en asso…</p>
                            <p class="font-italic lead">Un navire école pour professionnels et amateurs, sur un concept de navigation pour prendre plus de plaisir en naviguant utile, 
                                                        à la voile, en provoquant les rencontres et les échanges pour s’enrichir humainement en œuvrant pour préserver notre patrimoine 
                                                        marin et maritime.
                            </p>
                        </div>

                        <div class="nav_infos text-white col-lg-4">
                            <span class="asso_info"><i class="fas fa-angle-double-right"></i>Navigation éco-responsable</span>
                            <span class="asso_info"><i class="fas fa-angle-double-right"></i>Apprendre en navigant</span>
                            <span class="asso_info"><i class="fas fa-angle-double-right"></i>Accomplir des missions scientifiques</span>
                            <span class="asso_info"><i class="fas fa-angle-double-right"></i>Partager son savoir</span>
                        </div>

                    </div>

                <div class="scroll-btn link-scroll"><i class="fas fa-angle-down"></i></div>
            </section>
            <section class="scrollable">
                <div class="container about_div">
                    <div class="row">
                        <div class="col-lg-5 science-boat">
                            <header class="text-center">
                                <h3 class="text-uppercase">Un navire scientifique</h3>
                                    <p class="lined">&Eacute;tudier le milieu marin</p>
                            </header>
                                <div class="boat-info"><img src="https://img.icons8.com/ios/50/000000/microscope.png"><p class="about-title short-p">Accueillir des missions scientifiques</p></div>
                                <div class="boat-info"><img class="sized_img" src="https://img.icons8.com/ios/50/000000/graph.png"><p class="about-title short-p">Effectuer des relevés en autonomie (plancton, micorplastique, accoustique</p></div>
                                <div class="boat-info"><img src="./img/plancton.png"><p class="about-title short-p">S'intégrer à des programmes de recherches</p></div>
                                <div class="boat-info"><img class="sized_img" src="https://img.icons8.com/dotty/50/000000/flounder-fish.png"><p class="about-title short-p">Participer aux réseaux de sciences participatives en mer (OBSenMER, ...)</p></div>
                        </div>
                        <div class="col-lg-2 logo-div"><img src="./img/logo_nacomed.png" alt="..." class="img-fluid rounded-circle d-block mx-auto about-logo"></div>
                        <div class="col-lg-5 ecology-boat">
                            <header class="text-center">
                                <h3 class="text-uppercase">Un navire écologique</h3>
                                <p class="lined">Préserver et sensibiliser</p>
                            </header>
                                <div class="boat-info"><img src="https://img.icons8.com/dotty/50/000000/compass.png"><p class="about-title short-p">Naviguer et s’avitailler de manière éco-responsable</p></div>
                                <div class="boat-info"><img src="https://img.icons8.com/ios/50/000000/atom-editor.png"><p class="about-title">Développer l’autonomie du navire grâce aux low-techs</p></div>
                                <div class="boat-info"><img class="sized_img" src="https://img.icons8.com/dotty/50/000000/commercial.png"><p class="about-title"> Mener des actions de sensibilisation auprès des plaisanciers, des plagistes, des écoliers et étudiants, et du grand public</p></div>
                                <div class="boat-info"><img src="https://img.icons8.com/ios/50/000000/recycle-sign.png"><p class="about-title short-p">Effectuer des dépollutions et nettoyages</p></div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 school-boat">
                            <header class="text-center">
                                <h3 class="text-uppercase lined">UN NAVIRE &Eacute;COLE</h3>
                            </header>
                            <div class="row">
                                <div class="text-center school-boat-text col-lg-12">
                                    <h5>Pas de passagers ! Que des équipiers !</h5>
                                        <p>Il est important de pouvoir transmettre ces connaissances du milieu à tous ceux qui souhaitent passer du temps en mer ; pour l’apprécier
                                            et la respecter.
                                        </p>
                                </div>
                                <div class="text-center school-boat-text col-lg-12">
                                    <h5>Tous les niveaux sont acceptés !</h5>
                                        <p><strong>Les éco-volontaires</strong> (du débutant curieux à l’amateur confirmé) se joindront au bord pour découvrir, apprendre, se perfectionner 
                                        et s’affirmer.<br><br>
                                        <strong>Les futurs marins</strong> professionnels (capitaines et lieutenants 200 UMS) pourront apprendre leur métier en mer en participant 
                                        à toutes les tâches du bord et en se responsabilisant. Avec un rôle d’équipage ils auront la possibilité de valider leur temps de mer 
                                        à bord auprès de la DIRM afin de les accompagner dans leur cursus d’étudiant. L’objectif est de former des personnes qualifiées et 
                                        écoresponsables pour rendre la mer plus sûre et la préserver ; cela grâce à des navigations encadrées sur un navire spécialisé. 
                                        Ils sont les futurs acteurs du milieu maritime !
                                        </p>
                                </div>
                                <div class="text-center school-boat-text col-lg-12">    
                                    <h5>Partager nos connaissances et nos expériences, une priorité !</h5>
                                        <p>La bonne ambiance à bord est essentielle, et nous entretiendrons un échange permanent et convivial entre tous les membres du navire, afin
                                            que chacun puisse apporter ses compétences et ses savoirs pour l’enrichissement personnel et le bon déroulement de chacune 
                                            des missions.<br><br>
                                            Nous interagissons avec d’autres associations corses portées sur la protection du milieu marin, et nous continuerons à développer ces relations 
                                            jusqu’aux autres associations méditerranéennes.<br><br>
                                            Enfin, notre voilier et son équipage seront toujours ouverts à l’échange et l'entraide sur tous ces sujets que sont aujourd’hui les enjeux
                                            environnementaux et maritimes de méditerranée. Alors contactez-nous !
                                        </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="bg-gray scrollable">
                <div class="d-flex h-100">
                    <div class="container">
                        <header class="text-center mb-5">
                            <h2 class="text-uppercase lined">La Sonate</h2>
                        </header>
                        
                        <div class="carousel">
                            <div class="owl-carousel owl-theme">
                                <img class="owl-lazy" data-src="./img/sonate/sonate_jour.jpg" alt="" style="height: 600px; width: 100%">
                                <img class="owl-lazy" data-src="./img/sonate/sonate_profil_gauche.jpg" alt="" style="height: 600px; width: 100%">
                                <img class="owl-lazy" data-src="./img/sonate/sonate_nuit.jpg" alt="" style="height: 600px; width: 100%">
                                <img class="owl-lazy" data-src="./img/sonate/sonate_crepuscule.jpg" alt="" style="height: 600px; width: 100%">
                                <img class="owl-lazy" data-src="./img/sonate/sonate_pont.jpg" alt="" style="height: 600px; width: 100%">
                                <img class="owl-lazy" data-src="./img/sonate/sonate_pont_2.jpg" alt="" style="height: 600px; width: 100%">
                            </div>
                        </div>

                        <div class="row boat-general-description col-lg-12"> 
                            <p>La Sonate est une goélette coque acier construite en 1980.<br>
                            Ce type de gréement est intéressant à manœuvrer et demandera de l’attention sur les réglages. Les combinaisons de voilures sont grandes et il faudra toujours trouver
                            la bonne pour avoir un navire équilibré et à la vitesse adéquate par rapport au type de navigation, de travaux et de météo de l’instant.<br>
                            Catégorie de construction A.<br>
                            L= 15.60m   l=4.60m   TE=2.10m<br>
                            Moteur Bedford 330GM. Réserve de GO : 800 litres<br>
                            Production électrique pour une consommation modérée et une autonomie raisonnable<br>
                            <p>
                        </div>        
                    </div>
                </div>
            </section>
            <section class="bg-gray">
                <div class="d-flex h-100">
                    <div class="container boat-details">
                        <header class="text-center mb-5">
                        <h2 class="text-uppercase lined">La sonate : détails techniques</h2>
                        </header>
                        <div class="row">
                            <div class="col-lg-4">
                                <img class="boat-plan" src="./img/sonate/plan_sonate1_resized.jpg" alt="plan du bateau la sonate">
                            </div>
                            <div class="details-text col-lg-4 col-sm-12">
                                <h5>Matériel de navigation :</h5>
                                1 VHF fixe Navicom 550<br>
                                1 portable Horizon HX 400<br>
                                1 GPS Furuno GP32 connecté à la VHF et répétiteur dans le cockpit<br>
                                1 loch sonde température ST 800 Raymarine plus écran (2018)<br>
                                Radar Autohelm SD marine<br>
                                Un compas de route<br>
                                Un récepteur pour centrale AIR MAR en haut de mât avec RTI (NMEA vers USB)<br><br>

                                <h5>Equipement électrique :</h5>
                                Parc batteries : 2 pour le moteur, 2 pour la nav, 2 pour la servitude, 2 pour le 220v avec onduleur<br>
                                3 alternateurs : 2  pour nav et servitude et 1 pour moteur<br>
                                6 panneaux solaires : 2x100w pour nav et servitude, 2x100w pour onduleur et 2x50w moteur<br>
                                Eolienne, hydro génératrice<br>
                                Toutes les ampoules sont à LED<br><br>
                            </div>
                            <div class="col-lg-4 col-sm-12">
                                <h5>Divers :</h5>
                                Eclairage cockpit<br>
                                Plateforme de bain avec douche<br>
                                3 pompes de cale (1 électrique, 2 manuelles)<br>
                                Portique pour annexe et panneaux solaires<br>
                                Cuisinière 2 feux et four<br>
                                Chauffage<br>
                                WC marin électrique avec bac à eaux noires 100l<br>
                                2 réservoirs de 750 l d’eau.<br>                    
                                Régulateur Sailomat<br>
                                Un congélateur sur 220v<br>
                                Echelle de bain pour plongeurs en bouteilles<br><br>

                                <h5>Mouillage :</h5>
                                3 ancres CQR : 75, 75 et 35 livres, 1 danfort 45 livres ;<br>
                                60m de chaîne de 12mm ; 20m de chaîne de 12mm ; 2x100m cablots flottants<br>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="d-flex h-100">
                    <div class="container">
                        <header class="text-center mb-5">
                            <h2 class="text-uppercase lined">Contact</h2>
                        </header>
                        <div class="row">
                            <div class="contact-logo-div col-lg-12"><img class="contact-logo" src="./img/logo_nacomed.png" alt="..." class="img-fluid rounded-circle d-block mx-auto contact-logo"></div>
                        </div>
                        <div class="row lined">
                            <div class="col-lg-6 person_infos text-center">
                                <p>Cyrille Lorenzi</p>
                                <p>Fondateur et Capitaine</p>
                                <p>Tél : 06 41 25 99 31</p>
                                <p>Mail : <a href="mailto:navirecorsemed@gmail.com">navirecorsemed@gmail.com</a></p>
                            </div>
                            <div class="col-lg-6 text-center person_pic">
                                <img src="./img/cyrille_resized.png">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6 person_infos text-center">
                                <p>Maxime Lauvergeat</p>
                                <p>Développeur web et gestion informatique</p>
                                <p>Mail : <a href="mailto:mlauvergeat@gmail.com">mlauvergeat@gmail.com</a></p>
                            </div>
                            <div class="col-lg-6 text-center person_pic">
                                <img src="./img/max_resized.png">
                            </div>
                        </div>
                    <?php require('./public/views/footer.php'); ?>
                    </div>
                </div>
            </section>
        </div>

    <!-- JavaScript files-->
    <script src="./js/scroll_nav.js"></script>
    <script src="./vendor/owl.carousel/owl.carousel.js"></script>
    <script src="./vendor/onepage-scroll/jquery.onepage-scroll.js"></script>
    <script src="./js/controllers/main.js"></script>

    <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    </body>
</html>
    