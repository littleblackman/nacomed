<?php
    require('./controllers/frontController.php');
    require('./controllers/adminController.php');

    if (!empty($_GET['action'])) {
        switch ($_GET['action']) {
            case 'getArticle':
                if (isset($_GET['article_id']) && $_GET['article_id'] > 0) {
                    getArtCom($_GET['article_id']);
                    exit;
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

            case 'addComment':
                $content = trim($_POST['com_content']);
                $author = trim($_POST['com_author']);

                if (isset($_POST['art_id']) && $_POST['art_id'] > 0) {
                    if (!empty($content) && !empty($author)) {
                        echo 'success';
                        addComment($content, $author, $_POST['art_id']);
                    } else if (empty($author)) {
                        echo 'author_missing';
                    } else if (empty($content)) {
                        echo 'content_missing';
                    }
                } else {
                    echo 'id_error';
                }
            break;

            case 'reportCom':
                if ((isset($_GET['article_id']) && $_GET['article_id'] > 0) && isset($_GET['com_id'])) {
                    reportCom($_GET['article_id'], $_GET['com_id']);
                } else {
                    echo 'erreur sur article_id ou com_id';
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


