<?php $title = 'Association Nacomed : Nous soutenir'; ?>
<?php $meta_description = 'Page pour soutenir l\'association Nacomed : les dons'; ?>
<?php $og_title = 'Association Nacomed : Nous soutenir'; ?>

<?php ob_start(); ?>

<!-- <div class="donation">
    <p>A VENIR : VOUS POURREZ SOUTENIR L'ASSOCIATION EN FAISANT DES DONS</p>
</div> -->

<iframe id="haWidget" allowtransparency="true" scrolling="auto" src="https://www.helloasso.com/associations/nacomed/formulaires/1/widget" style="width:100%;height:750px;border:none;" onload="window.scroll(0, this.offsetTop)"></iframe>

<?php $content = ob_get_clean(); ?>
<?php require('public/views/layoutFront.php'); ?>
        