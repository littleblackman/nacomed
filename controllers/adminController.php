<?php
    require('./vendor/autoload.php');

function listArticlesToEdit() {
    $db = setDb();
    $articlesManager = new ArticlesManager($db);    
    $articles = $articlesManager->listArticles();
    require('./views/backend/articleEditionView.php');
}

function addNews($art_title, $art_content, $art_author) {
    $db = setDb();
    $articlesManager = new ArticlesManager($db);
    $article = $articlesManager->addArticle($art_title, $art_content, $art_author);
    $articleId = $article->art_id();
    return $articleId;
    require('./public/views/backend/newsCreationView.php');
}

function editArticle($article_id) {
    $db = setDb();
    $articlesManager = new ArticlesManager($db);
    $article = $articlesManager->getArticle($article_id);
    require('./views/backend/articleUpdateView.php');
}

function updateArticle($art_title, $art_content, $art_id) {
    $db = setDb();
    $articlesManager = new ArticlesManager($db);
    $articleToUpdate = $articlesManager->updateArticle($art_title, $art_content, $art_id);
    return $articleToUpdate;
    require('./views/frontend/postView.php');
}

function deleteArticle($article_id) {
    $db = setDb();
    $articlesManager = new ArticlesManager($db);
    $commentsManager = new CommentsManager($db);
    $comsToDelete = $commentsManager->deleteComsFromArticle($article_id);
    $articleToDelete = $articlesManager->deleteArticle($article_id);
    require('./views/frontend/articleView.php');
}

function deleteCom($com_id) {
    $db = setDb();
    $commentsManager = new CommentsManager($db);
    $comToDelete = $commentsManager->deleteCom($com_id);
    return $comToDelete;
    require('./views/backend/adminBoardView.php');
}

function getReportedComs() {
    $db = setDb();
    $commentsManager = new CommentsManager($db);
    $var = $commentsManager->getReportedComs();  
    //return $var;
    require('./views/backend/adminBoardView.php');
}

function logUser($login, $password) {
    $db = setDb();
    $usersManager = new UsersManager($db);
    $userToLog = $usersManager->logUser($login, $password);
    return $userToLog; 
    require('./views/backend/adminBoardView.php');
}

function displayArticleCreationView() {
    require('./views/backend/articleCreationView.php');
}

function displayAdmin() {
    require('./public/views/backend/adminView.php');
}

/*function setDb() {
    $db = new PDO('mysql:host=localhost;dbname=blog_jf; charset=utf8', 'root', 'mysqlpwd1234');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    return $db;
}*/