<?php $title = 'Association Nacomed : Embarquement'; ?>
<?php $meta_description = 'Page des informations d\'embarquement pour l\'association Nacomed'; ?>
<?php $og_title = 'Page de votre News Nacomed'; ?>


<?php   // ce tableau doit normalement être créé dans le controllor 
            $mont_prog = [
                        "JANVIER" => $prog_jan, 
                        "FEVRIER" => $prog_feb,
                        "MARS"    => $prog_mar,
                        "AVRIL"   => $prog_apr, 
                        "MAI"     => $prog_may,
                        "JUIN"    => $prog_jun, 
                        "JUILLET" => $prog_jul, 
                        "AOUT"    => $prog_aug, 
                        "SEPTEMBRE" => $prog_sep, 
                        "OCTOBRE"   => $prog_oct,
                        "NOVEMBRE"  => $prog_nov,
                        "DECEMBRE" => $prog_dec ];?>

<?php ob_start(); ?>

<div class="eco-volunteer">
    <header class="text-center">
        <h1>Embarquer comme éco-marin</h1>
    </header>

    <div class="carousel onboard-carousel">
        <div class="owl-carousel owl-theme">
            <img class="owl-lazy" data-src="./img/sonate/sonate_jour.jpg" alt="">
            <img class="owl-lazy" data-src="./img/sonate/sonate_profil_gauche.jpg" alt="">
            <img class="owl-lazy" data-src="./img/sonate/sonate_nuit.jpg" alt="">
            <img class="owl-lazy" data-src="./img/sonate/sonate_crepuscule.jpg" alt="">
            <img class="owl-lazy" data-src="./img/sonate/sonate_pont.jpg" alt="">
            <img class="owl-lazy" data-src="./img/sonate/sonate_pont_2.jpg" alt="">
        </div>
    </div>

    <div class=container>
        <div class="row eco-vol-text">
            <div class="col-lg-12">
                <header class="text-center">
                    <h2>Qu'est ce qu'un éco-marin ?</h2>
                </header>
                <p>L’éco-marin est un marin de notre temps.
                    Il ne rejette aucun polluant et maîtrise ses rejets pour ne pas nuire au milieu ; il sensibilise et informe les acteurs (pros, ports, plaisanciers) 
                    pour initier et faciliter leurs démarches écologiques ; il utilise des produits (pour ses navigations et la maintenance) qui sont respectueux de
                    l’environnement ; il fait la chasse au gaspillage des ressources (eau douce, électricité, …) et ne pêche que ce dont il a besoin ; il fait attention
                    à son impact sur la biodiversité marine en navigation et au mouillage ; il connaît les réglementations et les zones protégées ; il ne dérange pas 
                    la vie des autres espèces lors de ses observations.<br>
                    À bord c’est aussi quelqu’un qui a soif de découverte, qui veut apprendre, qui s'investit dans toutes les tâches, qui transmet son savoir, qui
                    respecte les autres et qui a pour but d’aider à faire progresser le projet dont l’objectif est l’étude du milieu marin, sa protection,
                    sa valorisation et l’enrichissement personnel.

                </p>
            </div>
        </div>
        <div class="row eco-vol-text">
            <div class="col-lg-12">
                <header class="text-center">
                    <h2>La vie à bord de Sonate !<h2>
                </header>
                <p>Nous chercherons à varier les plaisirs en accueillant une multitude de projets scientifiques en faveur de la connaissance, de la défense de 
                    l’environnement, du développement durable, d’initiative Low Tech, du  zéro déchet…
                    Nous chercherons également à embarquer des acteurs et spécialistes de tous ces domaines.<br>
                    Les activités auxquelles nous participerons à bord ont pour but de nous offrir une expérience d’aventure simple, solidaire et sur le terrain à
                    bord d’un voilier écologique. C’est à travers l’optimisme, notre polyvalence et notre volonté que nous y parviendrons.
                </p>
            </div>
        </div>
        <div class="row eco-vol-text">
            <div class="col-lg-12">
                <header class="text-center">
                    <h2>Le mot du Captain :<h2>
                </header>
                <p class="font-italic">“Encore une fois, ce n’est pas une croisière apéro glandouille qui vous est proposée !<br><br>
                    La vocation du navire étant scientifique nous participerons à différentes missions très variées qui seront définies au fur et à mesure.<br>
                    Nous alternerons les navigations, de jour comme de nuit, et les escales où je privilégie les mouillages plutôt que les ports.  Nous adopterons 
                    vite le rythme des levers et couchers de soleil, des repas, des observations, des relevés…<br>
                    Il faudra faire du quart, exécuter les manœuvres, compléter le livre et le journal de bord, effectuer les réparations, la maintenance, le ménage,
                    la cuisine, la vaisselle…<br>
                    Pas de panique ! Vous ne serez pas seul à bord et apprendrez en pratiquant. Ça ne devrait pas être la mer à boire…<br>
                    Il y aura également, tous les jours, un peu de théorie sur beaucoup d’aspects utiles pour la navigation (calculs de nav, carte, sécurité, sûreté,
                        vocabulaire, réglage de voile, équilibre et stabilité du navire, manœuvres, admin, matelotage, …).<br>
                    Il y aura tout de même quelques apéros ;-)<br>
                    Je conseille de télécharger mon doc : “copain des mers, l’équipement.”<br>
                </p>
            </div>
        </div>

        <div class="row eco-vol-text">
            <div class="col-lg-12">
                <header class="text-center">
                    <h1>Combien ça coûte ? </h1>
                    </header>
                <p>La participation à verser à l’association est de 100€/j/pers ; qui vous fournira une attestation de dons. Cette attestation vous donne droit à une 
                déduction d’impôt de 66% de la somme totale versée.<br><br>
                Déduction fiscale :<br>
                Chaque don effectué à l'Association NACOMED ouvre droit à une déduction fiscale (pour les entreprises ou les personnes assujetties à l'impôt sur les sociétés
                ou sur le revenu en France).<br><br>
                Particuliers : <br>
                – Les particuliers peuvent s’engager individuellement. A ce titre, vous bénéficiez d’une déduction d’impôts de 66% des sommes versées pour votre don
                “mission” et votre adhésion, dans la limite de 20% du revenu imposable (article 200 du CGI). S’il y a excèdent, la somme est reportable sur les 5 
                nnées suivantes.<br><br>
                Entreprises : <br>
                – Pour une entreprise souhaitant effectuer un don ponctuel ou régulier, la déduction fiscale s’élève à 60% du don dans la limite de 0.5% du chiffre d’affaire de
                l’entreprise.<br>
                – Les Congés Solidaires sont un moyen pour les employeurs et leurs salariés de concrétiser leur engagement envers l’environnement. L’employeur finance, en partie
                ou intégralement, la mission embarquée d’un ou de plusieurs de ses salariés. Cette mission se déroule durant les congés du salarié (ou RTT). 60% des
                sommes versées (comprenant les frais de mission et l’adhésion) sont déductibles de l’impôt sur les sociétés, dans la limite de 0,5% du chiffre d’affaire 
                (article 238 bis du CGI).<br><br>
                Le navire étant en navigation et un maximum en mission, il est donc sujet aux aléas de la météo et d’autres imprévus, même si cela devrait bien se passer.<br>
                Votre participation vous servira donc à réserver des « jours embarqués ».<br>
                Ensemble nous réservons votre place à bord aux alentours de dates approximatives, en fonction des missions qui vous intéressent et des places vacantes à bord.<br>  
                Il vous faudra ensuite rejoindre par vos propres moyens le navire lors d’une de ses escales.<br>
                Nous serons toujours disponibles pour vous conseiller et vous aider autant que possible pour les réservations et les voyages (embarquement / débarquement).
                </p>
            </div>
        </div>

        <div class="row eco-vol-text">
            <div class="col-lg-12">
                <header class="text-center">
                    <h2>À quoi sert mon don ?<h2>
                </header>
                <p class="text-center">Cette participation sert à louer le navire, l’entretenir, effectuer les réparations, aux frais de fonctionnement, à la caisse de bord...<br>
                Mais aussi à participer au financement de missions scientifiques en leur fournissant un support (le navire) de terrain.
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 pdf-download">
                <header class="text-center">
                    <h3>Documents PDF à télécharger</h3>
                </header>
                <a class="pdf" href="./public/pdf/impératifs_embarquement.pdf" target="_blank">Impératifs pour embarquer</a>
                <a class="pdf" href="./public/pdf/monter_à_bord_A_Z.pdf" target="_blank">Comment monter à bord</a>
                <a class="pdf" href="./public/pdf/copains_des_mers.pdf" target="_blank">Les copains des mers : l'équipement</a>
                <a class="pdf" href="./public/pdf/carte_pratique_corse.pdf" target="_blank">Carte pratique de la Corse</a>
                <a class="pdf" href="./public/pdf/just_for_fun.pdf" target="_blank">Juste pour rire</a>
            </div>
        </div>
    </div>

    <div class="container boat-program">
        <div class="row">
            <div class="col-lg-12">
                <header class="text-center">
                    <h3>Programme du navire</h3>
                </header>

                <div class="table-responsive">
                    <table style="width: 100%"class="table_program text-center">
                        <thead>
                            <tr class="head">
                                <th>MOIS</th>
                                <th>SEMAINE</th>
                                <th>MISSION</th>
                                <th>DETAILS MISSION</th>
                                <th>LOCALISATION</th>
                                <th class="banets">NBRE DE BANNETTES DISPO.</th>
                                <th>REMARQUES</th>
                            <tr>
                        </thead>

                        <tbody>
                            <!-- tous les mois -->
                            <?php foreach($mont_prog as $month_name => $progs):?>
                                <tr>
                                    <td><?= $month_name;?></td>
                                    <?php foreach ($progs as $prog):?>
                                           <td><?= $prog['id'];?></td>
                                           <td><?= $prog['mission'];?></td>
                                           <td><?= $prog['details_mission'];?></td>
                                           <td><?= $prog['location'];?></td>
                                           <td><?= $prog['available_beds'];?></td>
                                           <td><?= $prog['comments'];?></td>
                                           <tr></tr>
                                           <td></td>
                                     <?php endforeach;?>
                                </tr>
                             <?php endforeach;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <?php foreach ($mapEvents as $me): ?>
        <div class="map_events">
            <input type="hidden" class="event_name" value="<?php echo $me->event_name(); ?>" />
            <input type="hidden" class="event_lat" value="<?php echo $me->event_lat(); ?>" />
            <input type="hidden" class="event_lng" value="<?php echo $me->event_lng(); ?>" />
            <input type="hidden" class="comments" value="<?php echo $me->event_comments(); ?>" />
            <input type="hidden" class="on_date" value="<?php echo $me->onboarding_date(); ?>" />
        </div>
    <?php endforeach;?>
    <div class="container onboard-events-map">
        <div class="row">
            <div class="col-lg-12 text-center">
                <header>
                    <h3>Carte des embarquements</h3>
                </header>
                <p class="font-italic">
                    Cliquez sur un marqueur pour afficher les informations d'embarquement (dates et lieux).
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div id="gmap" style="width:100%; height:600px; margin: 0 auto;"></div>
            </div>
        </div>
    </div>
</div>

<div><a id="header_link" href="#header">Retour en haut</a></div>

<?php $content = ob_get_clean(); ?>
<?php require('public/views/layoutFront.php'); ?>
    
<script src="./vendor/owl.carousel/owl.carousel.js"></script>

<!-- Google Map -->
<script async defer src="https://maps.googleapis.com/maps/api/js?key=<?php include('./config.php'); echo $apiKey; ?>&callback=initMap"></script>
<script src="./js/controllers/onboard.js"></script>
