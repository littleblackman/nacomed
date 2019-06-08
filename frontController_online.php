<?php
    //use App\models\Articles;
    //use App\models\Program;
    require('./models/Program/Program.php');
    require('./models/Program/ProgramManager.php');

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

/* Fonction de Program */

function displayOnBoard() {
    $db = setDb();
    $progMayManager = new ProgramManager($db);
    $prog_may = $progMayManager->getProg_may();
    $prog_jun = $progMayManager->getProg_jun();
    $prog_jul = $progMayManager->getProg_jul();
    $prog_aug = $progMayManager->getProg_aug();
    $prog_sep = $progMayManager->getProg_sep();
    $prog_oct = $progMayManager->getProg_oct();
    require('./public/views/frontend/onboard.php');
}

/* Fonction d'affichage simple */

function displayHome() {
    require('./public/views/frontend/home.php');
}

/*function displayOnboard() {
    //require('./public/views/frontend/onboard.php');
}*/

function displayContact() {
    require('./public/views/frontend/contact.php');
}

function displayAbout() {
    require('./views/frontend/about.php');
}

function displayLoginView() {
    require('./views/backend/adminLoginView.php');
}

function setDb() {
    $db = new PDO('mysql:host=lm495315-001.privatesql;port=35442;dbname=nacomed; charset=utf8', 'admin', 'Jmc4Mysql1984');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    return $db;
}