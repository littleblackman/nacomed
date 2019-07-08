$('.owl-carousel').owlCarousel({
    items:1,
    lazyLoad:true,
    loop:true,
    nav:true,
    dots:true,
    margin:10
});

$(function() {
    /* GMAP */
    function initMap() {
        var corte= {lat: 42.309409, lng: 9.149022};
    
        var currentInfoWindow = null;

        var map = new google.maps.Map(document.getElementById('gmap'), {
            zoom: 8,
            center: corte,
            mapTypeId: google.maps.MapTypeId.ROADMAP 
        });

        $('.map_events').each(function() {
            var lat_class = $(this).find('.event_lat');
            var event_lat = lat_class.attr('value');
            var lng_class = $(this).find('.event_lng');
            var event_lng = lng_class.attr('value');
    
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(event_lat, event_lng),
                map: map,
                draggable: false,
                icon: new google.maps.MarkerImage('https://img.icons8.com/doodle/48/000000/historic-ship.png'),
                animation: google.maps.Animation.DROP
            });
    
            var name_class = $(this).find('.event_name');
            var event_name = name_class.attr('value');
            var on_date_class = $(this).find('.on_date');
            var on_date = on_date_class.attr('value');
            var comments_class = $(this).find('.comments');
            var comments = comments_class.attr('value');
            var contentInfoWindow = '<p>' + event_name + '</p><p>' + on_date + '</p><p>' + comments + '</p>';
    
            var infowindow = new google.maps.InfoWindow({
                content: contentInfoWindow
            })
            google.maps.event.addListener(marker, 'click', function() {
                if (currentInfoWindow !== null) {
                    currentInfoWindow.close();
                }
                
                infowindow.open(map, marker);
                currentInfoWindow = infowindow;
            });
        });
    }
        

    initMap();

    
});