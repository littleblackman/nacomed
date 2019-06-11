<?php
    require('./controllers/frontController.php');
    require('./controllers/adminController.php');

    if (!empty($_GET['action'])) {
        switch ($_GET['action']) {
            case 'getArticle':
                if (isset($_GET['article_id']) && $_GET['article_id'] > 0) {
                    getArtCom($_GET['article_id']);
                } else {
                    echo 'Valeur d\'id incorrect';
                }

            case 'displayHome':
                displayHome();
            break;

            case 'displayOnboard':
                displayOnBoard();
            break;

            case 'displayContact':
                displayContact();
            break;
           
            case 'displayNews':
                displayNews();
            break;

            case 'displayAdmin';
                displayAdmin();
            break;

            case 'login':
                displayLoginView();
            break;

            case 'addNews';
                session_start();
                $artTitle = trim($_POST['title']);
                $artContent = trim($_POST['content']);

                if (isset($_SESSION['user'])) {
                    if (!empty($artTitle) && !empty($artContent)) {
                        $artId = addNews($artTitle, $artContent, $_SESSION['user']);
                        echo $artId;
                    } else if (empty($artTitle) && empty($artContent)) {
                        echo 'failed';
                    } else if (empty($artTitle) && !empty($artContent)) {
                        echo 'title_missing';
                    } else if (!empty($artTitle) && empty($artContent)) {
                        echo 'content_missing';
                    } else {
                        echo 'erreur non gérée';
                    }
                } else {
                    displayLoginView();
                }
            break;

            case 'adminLogin':
            if (!empty($_POST['user']) && (!empty($_POST['password']))) {
                if (logUser($_POST['user'], $_POST['password']) == true) {
                    logUser($_POST['user'], $_POST['password']);
                    
                    session_start();
                    $_SESSION['user'] = $_POST['user'];
                    
                    echo 'success';
                    exit;
                } else {
                    echo 'failed';
                    exit;
                }
            }

            default:
                displayHome();
        }
    } else {
        displayHome();
    }


