var nama = [];
var kecamatan = [];
var alamat = [];
var keterangan = [];
var status_lokasi = [];
var lokasi = [];
var cords = '';
var area = [];
var infoWindow;

function peta_awal(){
    var gislahan = new google.maps.LatLng(-6.284600, 107.381583);
    var petaoption = {
        zoom: 11,
        center: gislahan,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    peta = new google.maps.Map(document.getElementById("map-canvas"),petaoption);

    url = "/gis-lahan/home/ambildata";
    $.ajax({
        url: url,
        dataType: 'json',
        cache: false,
        success: function(msg){
            var polygon;
            var cords = [];
            for(i=0;i<msg.gislahan.lahan.length;i++){
                nama[i] = msg.gislahan.lahan[i].nama_lokasi;
                kecamatan[i] = msg.gislahan.lahan[i].kecamatan;
                alamat[i] = msg.gislahan.lahan[i].alamat;
                keterangan[i] = msg.gislahan.lahan[i].keterangan;
                lokasi[i] = msg.gislahan.lahan[i].polygon;

                var str = lokasi[i].split(" ");

                for (var j=0; j < str.length; j++) {
                    var point = str[j].split(",");
                    cords.push(new google.maps.LatLng(parseFloat(point[0]), parseFloat(point[1])));
                }

               var contentString = '<b>'+nama[i]+'</b><br>' +
                                    'Alamat: '+ alamat[i] +
                                    '<br>' +
                                    'Kecamatan: '+ kecamatan[i] +
                                    '<br>' +
                                    'Keterangan: '+ keterangan[i] +
                                    '<br>';

                polygon = new google.maps.Polygon({
                    paths: [cords],
                    strokeColor: msg.gislahan.lahan[i].warna,
                    strokeOpacity: 0,
                    strokeWeight: 1,
                    fillColor: msg.gislahan.lahan[i].warna,
                    fillOpacity: 0.5,
                    html: contentString
                });

                cords = [];
                polygon.setMap(peta);
                infoWindow = new google.maps.InfoWindow();
                google.maps.event.addListener(polygon, 'click', function(event) {
                    infoWindow.setContent(this.html);
                    infoWindow.setPosition(event.latLng);
                    infoWindow.open(peta);
                });
            }
        }
    });
}

$(document).ready(function(){

});
