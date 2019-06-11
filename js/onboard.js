$('.owl-carousel').owlCarousel({
    items:1,
    lazyLoad:true,
    loop:true,
    nav:true,
    dots:true,
    margin:10
});

$(document).click(function(event) { 
    if(!$(event.target).closest('#mainNav').length) {
        $('#mainNav').removeClass('is-visible');
    } 
});