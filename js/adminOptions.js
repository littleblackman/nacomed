var option = {
    programMgmtBtn: $('#program-mgmt'),
    mapMgmtBtn: $('#map-mgmt'),
    editMgmtBtn: $('#edit-mgmt'),
    newsMgmtBtn: $('#news-mgmt'),
    mapMgmtBtn: $('#map-mgmt'),
    comMgmtBtn: $('#com-mgmt'),
    newsCreationBtn: $('#news-creation'),
    listEventsBtn: $('#events-list'),

    init: function() {
        var self = this;

        self.newsMgmtBtn.click(function() {
            window.location.href = "./public/views/backend/newsManagementView.php";
        });

        self.newsCreationBtn.click(function() {
            window.location.href = "./newsCreationView.php";
        });

        self.editMgmtBtn.click(function() {
            window.location.href = "../../../index.php?action=listArticlesToEdit";
        });
    
        self.mapMgmtBtn.click(function() {
            window.location.href = "./index.php?action=displayMapMgmt";
        });

        self.comMgmtBtn.click(function() {
            window.location.href = "./index.php?action=displayRepComs";
        });

        self.programMgmtBtn.click(function() {
            window.location.href = "./index.php?action=displayProgMgmt";
        });

        self.listEventsBtn.click(function() {
            window.location.href = "./index.php?action=listMapEvents";
        });
    }


};