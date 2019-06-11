var option = {
    newsMgmtBtn: $('#news-mgmt'),
    mapMgmtBtn: $('#map-mgmt'),
    comMgmtBtn: $('#com-mgmt'),

    init: function() {
        var self = this;

        tinymce.init({ selector: 'content' });

        self.newsMgmtBtn.click(function() {
            window.location.replace('/nacomed/public/views/backend/newsCreationView.php');
        });
    }


};