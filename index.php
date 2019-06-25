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

            /* COMMENTAIRES SIGNALES */

            case 'displayRepComs':
                session_start();
                if (isset($_SESSION['user'])) {
                    getReportedComs();
                } else {
                    displayLoginView();
                }
            break;

            case 'deleteCom':
                session_start();
                if (isset($_SESSION['user']) && isset($_POST['com_id'])) {
                    deleteCom($_POST['com_id']);
                    echo 'success';
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

            case 'listMapEvents':
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
                $date = $_POST['on_date'];

                if (isset($_SESSION['user'])) {
                    if (!empty($name) && !empty($lat) && !empty($lng) && !empty($date)) {
                        addEvent($name, $lat, $lng, $date);
                    } else if (empty($name)) {
                        echo 'name_missing';
                        exit;
                    } else if (empty($lat)) {
                        echo 'lat_missing';
                        exit;
                    } else if (empty($lng)) {
                        echo 'lng_missing';
                        exit;
                    } else if (empty($date)) {
                        echo 'date_missing';
                        exit;
                    } else {
                        echo 'fatal_error';
                        exit;
                    }
                } else {
                    displayLoginView();
                }
            break;

            case 'displayUpdateView':
                session_start();
                $id = $_GET['event_id'];

                if (isset($_SESSION['user'])) {
                    displayEventUpdateView($id);
                    exit;
                } else {
                    displayLoginView();
                }
            break;

            case 'updateEvent':
            session_start();
            $name = $_POST['name'];
            $lat = $_POST['lat'];
            $lng = $_POST['lng'];
            $date = $_POST['on_date'];
            $id = $_POST['event_id'];

                if (isset($_SESSION['user'])) {
                    if (!empty($name) && !empty($lat) && !empty($lng) && !empty($date)) {
                        updateEvent($name, $lat, $lng, $date, $id);
                    } else if (empty($name)) {
                        echo 'name_missing';
                    } else if (empty($lat)) {
                        echo 'lat_missing';
                    } else if (empty($lng)) {
                        echo 'lng_missing';
                    } else if (empty($date)) {
                        echo 'date_missing';
                    } else {
                        echo 'fatal_error';
                    }
                } else {
                    displayLoginView();
                }
            break;

            case 'deleteEvent':
            session_start();
            if (isset($_SESSION['user'])) {
                deleteEvent($_POST['event_id']);
            } else {
                displayLoginView();
            }
            break;
            
            /* GESTIONNAIRE PROGRAMME BATEAU */

            case 'addProgInfos':
                session_start();

                $month = $_POST['month'];
                $week = $_POST['week'];

                $mission = $_POST['mission'];
                $details_mission = $_POST['details-mission'];
                $location = $_POST['location'];
                $available_beds = $_POST['available-beds'];
                $comments = $_POST['comments'];

                if (isset($_SESSION['user'])) {
                    if (empty($mission) && empty($details_mission) && empty($location) && empty($available_beds) && empty($comments)) {
                        echo 'missing_infos';
                    } else {
                        if ($month === 'Mai') {
                            if ($week === '3') {
                                addProgMayInfos($mission, $details_mission, $location, $available_beds, $comments, $week);
                                echo 'May3';
                            } else if ($week === '4') {
                                addProgMayInfos($mission, $details_mission, $location, $available_beds, $comments, $week);
                                echo 'May4';
                            } else echo 'badMayWeek';
                        } else if ($month === 'Juin') {
                            if ($week === '1') {
                                addProgJunInfos($mission, $details_mission, $location, $available_beds, $comments, $week);
                                echo 'Jun1';
                            } else if ($week === '2') {
                                addProgJunInfos($mission, $details_mission, $location, $available_beds, $comments, $week);
                                echo 'Jun2';
                            } else if ($week === '3') {
                                addProgJunInfos($mission, $details_mission, $location, $available_beds, $comments, $week);
                                echo 'Jun3';
                            } else if ($week === '4') {
                                addProgJunInfos($mission, $details_mission, $location, $available_beds, $comments, $week);
                                echo 'Jun4';
                            } else {
                                echo 'badJuneWeek';
                            }
                        } else if ($month === 'Juillet') {
                            if ($week === '1') {
                                addProgJulInfos($mission, $details_mission, $location, $available_beds, $comments, $week);
                                echo 'Jul1';
                            } else if ($week === '2') {
                                addProgJulInfos($mission, $details_mission, $location, $available_beds, $comments, $week);
                                echo 'Jun2';
                            } else if ($week === '3') {
                                addProgJulInfos($mission, $details_mission, $location, $available_beds, $comments, $week);
                                echo 'Jul3';
                            } else if ($week === '4') {
                                addProgJulInfos($mission, $details_mission, $location, $available_beds, $comments, $week);
                                echo 'Jul4';
                            } else {
                                echo 'badJulyWeek';
                            }
                        } else if ($month === 'Aout') {
                            if ($week === '1') {
                                addProgAugInfos($mission, $details_mission, $location, $available_beds, $comments, $week);
                                echo 'Aug1';
                            } else if ($week === '2') {
                                addProgAugInfos($mission, $details_mission, $location, $available_beds, $comments, $week);
                                echo 'Aug2';
                            } else if ($week === '3') {
                                addProgAugInfos($mission, $details_mission, $location, $available_beds, $comments, $week);
                                echo 'Aug3';
                            } else if ($week === '4') {
                                addProgJulInfos($mission, $details_mission, $location, $available_beds, $comments, $week);
                                echo 'Aug4';
                            } else {
                                echo 'badAugWeek';
                            }
                        } else if ($month === 'Septembre') {
                            if ($week === '1') {
                                addProgSepInfos($mission, $details_mission, $location, $available_beds, $comments, $week);
                                echo 'Sep1';
                            } else if ($week === '2') {
                                addProgSepInfos($mission, $details_mission, $location, $available_beds, $comments, $week);
                                echo 'Sep2';
                            } else if ($week === '3') {
                                addProgSepInfos($mission, $details_mission, $location, $available_beds, $comments, $week);
                                echo 'Sep3';
                            } else if ($week === '4') {
                                addProgSepInfos($mission, $details_mission, $location, $available_beds, $comments, $week);
                                echo 'Sep4';
                            } else {
                                echo 'badSepWeek';
                            } 
                        } else if ($month === 'Octobre') {
                            if ($week === '1') {
                                addProgOctInfos($mission, $details_mission, $location, $available_beds, $comments, $week);
                                echo 'Oct1';
                            } else if ($week === '2') {
                                addProgOctInfos($mission, $details_mission, $location, $available_beds, $comments, $week);
                                echo 'Oct2';
                            } else if ($week === '3') {
                                addProgOctInfos($mission, $details_mission, $location, $available_beds, $comments, $week);
                                echo 'Oct3';
                            } else if ($week === '4') {
                                addProgOctInfos($mission, $details_mission, $location, $available_beds, $comments, $week);
                                echo 'Oct4';
                            } else {
                                echo 'badOctWeek';
                            }
                    } else {
                        echo 'badMonth';
                    }}   
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

            case 'displayNewsMgmt':
                session_start();
                if (isset($_SESSION['user'])) {
                    displayNewsMgmt();
                } else {
                    displayLoginView();
                }
            break;

            case 'displayNewsCreation':
                session_start();
                if (isset($_SESSION['user'])) {
                    displayNewsCreation();
                } else {
                    displayLoginView();
                }
            break;

            case 'addNews':
                session_start();
                $artTitle = trim($_POST['title']);
                $artContent = trim($_POST['content']);

                if (isset($_SESSION['user'])) {
                    if (!empty($artTitle) && !empty($artContent)) {
                        $img = $_FILES['img'];
                        $url_img = "img/news/".$img['name'];
                        $ext = strtolower(substr($img['name'],-3));
                        $allow_ext = array("jpg",'png','gif');
                        if(in_array($ext,$allow_ext)) {
                            move_uploaded_file($img['tmp_name'],"img/news/".$img['name']);
                            $artId = addNews($artTitle, $artContent, $url_img, $_SESSION['user']);
                            echo $artId;
                            exit;
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
                $art_id = $_POST['art_id'];

                if (isset($_SESSION['user'])) {
                    if (isset($art_id) && $art_id > 0) {
                        $title = trim($_POST['title']);
                        $content = trim($_POST['content']);

                        if (!empty($title) && !empty($content)) {
                        $img = $_FILES['img'];
                        $url_img = "img/news/".$img['name'];
                        $ext = strtolower(substr($img['name'],-3));
                        $allow_ext = array("jpg",'png','gif');
                        if(in_array($ext,$allow_ext)) {
                            move_uploaded_file($img['tmp_name'],"img/news/".$img['name']);
                            $artId = updateArticle($title, $content, $url_img, $art_id);
                            echo $art_id;
                        } else {
                            echo "Votre fichier n'est pas une image";
                        }
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

            /* GESTION DU PROGRAMME DU BATEAU */
            case 'displayProgMgmt':
                session_start();
                if (isset($_SESSION['user'])) {
                    displayProgMgmt();
                    exit;
                } else {
                    displayLoginView();
                }

            default:
                displayHome();
        }
    } else {
        displayHome();
    }


