$(function() {
    var corte= {lat: 42.309409, lng: 9.149022};


    function initMap() {
        var map = new google.maps.Map(document.getElementById('gmap'), {
            zoom: 8,
            center: corte,
            mapTypeId: google.maps.MapTypeId.ROADMAP 
        });
    }

    initMap();

});