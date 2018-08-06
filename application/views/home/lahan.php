<script>

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
                status_lokasi[i] = msg.gislahan.lahan[i].status;
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
                                    '<br>' +
                                    'Status Lokasi : '+ status_lokasi[i] +
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
    $("#search").click(function(){
        var kecamatan  = $("#kecamatan").val();
        var status     = $("#status").val();
        $.ajax({
            url: "caripeta.php",
            data: "kecamatan="+kecamatan+"&status="+status,
            dataType: 'json',
            cache: false,
            success: function(msg) {
                var gislahan2 = new google.maps.LatLng(-6.284600, 107.381583);
                var petaoption2 = {
                    zoom: 11,
                    center: gislahan2,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                };

                var peta2 = new google.maps.Map(document.getElementById("map-canvas"),petaoption2);

                var polygon;
                var cords = [];
                for(i=0;i<msg.gislahan.lahan.length;i++){
                    nama[i] = msg.gislahan.lahan[i].nama_lokasi;
                    kecamatan[i] = msg.gislahan.lahan[i].kecamatan;
                    alamat[i] = msg.gislahan.lahan[i].alamat;
                    status_lokasi[i] = msg.gislahan.lahan[i].status;
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
                                        '<br>' +
                                        'Status Lokasi : '+ status_lokasi[i] +
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

                    polygon.setMap(peta2);
                    google.maps.event.addListener(polygon, 'click', function(event) {
                        infoWindow.setContent(this.html);
                        infoWindow.setPosition(event.latLng);
                        infoWindow.open(peta2);
                    });
                }
            }
        });
    });
});
</script>


<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<div class="panel panel-primary">
					<div class="panel-heading"><span class="glyphicon glyphicon-globe"></span> Peta</div>
					<div class="panel-body" style="height:400px;" id="map-canvas">
					</div>
				</div>
			</div>
		</div>
</div>
