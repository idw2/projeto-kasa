function initialize( lat, lng, element ) {
    var map_canvas = document.getElementById(element);
    var myLatlng = new google.maps.LatLng(lat, lng);
    var mapOptions = {
        center: myLatlng,
        zoom: 17,
        scrollwheel: false,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    map = new google.maps.Map(map_canvas, mapOptions); 
    TestMarker( lat, lng );
}
// Function for adding a marker to the page.
function addMarker(location) {
    marker = new google.maps.Marker({
        position: location,
        icon: swh_template_uri+'/assets/img/property-marker.png',
        map: map
    });
}
function TestMarker( lat, lng ) {
    MyMarker = new google.maps.LatLng(lat, lng);
    addMarker(MyMarker);
}