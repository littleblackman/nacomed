<?php $title = 'Association Nacomed : Contact'; ?>
<?php $meta_description = 'Contactez Nacomed : envoyez-nous un message'; ?>
<?php $og_title = 'Page de contact de Nacomed'; ?>

<?php ob_start(); ?>

<div class="conteneur">
    <!-- Header -->
    <header class="masthead">
        <div class="overlay"></div>
            <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="text-center site-heading">
                        <h1>Contact</h1>
                        <span class="subheading">Vous avez des questions ? J'ai des réponses.<span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <p class="text-center">Vous souhaitez entrer en contact ? Remplissez le formulaire ci-dessous pour m'envoyer un message et je vous répondrais le plus vite possible!</p>
                <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
                <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
                <!-- To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
                <form name="sentMessage" id="contactForm" novalidate>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                        <label>Nom</label>
                        <input type="text" class="form-control" placeholder="Nom" id="name" required data-validation-required-message="Entrez votre nom.">
                        <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                        <label>Addresse Email</label>
                        <input type="email" class="form-control" placeholder="Adresse Email" id="email" required data-validation-required-message="Entrez votre adresse Email.">
                        <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                        <label>Numéro de téléphone</label>
                        <input type="tel" class="form-control" placeholder="Numéro de téléphone" id="phone" required data-validation-required-message="Entrez votre numéro de téléphone.">
                        <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                        <label>Message</label>
                        <textarea rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Ecrivez un message."></textarea>
                        <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <br>
                    <div id="success"></div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary" id="sendMessageButton">Envoyer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php $content = ob_get_clean(); ?>
<?php require('public/views/layoutFront.php'); ?>

<!-- JavaScript files-->
<script src="./js/jqBootstrapValidation.js"></script>
<script src="./js/contact_me.js"></script>