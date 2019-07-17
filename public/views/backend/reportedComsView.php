<?php $title = 'Association Nacomed : Liste des commentaires signalés'; ?>
<?php $meta_description = 'Page de la liste des commentaires signalés'; ?>

<?php ob_start(); ?>
        
<div class="container">
    <div class="row">
        <div class="col-lg-12 reported_comments">
            <header>
                <h4 class="text-center">Retrouvez-ici tous les commentaires qui ont été signalés par les visiteurs</h4>
            </header>
                <p class="text-center">Voici la liste des derniers commentaires signalés :</p>

                    <div class="rep-coms-list">
                        <?php
                            foreach ($comments as $com) {
                        ?>
                            <div>
                                <p class="reported-com">
                                    Auteur : <?php echo $com->com_author(); ?></br>
                                    Commentaire : <?php echo $com->com_content(); ?></br>
                                    Signalé le : <?php echo $com->com_date_fr() . ', ' . $com->com_report_number() . ' fois.'; ?></br>
                                    <input type="button" class="del_btn" name="<?php echo $com->com_id(); ?>" value="Supprimer" />
                                </p>
                            </div>
                        <?php 
                            } 
                        ?>
                    </div>
        </div>
    </div>
</div>

<div id="modal_delete" class="modal">
    <div class="modal_del_content">
        <span class="close">&times;</span>
        <p id="modal_text"></p>
        <div id="buttons">
            <button id="yes">Oui</button>
            <button id="no">Non</button>
        </div>
    </div>
</div>

<?php $content = ob_get_clean(); ?>
<?php require('public/views/layoutBack.php'); ?>

<!-- JavaScript files-->
<script src="./js/deleteCom.js"></script>
<script src="./js/controllers/deleteCom.js"></script>