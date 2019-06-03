<?php
    require('./controllers/frontController.php');
    require('./controllers/adminController.php');

    if (!empty($_GET['action'])) {
        switch ($_GET['action']) {
            case 'displayHome':
                displayHome();
            break;

            case 'displayOnboard':
                displayOnboard();
            break;
            
            default:
                displayHome();
        }
    } else {
        displayHome();
    }


