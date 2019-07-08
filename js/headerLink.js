$(function() {
    $('#header_link').click(function(){
        $('html').animate({scrollTop:0}, 'slow');
        return false;
    });
});