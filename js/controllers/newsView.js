$(function() {
    var commentForm = Object.create(commentAdder);
    commentForm.init();

    var reportedCom = Object.create(comToReport);
    reportedCom.init();
});