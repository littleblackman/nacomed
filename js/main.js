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

$('.scrollable').on('mouseover', function(event) {
    $(document).unbind('mousewheel');
});

$('.scrollable').on('mouseleave', function(event) {
    $(document).bind('mousewheel', function(event) {
      event.preventDefault();
        var delta = event.originalEvent.wheelDelta || -event.originalEvent.detail;
        init_scroll(event, delta);
    });
  });