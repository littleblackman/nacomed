var loginValid = {
    loginForm: $('#login_form'),
    userLogin: $('#user_login'),
    userPass: $('#user_password'),
    loginBtn: $('#login_btn'),
    modal: $('#modal_login'),
    spanClose: $('.close'),
    modalText: $('#modal_text'),

    init: function() {
        var self = this;

        self.loginForm.on('submit', function(e) {
            e.stopPropagation();
            e.preventDefault();

            self.spanClose.click(function() {
                self.modalText.empty();
                self.modal.hide();
            });
        
            $(document).click(function(event) { 
                if(!$(event.target).closest(self.modal).length) {
                    self.modalText.empty();
                    self.modal.hide();
                } 
            });
            

            $.ajax({                
                url: './index.php?action=adminLogin',
                type: 'POST',
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData:false,
                dataType: 'text',
                success: function(data) {
                    console.log(data);
                    if (data == 'success') {
                        self.modalText.text('Heureux de vous revoir ' + self.userLogin.val() + '.');
                        self.modal.show();
                        self.modal.fadeOut(4000, function() {
                            window.location.href = "./index.php?action=displayAdmin";
                        });
                    } else if (data == 'failed') {
                        self.modalText.text('Echec d\'authentfication : mauvais identifiants.');
                        self.modal.show();
                    } else {
                        console.log(data);
                        self.modalText.text('Veuillez renseigner tous les champs requis.');
                        self.modal.show();
                    } 
                }
            });
        });
    }
};