var option = {
    newsMgmtBtn: $('#news-mgmt'),
    mapMgmtBtn: $('#map-mgmt'),
    comMgmtBtn: $('#com-mgmt'),

    init: function() {
        var self = this;

        self.newsMgmtBtn.click(function() {
            window.location.href = "/nacomed/public/views/backend/newsManagementView.php";
        });
    }


};