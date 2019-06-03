<?php
    use App\models\Articles;

function listLastArticles() {
    $db = setDb();
    $articlesManager = new ArticlesManager($db);    
    $articles = $articlesManager->listLastArticles();
    require('./views/frontend/home.php');
}

function listArticles() {
    $db = setDb();
    $articlesManager = new ArticlesManager($db);    
    $articles = $articlesManager->listArticles();
    require('./views/frontend/articleView.php');
}

function getArtCom($article_id) {
    $db = setDb();
    $articlesManager = new ArticlesManager($db);
    $article = $articlesManager->getArticle($article_id);

    $commentsManager = new CommentsManager($db);
    $comments = $commentsManager->getComFromArticle($article_id);
    require('./views/frontend/postView.php');
}

function addComment($com_content, $com_author, $article_id) {
    $db = setDb();
    $commentsManager = new CommentsManager($db);
    $comment = $commentsManager->addComment($com_content, $com_author, $article_id);

    $articlesManager = new ArticlesManager($db);
    $article = $articlesManager->getArticle($article_id);

    $comments = $commentsManager->getComFromArticle($article_id);
}

function reportCom($article_id, $com_id) {
    $db = setDb();
    $articlesManager = new ArticlesManager($db);
    $article = $articlesManager->getArticle($article_id);

    $commentsManager = new CommentsManager($db);
    $comments = $commentsManager->getComFromArticle($article_id);

    $reportedCom = $commentsManager->reportComment($com_id);
    require('./views/frontend/postView.php');
}

function displayHome() {
    require('./public/views/frontend/home.php');
}

function displayOnboard() {
    require('./public/views/frontend/onboard.php');
}

function displayAbout() {
    require('./views/frontend/about.php');
}

function displayContact() {
    require('./views/frontend/contact.php');
}

function displayLoginView() {
    require('./views/backend/adminLoginView.php');
}

function setDb() {
    $db = new PDO('mysql:host=localhost;dbname=blog_jf;charset=utf8', 'root', 'mysqlpwd1234');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    return $db;
}