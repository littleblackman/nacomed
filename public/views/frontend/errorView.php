<?php $title = 'Association Nacomed : Page d\'erreur'; ?>
<?php $meta_description = 'Page d\'erreur'; ?>

<?php ob_start(); ?>

<div class="error-message">
    <h1>Il y a une erreur, veuillez contacter votre webmaster</h1>
    <p><?php echo $errorMessage; ?></p>
</div>

<?php $content = ob_get_clean(); ?>
<?php require('public/views/layoutFront.php'); ?>