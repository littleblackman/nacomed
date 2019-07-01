$(function() {
    var commentForm = Object.create(commentAdder);
    commentForm.init();

    var reportedCom = Object.create(comToReport);
    reportedCom.init();

    if ($('#video-iframe').attr('src') === '') {
        $('.video').hide();
    } else {
        $('.video').show();
    }
});