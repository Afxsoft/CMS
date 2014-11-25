var map;
var panel;
var initialize;
var calculate;
var direction;

initialize = function () {
    var latLng = new google.maps.LatLng(48.8534100, 2.3488000); // Correspond au coordonnées de Paris
    var myOptions = {
        zoom: 12, // Zoom par défaut
        center: latLng, // Coordonnées de départ de la carte de type latLng 
        mapTypeId: google.maps.MapTypeId.TERRAIN, // Type de carte, différentes valeurs possible HYBRID, ROADMAP, SATELLITE, TERRAIN
        maxZoom: 20
    };

    map = new google.maps.Map(document.getElementById('map'), myOptions);
    panel = document.getElementById('panel');

    var marker = new google.maps.Marker({
        position: latLng,
        map: map,
        title: "Paris"
                //icon     : "marker_lille.gif" // Chemin de l'image du marqueur pour surcharger celui par défaut
    });

    var contentMarker = [
        'Paris'
    ].join('');

    var infoWindow = new google.maps.InfoWindow({
        content: contentMarker,
        position: latLng
    });

    google.maps.event.addListener(marker, 'click', function () {
        infoWindow.open(map, marker);
    });

    google.maps.event.addListener(infoWindow, 'domready', function () { // infoWindow est biensûr notre info-bulle
        jQuery("#tabs").tabs();
    });


    direction = new google.maps.DirectionsRenderer({
        map: map,
        panel: panel // Dom element pour afficher les instructions d'itinéraire
    });

};

calculate = function () {
    origin = document.getElementById('origin').value; // Le point départ
    destination = document.getElementById('destination').value; // Le point d'arrivé
    if (origin && destination) {
        var request = {
            origin: origin,
            destination: destination,
            travelMode: google.maps.DirectionsTravelMode.TRANSIT // Mode de conduite
        }
        var directionsService = new google.maps.DirectionsService(); // Service de calcul d'itinéraire
        directionsService.route(request, function (response, status) { // Envoie de la requête pour calculer le parcours
            if (status == google.maps.DirectionsStatus.OK) {
                direction.setDirections(response); // Trace l'itinéraire sur la carte et les différentes étapes du parcours
            }
        });
    }
};

initialize();
