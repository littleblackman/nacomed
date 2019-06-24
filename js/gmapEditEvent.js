$(function() {
    /* GMAP */

    var event_lat_pl = $('#lat').attr('placeholder');
    var event_lat = parseFloat(event_lat_pl);
    var event_lng_pl = $('#lng').attr('placeholder');
    var event_lng = parseFloat(event_lng_pl);
    console.log(event_lat, event_lng);
    var pointer= {lat: event_lat, lng: event_lng};

    var map = new google.maps.Map(document.getElementById('gmap'), {
        zoom: 8,
        center: pointer,
        mapTypeId: google.maps.MapTypeId.ROADMAP 
    });

    function initMap() {
        map;
    }
        
    initMap();

    var marker = new google.maps.Marker({
        position: new google.maps.LatLng(event_lat, event_lng),
        map: map,
        draggable: true,
        animation: google.maps.Animation.DROP
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
    });

    var event_id = $('#event_id').attr('value');

    $('#event-update-form').on('submit', function(e) {
        e.preventDefault(); 
        
    
        $.ajax({
            url: './index.php?action=updateEvent',
            type: 'POST',
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData:false,
            dataType: 'text',
            success: function(data) {
                switch(data) {
                    case 'name_missing':
                        $('#modal_text').text('Renseignez un nom pour l\'event');
                        $('#modal_map').show();
                        $('#modal_map').fadeOut(4000, function() {
                            $('#modal_text').text('');
                            $('#modal_map').hide();
                        });
                    break;
    
                    case 'lat_missing':
                        $('#modal_text').text('Renseignez une lattitude');
                        $('#modal_map').show();
                        $('#modal_map').fadeOut(4000, function() {
                            $('#modal_text').text('');
                            $('#modal_map').hide();
                        });
                    break;
    
                    case 'lng_missing':
                        $('#modal_text').text('Renseignez une longitude');
                        $('#modal_map').show();
                        $('#modal_map').fadeOut(4000, function() {
                            $('#modal_text').text('');
                            $('#modal_map').hide();
                        });
                    break;
    
                    case 'date_missing':
                        $('#modal_text').text('Veuillez indiquer une date d\'embarquement');
                        $('#modal_map').show();
                        $('#modal_map').fadeOut(4000, function() {
                            $('#modal_text').text('');
                            $('#modal_map').hide();
                        });
                    break;
    
                    default:
                        $('#modal_text').text('L\'évènement a bien été mis à jour');
                        $('#modal_map').show();
                        $('#modal_map').fadeOut(4000, function() {
                            $('#modal_text').text('');
                            $('#modal_map').hide();
                            window.location.href = "./index.php?action=listMapEvents";
                        });
                }
            },
            error: function() {
                console.log('erreur ajax');
            }
        });
    });
});