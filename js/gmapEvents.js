$(function() {
    /* GMAP */
    var corte= {lat: 42.309409, lng: 9.149022};
    
    var map = new google.maps.Map(document.getElementById('gmap'), {
        zoom: 8,
        center: corte,
        mapTypeId: google.maps.MapTypeId.ROADMAP 
    });

    function initMap() {
        map;
    }
        

    initMap();

    $('.row-map').each(function(index) {
        console.log(index);
        var lat_class = $(this).find('.event_lat');
        var event_lat = lat_class.html();

        var lng_class = $(this).find('.event_lng');
        var event_lng = lng_class.html();

        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(event_lat, event_lng),
            map: map,
            draggable: false,
            animation: google.maps.Animation.DROP
        });
    });

    google.maps.event.addListener()

});