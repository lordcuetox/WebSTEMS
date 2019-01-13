var map;
var param = document.getElementById("map") !== null ? document.getElementById("map").getAttribute("data-name"): "";

function initialize()
{
    var coordenadas = new google.maps.LatLng(17.998000, -92.927840);
    var opt = {zoom: 19, center: coordenadas, mapTypeId: google.maps.MapTypeId.ROADMAP};
    var map = new google.maps.Map(document.getElementById('google_maps'), opt);
    var marker = new google.maps.Marker({position: coordenadas, animation: google.maps.Animation.DROP, icon: (param === "" ? "":"../")+"img/Map-Marker-Push-Pin-1-Left-Pink-icon.png"});
    marker.setMap(map);
    var text = "<h3>STEMS CECYTE</h3>";
    var info = new google.maps.InfoWindow({content: text});
    google.maps.event.addListener(marker, 'click', function () {
        info.open(map, marker);
    });
}
google.maps.event.addDomListener(window, 'load', initialize);