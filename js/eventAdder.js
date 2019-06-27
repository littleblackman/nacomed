var eventToAdd = {
    mapForm: $('#map-form'),
    cityArea: $('#city'),
    modalMap: $('#modal_map'),
    modalText: $('#modal_text'),

    init: function() {
        var self = this;

        $(document).click(function(event) { 
            if(!$(event.target).closest(self.modal).length) {
                self.modalMap.hide();
                self.modalMap.stop(true, true).fadeOut();
            } 
        });

        

        self.mapForm.on('submit', function(e) {
            e.stopPropagation();
            e.preventDefault(); 

            $.ajax({
                url: './index.php?action=addEvent',
                type: 'POST',
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData:false,
                dataType: 'text',
                success: function(data) {
                    
                    switch(data) {
                        case 'name_missing':
                            self.modalText.text('Renseignez un nom pour l\'event');
                            self.modalMap.show();
                            self.modalMap.fadeOut(4000, function() {
                                self.modalText.text('');
                                self.modalMap.hide();
                            });
                        break;

                        case 'lat_missing':
                            self.modalText.text('Renseignez une lattitude');
                            self.modalMap.show();
                            self.modalMap.fadeOut(4000, function() {
                                self.modalText.text('');
                                self.modalMap.hide();
                            });
                        break;

                        case 'lng_missing':
                            self.modalText.text('Renseignez une longitude');
                            self.modalMap.show();
                            self.modalMap.fadeOut(4000, function() {
                                self.modalText.text('');
                                self.modalMap.hide();
                            });
                        break;

                        case 'date_missing':
                            self.modalText.text('Veuillez indiquer une date d\'embarquement');
                            self.modalMap.show();
                            self.modalMap.fadeOut(4000, function() {
                                self.modalText.text('');
                                self.modalMap.hide();
                            });
                        break;

                        default:
                            self.modalText.text('L\'évènement a bien été créé');
                            self.modalMap.show();
                            self.modalMap.fadeOut(4000, function() {
                                self.modalText.text('');
                                self.modalMap.hide();
                                window.location.href = "./index.php?action=listMapEvents";
                            });
                    }

                }
            });
        });
    }
};