var articleToAdd = {
    sessionUser: sUser,
    NcrForm: $('#NcrForm'),
    artSubmitBtn: $('#art_submit_btn'),
    modalCreate: $('#modal_create'),
    modalText: $('#modal_text'),

    init: function() {
        var self = this;

        $(document).click(function(event) { 
            if(!$(event.target).closest(self.modal).length) {
                self.modalCreate.hide();
                self.modalCreate.stop(true, true).fadeOut();
            } 
        });

        self.NcrForm.on('submit', function(e) {
            e.stopPropagation();
            e.preventDefault();  
            
            $.ajax({
                url: '/nacomed/index.php?action=addNews',
                type: 'POST',
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData:false,
                dataType: 'text',
                success: function(data) {
                    console.log(data);
                    switch (data) {
                        case 'title_missing':
                            self.modalText.text('Veuillez écrire un titre');
                            self.modalCreate.show();
                            self.modalCreate.fadeOut(4000, function() {
                                self.modalText.text('');
                                self.modalCreate.hide();
                            });
                        break;

                        case 'content_missing':
                            self.modalText.text('Veuillez écrire le contenu de votre billet');
                            self.modalCreate.show();
                            self.modalCreate.fadeOut(4000, function() {
                                self.modalText.text('');
                                self.modalCreate.hide();
                            });
                        break;

                        case 'failed':
                            console.log(data);
                            self.modalText.text('Veuillez remplir tous les champs, un titre et un contenu');
                            self.modalCreate.show();
                            self.modalCreate.fadeOut(4000, function() {
                                self.modalText.text('');
                                self.modalCreate.hide();
                            });
                        break;

                        default:
                            self.modalText.text('Votre news a bien été ajouté');
                            self.modalCreate.show();
                            self.modalCreate.fadeOut(4000, function() {
                                self.modalText.text('');
                                self.modalCreate.hide();
                                window.location.href = "/nacomed/index.php?action=getArticle&article_id=" + data;
                            });
                             
                    }
                }
            });
        });
    }
};