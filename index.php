<?php
    require('./vendor/autoload.php');
    require('./controllers/frontController.php');
    require('./controllers/adminController.php');

    try {
        if (!empty($_GET['action'])) {
            switch ($_GET['action']) {
                case 'getArticle':
                    if (isset($_GET['article_id']) && $_GET['article_id'] > 0) {
                        getArtCom($_GET['article_id']);
                        exit;
                    } else {
                        throw new Exception('Erreur d\'id de news');
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

                case 'displaySupport':
                    displaySUpport();
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
                        throw new Exception('Erreur dans la récupération d\'id de la news');
                    }
                break;

                case 'reportCom':
                    if (isset($_GET['article_id']) && $_GET['article_id'] > 0) {
                        if (isset($_GET['com_id'])) {
                            reportCom($_GET['article_id'], $_GET['com_id']);
                        } else {
                            throw new Exception('Erreur d\'id de commentaire');
                        }
                    } else {
                        throw new Exception('Erreur d\'id de news');
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
                    if (isset($_SESSION['user'])) {
                            if ($_POST['com_id']) {
                                deleteCom($_POST['com_id']);
                                echo 'success';
                            } else {
                                throw new Exception('Erreur de récupération d\'id de commentaire');
                            }
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
                    $com = $_POST['comments'];

                    if (isset($_SESSION['user'])) {
                        if (!empty($name) && !empty($lat) && !empty($lng) && !empty($date)) {
                            addEvent($name, $lat, $lng, $date, $com);
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
                            throw new Exception('Erreur fatale');
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
                $com = $_POST['comments'];

                    if (isset($_SESSION['user'])) {
                        if (!empty($name) && !empty($lat) && !empty($lng) && !empty($date)) {
                            updateEvent($name, $lat, $lng, $date, $com, $id);
                        } else if (empty($name)) {
                            echo 'name_missing';
                        } else if (empty($lat)) {
                            echo 'lat_missing';
                        } else if (empty($lng)) {
                            echo 'lng_missing';
                        } else if (empty($date)) {
                            echo 'date_missing';
                        } else {
                            throw new Exception('Erreur fatale');
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
                            if ($month === 'Janvier') {
                                if ($week === '1') {
                                    addProgJanInfos($mission, $details_mission, $location, $available_beds, $comments, $week);
                                    echo 'Jan1';
                                } else if ($week === '2') {
                                    addProgJanInfos($mission, $details_mission, $location, $available_beds, $comments, $week);
                                    echo 'Jan2';
                                } else if ($week === '3') {
                                    addProgJanInfos($mission, $details_mission, $location, $available_beds, $comments, $week);
                                    echo 'Jan3';
                                } else if ($week === '4') {
                                    addProgJanInfos($mission, $details_mission, $location, $available_beds, $comments, $week);
                                    echo 'Jan4';
                                } else {
                                    throw new Exception('Erreur de numéro de semaine pour janvier');
                                }
                            } else if ($month === 'Février') {
                                if ($week === '1') {
                                    addProgFebInfos($mission, $details_mission, $location, $available_beds, $comments, $week);
                                    echo 'Feb1';
                                } else if ($week === '2') {
                                    addProgFebInfos($mission, $details_mission, $location, $available_beds, $comments, $week);
                                    echo 'Feb2';
                                } else if ($week === '3') {
                                    addProgFebInfos($mission, $details_mission, $location, $available_beds, $comments, $week);
                                    echo 'Feb3';
                                } else if ($week === '4') {
                                    addProgFebInfos($mission, $details_mission, $location, $available_beds, $comments, $week);
                                    echo 'Feb4';
                                } else {
                                    throw new Exception('Erreur de numéro de semaine pour février');
                                }
                            } else if ($month === 'Mars') {
                                if ($week === '1') {
                                    addProgMarInfos($mission, $details_mission, $location, $available_beds, $comments, $week);
                                    echo 'Mar1';
                                } else if ($week === '2') {
                                    addProgMarInfos($mission, $details_mission, $location, $available_beds, $comments, $week);
                                    echo 'Mar2';
                                } else if ($week === '3') {
                                    addProgMarInfos($mission, $details_mission, $location, $available_beds, $comments, $week);
                                    echo 'Mar3';
                                } else if ($week === '4') {
                                    addProgMarInfos($mission, $details_mission, $location, $available_beds, $comments, $week);
                                    echo 'Mar4';
                                } else {
                                    throw new Exception('Erreur de numéro de semaine pour mars');
                                }
                            } else if ($month === 'Avril') {
                                if ($week === '1') {
                                    addProgAprInfos($mission, $details_mission, $location, $available_beds, $comments, $week);
                                    echo 'Apr1';
                                } else if ($week === '2') {
                                    addProgAprInfos($mission, $details_mission, $location, $available_beds, $comments, $week);
                                    echo 'Apr2';
                                } else if ($week === '3') {
                                    addProgAprInfos($mission, $details_mission, $location, $available_beds, $comments, $week);
                                    echo 'Apr3';
                                } else if ($week === '4') {
                                    addProgAprInfos($mission, $details_mission, $location, $available_beds, $comments, $week);
                                    echo 'Apr4';
                                } else {
                                    throw new Exception('Erreur de numéro de semaine pour avril');
                                }
                            } else if ($month === 'Mai') {
                                if ($week === '1') {
                                    addProgMayInfos($mission, $details_mission, $location, $available_beds, $comments, $week);
                                    echo 'May1';
                                } else if ($week === '2') {
                                    addProgMayInfos($mission, $details_mission, $location, $available_beds, $comments, $week);
                                    echo 'May2';
                                } else if ($week === '3') {
                                    addProgMayInfos($mission, $details_mission, $location, $available_beds, $comments, $week);
                                    echo 'May3';
                                } else if ($week === '4') {
                                    addProgMayInfos($mission, $details_mission, $location, $available_beds, $comments, $week);
                                    echo 'May4';
                                } else {
                                    throw new Exception('Erreur de numéro de semaine pour mai');
                                }
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
                                    throw new Exception('Erreur de numéro de semaine pour juin');
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
                                    throw new Exception('Erreur de numéro de semaine pour juillet');
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
                                    addProgAugInfos($mission, $details_mission, $location, $available_beds, $comments, $week);
                                    echo 'Aug4';
                                } else {
                                    throw new Exception('Erreur de numéro de semaine pour aout');
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
                                    throw new Exception('Erreur de numéro de semaine pour septembre');
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
                                    throw new Exception('Erreur de numéro de semaine pour octobre');
                                }
                            } else if ($month === 'Novembre') {
                                    if ($week === '1') {
                                        addProgNovInfos($mission, $details_mission, $location, $available_beds, $comments, $week);
                                        echo 'Nov1';
                                    } else if ($week === '2') {
                                        addProgNovInfos($mission, $details_mission, $location, $available_beds, $comments, $week);
                                        echo 'Nov2';
                                    } else if ($week === '3') {
                                        addProgNovInfos($mission, $details_mission, $location, $available_beds, $comments, $week);
                                        echo 'Nov3';
                                    } else if ($week === '4') {
                                        addProgNovInfos($mission, $details_mission, $location, $available_beds, $comments, $week);
                                        echo 'Nov4';
                                    } else {
                                        throw new Exception('Erreur de numéro de semaine pour novembre');
                                    }
                                } else if ($month === 'Décembre') {
                                    if ($week === '1') {
                                        addProgDecInfos($mission, $details_mission, $location, $available_beds, $comments, $week);
                                        echo 'Dec1';
                                    } else if ($week === '2') {
                                        addProgDecInfos($mission, $details_mission, $location, $available_beds, $comments, $week);
                                        echo 'Dec2';
                                    } else if ($week === '3') {
                                        addProgDecInfos($mission, $details_mission, $location, $available_beds, $comments, $week);
                                        echo 'Dec3';
                                    } else if ($week === '4') {
                                        addProgDecInfos($mission, $details_mission, $location, $available_beds, $comments, $week);
                                        echo 'Dec4';
                                    } else {
                                        throw new Exception('Erreur de numéro de semaine pour décembre');
                                    }
                        } else {
                            throw new Exception('Erreur de mois dans la fonction d\'ajout d\'informations au programme du navire');
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
                    $img = $_FILES['img'];
                    $url_video = $_POST['video'];


                    if (isset($_SESSION['user'])) {
                        if (!empty($artTitle) && !empty($artContent)) {
                            if (!empty($img['name'])) {
                                if (!empty($url_video)) {
                                    $url_img = "img/news/".$img['name'];
                                    $ext = strtolower(substr($img['name'],-3));
                                    $allow_ext = array('jpg','png','gif');
                                    if(in_array($ext,$allow_ext)) {
                                        move_uploaded_file($img['tmp_name'],"img/news/".$img['name']);
                                        $artId = addNews($artTitle, $artContent, $url_img, $url_video, $_SESSION['user']);
                                        echo $artId;
                                        exit;
                                    } else {
                                        throw new Exception('Votre image n\'est pas au bon format, seuls sont acceptés les .jpg, .png et .gif');
                                    }
                                } else {
                                    $url_img = "img/news/".$img['name'];
                                    $ext = strtolower(substr($img['name'],-3));
                                    $allow_ext = array('jpg','png','gif');
                                    if(in_array($ext,$allow_ext)) {
                                        move_uploaded_file($img['tmp_name'],"img/news/".$img['name']);
                                        $artId = addNewsNoVideo($artTitle, $artContent, $url_img, $_SESSION['user']);
                                        echo $artId;
                                        exit;
                                    } else {
                                        throw new Exception('Votre image n\'est pas au bon format, seuls sont acceptés les .jpg, .png et .gif');
                                    }    
                                }
                            } else if (empty($img['name'])) {
                                if (empty($url_video)) {
                                    $artId = addNewsNoImgNoVideo($artTitle, $artContent, $_SESSION['user']);
                                    echo $artId;
                                    exit;
                                } else {
                                    $artId = addNewsVideo($artTitle, $artContent, $url_video, $_SESSION['user']);
                                    echo $artId;
                                    exit;
                                }
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
                            throw new Exception('Erreur fatale. Veuillez contacter votre webmaster.');
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
                            throw new Exception('Erreur d\'id de news. Veuillez contacter votre webmaster');
                        }
                    } else {
                        displayLoginView();
                    }
                break;

                case 'updateArticle':
                    session_start();
                    $artId = $_POST['art_id'];

                    if (isset($_SESSION['user'])) {
                        if (isset($artId) && $artId > 0) {
                            $artTitle = trim($_POST['title']);
                            $artContent = trim($_POST['content']);
                            $img = $_FILES['img'];
                            $url_video = $_POST['video'];

                            if (!empty($artTitle) && !empty($artContent)) {
                                if (!empty($img['name'])) {
                                    if (!empty($url_video)) {
                                        $url_img = "img/news/".$img['name'];
                                        $ext = strtolower(substr($img['name'],-3));
                                        $allow_ext = array('jpg','png','gif');
                                        if(in_array($ext,$allow_ext)) {
                                            move_uploaded_file($img['tmp_name'],"img/news/".$img['name']);
                                            updateArticle($artTitle, $artContent, $url_img, $url_video, $artId);
                                            echo $artId;
                                            exit;
                                        } else {
                                            throw new Exception('Votre image n\'est pas au bon format, seuls sont acceptés les .jpg, .png et .gif');
                                        }
                                    } else {
                                        $url_img = "img/news/".$img['name'];
                                        $ext = strtolower(substr($img['name'],-3));
                                        $allow_ext = array('jpg','png','gif');
                                        if(in_array($ext,$allow_ext)) {
                                            move_uploaded_file($img['tmp_name'],"img/news/".$img['name']);
                                            updateArticleNoVideo($artTitle, $artContent, $url_img, $artId);
                                            echo $artId;
                                            exit;
                                        } else {
                                            throw new Exception('Votre image n\'est pas au bon format, seuls sont acceptés les .jpg, .png et .gif');
                                        }    
                                    }
                            } else if (empty($img['name'])) {
                                if (empty($url_video)) {
                                    updateArticleNoImgNoVideo($artTitle, $artContent, $artId);
                                    echo $artId;
                                    exit;
                                } else {
                                    updateArticleVideo($artTitle, $artContent, $url_video, $artId);
                                    echo $artId;
                                    exit;
                                }
                            }
                            } else if (empty($artTitle) && empty($artContent)) {
                                echo 'failed';
                            } else if (empty($artTitle) && !empty($artContent)) {
                                echo 'title_missing';
                            } else if (!empty($artTitle) && empty($artContent)) {
                                echo 'content_missing';
                            } else {
                                throw new Exception('Erreur fatale. Veuillez contacter votre webmaster.');
                            }
                        } else {
                            throw new Exception('Erreur dans la récupération de l\'id de la news');
                    }} else {
                        displayLoginView();
                    }
                break;

                case "deleteArticle":
                    if (isset($_GET['article_id']) && $_GET['article_id'] > 0) {
                        deleteArticle($_GET['article_id']);
                    } else {
                        throw new Exception('Erreur d\'id de news. Veuillez contacter votre webmaster.');
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
    } catch(Exception $e) {
        $errorMessage = $e->getMessage();
        require('./public/views/frontend/errorView.php');
    }


