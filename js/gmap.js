var initMap = function() {
    /* GMAP */
    var corte= {lat: 42.309409, lng: 9.149022};

    var map = new google.maps.Map(document.getElementById('gmap'), {
        zoom: 8,
        center: corte,
        mapTypeId: google.maps.MapTypeId.ROADMAP 
    });

    var marker = new google.maps.Marker({
        position: corte,
        map: map,
        title: 'Bougez le marqueur',
        draggable: true
    });

    google.maps.event.addListener(marker, 'drag', function() {
        setPosition(marker);

    });

    function setPosition(marker) {
        var pos = marker.getPosition();
        $('#lat').val(pos.lat());
        $('#lng').val(pos.lng());
    }

    var geocoder = new google.maps.Geocoder();

        $('#city').keypress(function(e) {
            if (e.keyCode == 13) {
                var request = {
                    address : $(this).val()
                }
                geocoder.geocode(request, function(results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {
                        var pos = results[0].geometry.location;
                        map.setCenter(pos);
                        marker.setPosition(pos);
                        setPosition(marker);
                    }
                });
                return false;
            }
        })
}