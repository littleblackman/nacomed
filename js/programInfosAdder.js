var programInfos = {
    programForm: $('#program-form'),
    modalProg: $('#modal_prog'),
    modalText: $('#modal_text'),

    init: function() {
        var self = this;

        $(document).click(function(event) { 
            if(!$(event.target).closest(self.modal).length) {
                self.modalProg.hide();
                self.modalProg.stop(true, true).fadeOut();
            } 
        });

        self.programForm.on('submit', function(e) {
            e.preventDefault(); 

            $.ajax({
                url: './index.php?action=addProgInfos',
                type: 'POST',
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData:false,
                dataType: 'text',
                success: function(data) {
                    console.log(data);
                    switch (data) {
                        case 'badMayWeek':
                            self.modalText.text('Erreur dans le numéro de semaine pour le mois de Mai');
                            self.modalProg.show();
                            self.modalProg.fadeOut(4000, function() {
                                self.modalText.text('');
                                self.modalProg.hide();
                            });
                        break;

                        case 'missing_infos':
                            self.modalText.text('Attention, vous n\'avez rentré aucune information');
                            self.modalProg.show();
                            self.modalProg.fadeOut(4000, function() {
                                self.modalText.text('');
                                self.modalProg.hide();
                            });
                        break;

                        default: 
                            self.modalText.text('Les informations ont bien été ajoutées');
                            self.modalProg.show();
                            self.modalProg.fadeOut(4000, function() {
                                self.modalText.text('');
                                self.modalProg.hide();
                            });
                    }
                }
            });
                    
        });

    }
};