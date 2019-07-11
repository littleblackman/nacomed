<?php
    require('./vendor/autoload.php');
    
    use App\Articles;
    use App\Program;
    use App\Comments;
    use App\Map;
    use App\Users;

/* Liste des news à éditer */
function listArticlesToEdit() {
    try {
        $db = setDb();
        $articlesManager = new App\Articles\ArticlesManager($db);    
        $articles = $articlesManager->listArticles();
        require('./public/views/backend/newsEditionView.php');
    } catch(Exception $e) {
        $errorMessage = $e->getMessage();
        require('./public/views/frontend/errorView.php');
    }
}

/* Ajouter une news sans vidéo/sans image */
function addNewsNoImgNoVideo($art_title, $art_content, $art_author) {
    try {
        $db = setDb();
        $articlesManager = new App\Articles\ArticlesManager($db);
        $article = $articlesManager->addNewsNoImgNoVideo($art_title, $art_content, $art_author);
        $articleId = $article->art_id();
        return $articleId;
        require('./public/views/backend/newsCreationView.php');
    } catch(Exception $e) {
        $errorMessage = $e->getMessage();
        require('./public/views/frontend/errorView.php');
    }
}

/* Ajouter une news avec image/ sans vidéo */
function addNewsNoVideo($art_title, $art_content, $url_img, $art_author) {
    try {
        $db = setDb();
        $articlesManager = new App\Articles\ArticlesManager($db);
        $article = $articlesManager->addNewsNoVideo($art_title, $art_content, $url_img, $art_author);
        $articleId = $article->art_id();
        return $articleId;
        require('./public/views/backend/newsCreationView.php');
    } catch(Exception $e) {
        $errorMessage = $e->getMessage();
        require('./public/views/frontend/errorView.php');
    }
}

/* Ajouter une news avec vidéo / sans image */
function addNewsVideo($art_title, $art_content, $url_video, $art_author) {
    try {
        $db = setDb();
        $articlesManager = new App\Articles\ArticlesManager($db);
        $article = $articlesManager->addNewsVideo($art_title, $art_content, $url_video, $art_author);
        $articleId = $article->art_id();
        return $articleId;
        require('./public/views/backend/newsCreationView.php');
    } catch(Exception $e) {
        $errorMessage = $e->getMessage();
        require('./public/views/frontend/errorView.php');
    }
}

/* Ajouter une news avec vidéo / avec image */
function addNews($art_title, $art_content, $url_img, $url_video, $art_author) {
    try {
        $db = setDb();
        $articlesManager = new App\Articles\ArticlesManager($db);
        $article = $articlesManager->addNews($art_title, $art_content, $url_img, $url_video, $art_author);
        $articleId = $article->art_id();
        return $articleId;
        require('./public/views/backend/newsCreationView.php');
    } catch(Exception $e) {
        $errorMessage = $e->getMessage();
        require('./public/views/frontend/errorView.php');
    }
}

/* Récupérer une news à éditer */
function editArticle($article_id) {
    try {
        $db = setDb();
        $articlesManager = new App\Articles\ArticlesManager($db);
        $article = $articlesManager->getArticle($article_id);
        require('./public/views/backend/newsUpdateView.php');
    } catch(Exception $e) {
        $errorMessage = $e->getMessage();
        require('./public/views/frontend/errorView.php');
    }
}

/* Mettre à jour une news avec vidéo / sans image */
function updateArticleNoVideo($art_title, $art_content, $url_img, $art_id) {
    try {
        $db = setDb();
        $articlesManager = new App\Articles\ArticlesManager($db);
        $articleToUpdate = $articlesManager->updateArticleNoVideo($art_title, $art_content, $url_img, $art_id);
        return $articleToUpdate;
        require('./public/views/frontend/newsView.php');
    } catch(Exception $e) {
        $errorMessage = $e->getMessage();
        require('./public/views/frontend/errorView.php');
    }
}

/* Mettre à jour une news sans vidéo / sans image */
function updateArticleNoImgNoVideo($art_title, $art_content, $art_id) {
    try {
        $db = setDb();
        $articlesManager = new App\Articles\ArticlesManager($db);
        $articleToUpdate = $articlesManager->updateArticleNoImgNoVideo($art_title, $art_content, $art_id);
        return $articleToUpdate;
        require('./public/views/frontend/newsView.php');
    } catch(Exception $e) {
        $errorMessage = $e->getMessage();
        require('./public/views/frontend/errorView.php');
    }
}

/* Mettre à jour une news avec vidéo / sans image */
function updateArticleVideo($art_title, $art_content, $url_video, $art_id) {
    try {
        $db = setDb();
        $articlesManager = new App\Articles\ArticlesManager($db);
        $articleToUpdate = $articlesManager->updateArticleVideo($art_title, $art_content, $url_video, $art_id);
        return $articleToUpdate;
        require('./public/views/frontend/newsView.php');
    } catch(Exception $e) {
        $errorMessage = $e->getMessage();
        require('./public/views/frontend/errorView.php');
    }
}

/* Mettre à jour une news avec vidéo / avec image */
function updateArticle($art_title, $art_content, $url_img, $url_video, $art_id) {
    try {
        $db = setDb();
        $articlesManager = new App\Articles\ArticlesManager($db);
        $articleToUpdate = $articlesManager->updateArticle($art_title, $art_content, $url_img, $url_video, $art_id);
        return $articleToUpdate;
        require('./public/views/frontend/newsView.php');
    } catch(Exception $e) {
        $errorMessage = $e->getMessage();
        require('./public/views/frontend/errorView.php');
    }
}

/* Supprimer une news */
function deleteArticle($article_id) {
    try {
        $db = setDb();
        $articlesManager = new App\Articles\ArticlesManager($db);
        $commentsManager = new App\Comments\CommentsManager($db);
        $comsToDelete = $commentsManager->deleteComsFromArticle($article_id);
        $articleToDelete = $articlesManager->deleteArticle($article_id);
        require('./views/frontend/articleView.php');
    } catch(Exception $e) {
        $errorMessage = $e->getMessage();
        require('./public/views/frontend/errorView.php');
    }
}

/* Ajouter un évènement sur la map */
function addEvent($name, $lat, $lng, $date, $com) {
    try {
        $db = setDb();
        $mapManager = new App\Map\MapManager($db);
        $eventToAdd = $mapManager->addEvent($name, $lat, $lng, $date, $com);
        require('./public/views/backend/mapManagementView.php');
    } catch(Exception $e) {
        $errorMessage = $e->getMessage();
        require('./public/views/frontend/errorView.php');
    }
}

/* Récupérer tous les évènements sur la map */
function displayMapEvents() {
    try {
        $db = setDb();
        $mapManager = new App\Map\MapManager($db);
        $mapEvents = $mapManager->displayEvents();
        require('./public/views/backend/mapEventsView.php');
    } catch(Exception $e) {
        $errorMessage = $e->getMessage();
        require('./public/views/frontend/errorView.php');
    }
}

/* Afficher un évènement que l'on va mettre à jour */
function displayEventUpdateView($id) {
    try {
        $db = setDb();
        $mapManager = new App\Map\MapManager($db);
        $event = $mapManager->displayEditedEvent($id);
        require('./public/views/backend/eventUpdateView.php');
    } catch(Exception $e) {
        $errorMessage = $e->getMessage();
        require('./public/views/frontend/errorView.php');
    }
}

/* Mettre à jour un évènement */
function updateEvent($name, $lat, $lng, $date, $com, $id) {
    try {
        $db = setDb();
        $mapManager = new App\Map\MapManager($db);
        $eventToUpdate = $mapManager->updateEvent($name, $lat, $lng, $date, $com, $id);
        require('./public/views/backend/eventUpdateView.php');
    } catch(Exception $e) {
        $errorMessage = $e->getMessage();
        require('./public/views/frontend/errorView.php');
    }
}

/* Supprimer un évènement */
function deleteEvent($id) {
    try {
        $db = setDb();
        $mapManager = new App\Map\MapManager($db);
        $eventToDel = $mapManager->deleteEvent($id);
        return $eventToDel;
        require('./public/views/backend/mapEventsView.php');
    } catch(Exception $e) {
        $errorMessage = $e->getMessage();
        require('./public/views/frontend/errorView.php');
    }
}

/* Ajouter les informations de programme du navire pour janvier */
function addProgJanInfos($mission, $details_mission, $location, $available_beds, $comments, $week) {
    try {
        $db = setDb();
        $progManager = new App\Program\ProgramManager($db);
        $progManager->addProgJan($mission, $details_mission, $location, $available_beds, $comments, $week);
        require('./public/views/backend/programManagementView.php');
    } catch(Exception $e) {
        $errorMessage = $e->getMessage();
        require('./public/views/frontend/errorView.php');
    }
}

/* Ajouter les information de programme du navire pour février */
function addProgFebInfos($mission, $details_mission, $location, $available_beds, $comments, $week) {
    try {
        $db = setDb();
        $progManager = new App\Program\ProgramManager($db);
        $progManager->addProgFeb($mission, $details_mission, $location, $available_beds, $comments, $week);
        require('./public/views/backend/programManagementView.php');
    } catch(Exception $e) {
        $errorMessage = $e->getMessage();
        require('./public/views/frontend/errorView.php');
    }
}

/* Ajouter ... pour mars */
function addProgMarInfos($mission, $details_mission, $location, $available_beds, $comments, $week) {
    try {
        $db = setDb();
        $progManager = new App\Program\ProgramManager($db);
        $progManager->addProgMar($mission, $details_mission, $location, $available_beds, $comments, $week);
        require('./public/views/backend/programManagementView.php');
    } catch(Exception $e) {
        $errorMessage = $e->getMessage();
        require('./public/views/frontend/errorView.php');
    }
}

/* Ajouter ... pour avril */
function addProgAprInfos($mission, $details_mission, $location, $available_beds, $comments, $week) {
    try {
        $db = setDb();
        $progManager = new App\Program\ProgramManager($db);
        $progManager->addProgApr($mission, $details_mission, $location, $available_beds, $comments, $week);
        require('./public/views/backend/programManagementView.php');
    } catch(Exception $e) {
        $errorMessage = $e->getMessage();
        require('./public/views/frontend/errorView.php');
    }
}

/* Ajouter ... pour mai */
function addProgMayInfos($mission, $details_mission, $location, $available_beds, $comments, $week) {
    try {
        $db = setDb();
        $progManager = new App\Program\ProgramManager($db);
        $progManager->addProgMay($mission, $details_mission, $location, $available_beds, $comments, $week);
        require('./public/views/backend/programManagementView.php');
    } catch(Exception $e) {
        $errorMessage = $e->getMessage();
        require('./public/views/frontend/errorView.php');
    }
}

/* Ajouter ... pour juin */
function addProgJunInfos($mission, $details_mission, $location, $available_beds, $comments, $week) {
    try {
        $db = setDb();
        $progManager = new App\Program\ProgramManager($db);
        $progManager->addProgJun($mission, $details_mission, $location, $available_beds, $comments, $week);
        require('./public/views/backend/programManagementView.php');
    } catch(Exception $e) {
        $errorMessage = $e->getMessage();
        require('./public/views/frontend/errorView.php');
    }
}

/* Ajouter ... pour juillet */
function addProgJulInfos($mission, $details_mission, $location, $available_beds, $comments, $week) {
    try {
        $db = setDb();
        $progManager = new App\Program\ProgramManager($db);
        $progManager->addProgJul($mission, $details_mission, $location, $available_beds, $comments, $week);
        require('./public/views/backend/programManagementView.php');
    } catch(Exception $e) {
        $errorMessage = $e->getMessage();
        require('./public/views/frontend/errorView.php');
    }
}

/* AJouter ... pour aout */
function addProgAugInfos($mission, $details_mission, $location, $available_beds, $comments, $week) {
    try {
        $db = setDb();
        $progManager = new App\Program\ProgramManager($db);
        $progManager->addProgAug($mission, $details_mission, $location, $available_beds, $comments, $week);
        require('./public/views/backend/programManagementView.php');
    } catch(Exception $e) {
        $errorMessage = $e->getMessage();
        require('./public/views/frontend/errorView.php');
    }
}

/* Ajouter ... pour septembre */
function addProgSepInfos($mission, $details_mission, $location, $available_beds, $comments, $week) {
    try {
        $db = setDb();
        $progManager = new App\Program\ProgramManager($db);
        $progManager->addProgSep($mission, $details_mission, $location, $available_beds, $comments, $week);
        require('./public/views/backend/programManagementView.php');
    } catch(Exception $e) {
        $errorMessage = $e->getMessage();
        require('./public/views/frontend/errorView.php');
    }
}

/* Ajouter ... pour octobre */
function addProgOctInfos($mission, $details_mission, $location, $available_beds, $comments, $week) {
    try {
        $db = setDb();
        $progManager = new App\Program\ProgramManager($db);
        $progManager->addProgOct($mission, $details_mission, $location, $available_beds, $comments, $week);
        require('./public/views/backend/programManagementView.php');
    } catch(Exception $e) {
        $errorMessage = $e->getMessage();
        require('./public/views/frontend/errorView.php');
    }
}

/* Ajouter ... pour novembre */
function addProgNovInfos($mission, $details_mission, $location, $available_beds, $comments, $week) {
    try {
        $db = setDb();
        $progManager = new App\Program\ProgramManager($db);
        $progManager->addProgNov($mission, $details_mission, $location, $available_beds, $comments, $week);
        require('./public/views/backend/programManagementView.php');
    } catch(Exception $e) {
        $errorMessage = $e->getMessage();
        require('./public/views/frontend/errorView.php');
    }
}

/* Ajouter ... pour décembre */
function addProgDecInfos($mission, $details_mission, $location, $available_beds, $comments, $week) {
    try {
        $db = setDb();
        $progManager = new App\Program\ProgramManager($db);
        $progManager->addProgDec($mission, $details_mission, $location, $available_beds, $comments, $week);
        require('./public/views/backend/programManagementView.php');
    } catch(Exception $e) {
        $errorMessage = $e->getMessage();
        require('./public/views/frontend/errorView.php');
    }
}

/* Supprimer un commentaire signalé */
function deleteCom($com_id) {
    try {
        $db = setDb();
        $commentsManager = new App\Comments\CommentsManager($db);
        $comToDelete = $commentsManager->deleteCom($com_id);
        return $comToDelete;
        require('./public/views/backend/reportedComsView.php');
    } catch(Exception $e) {
        $errorMessage = $e->getMessage();
        require('./public/views/frontend/errorView.php');
    }
}

/* Récupérer tous les commentaires signalés */
function getReportedComs() {
    try {
        $db = setDb();
        $commentsManager = new App\Comments\CommentsManager($db);
        $comments = $commentsManager->getReportedComs();  
        require('./public/views/backend/reportedComsView.php');
    } catch(Exception $e) {
        $errorMessage = $e->getMessage();
        require('./public/views/frontend/errorView.php');
    }
}

/* Connexion de l'admin */
function logUser($login, $password) {
    try {
        $db = setDb();
        $usersManager = new App\Users\UsersManager($db);
        $userToLog = $usersManager->logUser($login, $password);
        return $userToLog; 
        require('./public/views/backend/adminView.php');
    } catch(Exception $e) {
        $errorMessage = $e->getMessage();
        require('./public/views/frontend/errorView.php');
    }
}

/* Afficher la page de login */
function displayLoginView() {
    require('./public/views/backend/loginView.php');
}
    
/* Afficher la page de création de news */
function displayNewsCreation() {
    require('./public/views/backend/newsCreationView.php');
}

/* Afficher le tableau de bord admin */
function displayAdmin() {
    require('./public/views/backend/adminView.php');
}

/* Afficher le tableau de bord de gestion des news */
function displayNewsMgmt() {
    require('./public/views/backend/newsManagementView.php');
}

/* Afficher le tableau de bord de gestion de la map */
function displayMgmtMap() {
    require('./public/views/backend/mapManagementView.php');
}

/* Afficher le tableau de bord de gestion de programme du navire */
function displayProgMgmt() {
    require('./public/views/backend/programManagementView.php');
}