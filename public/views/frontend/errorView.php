<?php $title = 'Association Nacomed : Page d\'erreur'; ?>
<?php $meta_description = 'Page d\'erreur'; ?>

<?php ob_start(); ?>

<div class="error-message">
    <p><?php echo $errorMessage; ?></p>
</div>

<?php $content = ob_get_clean(); ?>
<?php require('public/views/layoutFront.php'); ?>