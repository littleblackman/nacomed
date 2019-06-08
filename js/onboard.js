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


var center = [9.012893, 42.039604];
var bastia = [9.666595, 42.653909];
$('#map')
    .gmap3({
        center: center,
        address: "Corte, France",
        zoom: 8,
        mapTypeId : google.maps.MapTypeId.ROADMAP
    })
    .marker({
        position: center,
        icon: 'https://maps.google.com/mapfiles/marker_green.png'
    });