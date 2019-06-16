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
            
            /* COMMENTAIRES */
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

            /* BACKOFFICE */


            /* VUES ADMIN */
            /* DASHBOARD */
            case 'displayAdmin':
                session_start();
                if (isset($_SESSION['user'])) {
                    displayAdmin();
                } else {
                    displayLoginView();
                }
            break;

            /* MAP */

            case 'displayMapMgmt':
                session_start();
                if (isset($_SESSION['user'])) {
                    displayMgmtMap();
                } else {
                    displayLoginView();
                }
            break;

            case 'displayMapEvents':
                session_start();
                if (isset($_SESSION['user'])) {
                    displayMapEvents();
                } else {
                    displayLoginView();
                }
            break;

            case 'addEvent':
                session_start();
                $name = $_POST['name'];
                $lat = $_POST['lat'];
                $lng = $_POST['lng'];

                if (isset($_SESSION['user'])) {
                    if (!empty($name) && !empty($lat) && !empty($lng)) {
                        addEvent($name, $lat, $lng);
                    } else if (empty($name)) {
                        echo 'name_missing';
                        exit;
                    } else if (empty($lat)) {
                        echo 'lat_missing';
                        exit;
                    } else if (empty($lng)) {
                        echo 'lng_missing';
                        exit;
                    } else {
                        echo 'fatal_error';
                        exit;
                    }
                } else {
                    displayLoginView();
                }
            break;


            /* LOGIN */
            case 'login':
                displayLoginView();
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

            case 'signOut':
                session_start();
                if (isset($_SESSION['user'])) {
                    session_destroy();
                }
            break;

            /* GESTION DES NEWS */
            case 'addNews':
                session_start();
                $artTitle = trim($_POST['title']);
                $artContent = trim($_POST['content']);

                if (isset($_SESSION['user'])) {
                    if (!empty($artTitle) && !empty($artContent) && !empty($_FILES)) {
                        $img = $_FILES['img'];
                        $url_img = "img/news/".$img['name'];
                        $ext = strtolower(substr($img['name'],-3));
                        $allow_ext = array("jpg",'png','gif');
                        if(in_array($ext,$allow_ext)) {
                            move_uploaded_file($img['tmp_name'],"img/news/".$img['name']);
                            $artId = addNews($artTitle, $artContent, $url_img, $_SESSION['user']);
                            echo $artId;
                        } else {
                            echo "Votre fichier n'est pas une image";
                        }
                    } else if (empty($artTitle) && empty($artContent)) {
                        echo 'failed';
                        exit;
                    } else if (empty($artTitle) && !empty($artContent)) {
                        echo 'title_missing';
                        exit;
                    } else if (!empty($artTitle) && empty($artContent)) {
                        echo 'content_missing';
                        exit;
                    } else {
                        echo 'erreur non gérée';
                        exit;
                    }
                } else {
                    displayLoginView();
                }
            break;

            case 'listArticlesToEdit':
                session_start();
                if (isset($_SESSION['user'])) {
                    listArticlesToEdit();
                } else {
                    displayLoginView();
                }
            break;

            case 'editArticle':
                session_start();
                if (isset($_SESSION['user'])) {
                    if (isset($_GET['article_id']) && $_GET['article_id'] > 0) {
                        editArticle($_GET['article_id']);
                    } else {
                        echo 'Erreur d\'id d\'article : aucun id envoyé ou id inexistant';
                    }
                } else {
                    displayLoginView();
                }
            break;

            case 'updateArticle':
                session_start();
                if (isset($_SESSION['user'])) {
                    if (isset($_GET['article_id']) && $_GET['article_id'] > 0) {
                        $title = trim($_POST['title']);
                        $content = trim($_POST['content']);

                        if (!empty($title) && !empty($content)) {
                            updateArticle($title, $content, $_GET['article_id']);
                            echo $_GET['article_id'];
                        } else if (empty($title) && empty($content)) {
                            echo 'failed';
                        } else if (empty($title) && !empty($content)) {
                            echo 'title_missing';
                        } else if (!empty($title) && empty($content)) {
                            echo 'content_missing';
                        } else {
                            echo 'erreur non gérée';
                        }
                    }
                } else {
                    displayLoginView();
                }
            break;

            case "deleteArticle":
                if (isset($_GET['article_id']) && $_GET['article_id'] > 0) {
                    deleteArticle($_GET['article_id']);
                }
            break;

            default:
                displayHome();
        }
    } else {
        displayHome();
    }


