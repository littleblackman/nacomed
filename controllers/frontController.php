<?php
    require('./vendor/autoload.php');
    
    
    use App\Articles;
    use App\Program;
    use App\Comments;

/* Récupération des commentaires d'une news */
function getArtCom($article_id) {
    try {
        $articlesManager = new App\Articles\ArticlesManager();
        $article = $articlesManager->getArticle($article_id);

        $commentsManager = new App\Comments\CommentsManager();
        $comments = $commentsManager->getComFromArticle($article_id);
        require('./public/views/frontend/newsView.php');
    } catch(Exception $e) {
        $errorMessage = $e->getMessage();
        require('./public/views/frontend/errorView.php');
    }
}

/* Ajout de commentaires */
function addComment($com_content, $com_author, $article_id) {
    try {
        $commentsManager = new App\Comments\CommentsManager();
        $comment = $commentsManager->addComment($com_content, $com_author, $article_id);

        $articlesManager = new App\Articles\ArticlesManager();
        $article = $articlesManager->getArticle($article_id);

        $comments = $commentsManager->getComFromArticle($article_id);
    } catch(Exception $e) {
        $errorMessage = $e->getMessage();
        require('./public/views/frontend/errorView.php');
    }
}

/* Signalement de commentaire */
function reportCom($article_id, $com_id) {
    try {
        $articlesManager = new App\Articles\ArticlesManager();
        $article = $articlesManager->getArticle($article_id);

        $commentsManager = new App\Comments\CommentsManager();
        $comments = $commentsManager->getComFromArticle($article_id);

        $reportedCom = $commentsManager->reportComment($com_id);
        require('./public/views/frontend/newsView.php');
    } catch(Exception $e) {
        $errorMessage = $e->getMessage();
        require('./public/views/frontend/errorView.php');
    }
}

/* Fonction de Program */

function displayOnBoard() {
    try {
        $progMayManager = new App\Program\ProgramManager();
        $prog_jan = $progMayManager->getProg_jan();
        $prog_feb = $progMayManager->getProg_feb();
        $prog_mar = $progMayManager->getProg_mar();
        $prog_apr = $progMayManager->getProg_apr();
        $prog_may = $progMayManager->getProg_may();
        $prog_jun = $progMayManager->getProg_jun();
        $prog_jul = $progMayManager->getProg_jul();
        $prog_aug = $progMayManager->getProg_aug();
        $prog_sep = $progMayManager->getProg_sep();
        $prog_oct = $progMayManager->getProg_oct();
        $prog_nov = $progMayManager->getProg_nov();
        $prog_dec = $progMayManager->getProg_dec();

        $mapManager = new App\Map\MapManager();
        $mapEvents = $mapManager->displayEvents();
        require('./public/views/frontend/onboard.php');
    } catch(Exception $e) {
        $errorMessage = $e->getMessage();
        require('./public/views/frontend/errorView.php');
    }
}

/* Fonctions d'affichage simple */

/* Accueil */
function displayHome() {
    require('./public/views/frontend/home.php');
}

/* Affichage de la page des articles (news) */
function displayNews() {
    try {
        $articlesManager = new App\Articles\ArticlesManager();    
        $articles = $articlesManager->listArticles();
        require('./public/views/frontend/articles.php');
    } catch(Exception $e) {
        $errorMessage = $e->getMessage();
        require('./public/views/frontend/errorView.php');
    }
}

/* Page contact */
function displayContact() {
    require('./public/views/frontend/contact.php');
}

/* Page nous soutenir */
function displaySupport() {
    require('./public/views/frontend/supportUsView.php');
}