$(function() {
    /* GMAP */
    var corte= {lat: 42.309409, lng: 9.149022};
    
    var currentInfoWindow = null;

    var map = new google.maps.Map(document.getElementById('gmap'), {
        zoom: 8,
        center: corte,
        mapTypeId: google.maps.MapTypeId.ROADMAP 
    });

    function initMap() {
        map;
    }
        

    initMap();

    $('.row-map').each(function() {
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

        var name_class = $(this).find('.event_name');
        var event_name = name_class.html();
        var on_date_class = $(this).find('.on_date');
        var on_date = on_date_class.html();
        var contentInfoWindow = '<p>Sujet : ' + event_name + '</p><p>Date d\'embarquement : ' + on_date + '</p>';

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

        var event_id_id = $(this).find('#event_id');
        var event_id = event_id_id.attr('value');

        $('#edit' + event_id).on('click', function(e) {
            e.preventDefault();

            $.ajax({
                url: '/nacomed/index.php?action=displayUpdateView',
                type: 'POST',
                data: 'event_id=' + event_id,
                dataType: 'text',
                success: function() {
                    $('#modal_text').text('Redirection vers la page de l\'évènement');
                        $('#modal_map').show();
                        $('#modal_map').fadeOut(4000, function() {
                            $('#modal_text').text('');
                            $('#modal_map').hide();
                            window.location.href = "/nacomed/index.php?action=displayUpdateView&event_id=" + event_id;
                        });
                }
            });

        });

        $('#delete' + event_id).on('click', function(e) {
            e.preventDefault();

            $('#modal_text_edit').text('Voulez-vous vraiment supprimer cet évènement ?');
            $('#modal_edit').show();
            $('#yes').show();
            $('#no').show();

            $('#yes').click(function(e) {
                e.preventDefault();

                $.ajax({
                    url: '/nacomed/index.php?action=deleteEvent',
                    type: 'POST',
                    data: 'event_id=' + event_id,
                    dataType: 'text',
                    success: function(data) {
                        $('#yes').hide();
                        $('#no').hide();
                        $('#modal_text_edit').text('L\'évènement a bien été supprimé');
                        $('#modal_edit').show();
                        $('#modal_edit').fadeOut(4000, function() {
                            $('#modal_text_edit').text('');
                            $('#modal_edit').hide();
                            window.location.href = "/nacomed/index.php?action=listMapEvents";
                        });
                    }
                });
            });

            $('#no').click(function() {
                $('#yes').hide();
                $('#no').hide();
                $('#modal_text_edit').text('L\'évènement n\'a pas été supprimé');
                $('#modal_edit').show();
                $('#modal_edit').fadeOut(4000, function() {
                    $('#modal_text_edit').text('');
                    $('#modal_edit').hide();
                    window.location.href = "/nacomed/index.php?action=listMapEvents";
                });
            });

        });
    });
});