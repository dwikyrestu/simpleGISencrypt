<script type="text/javascript" charset="utf-8">
    $(document).ready(function() {
	$('.table-paginate').dataTable();
 } );
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

      <div class="col-md-12 col-sm-12 col-lg-12" >
        <div class="panel panel-primary">
        <div class="panel-heading"><span class="glyphicon glyphicon-globe"></span> Data Lahan</div>
        <div class="panel-body">
          <div class="col-md-12 col-sm-12 col-lg-12" >
            <div class="col-md-10 col-sm-10 col-lg-10" >
            <div class="form-group">
                    <select name="kecamatan" id="kecamatan" class="form-control">
                      <option value="">Silahkan Pilih Kecamatan</option>
                      <option value="1">Ampelgading</option>
                      <option value="2">Bantur</option>
                      <option value="3">Bululawang</option>
                      <option value="4">Dampit</option>
                      <option value="5">Dau</option>
                      <option value="6">Donomulyo</option>
                      <option value="7">Gedangan</option>
                      <option value="8">Gondanglegi</option>
                      <option value="9">Jabung</option>
                      <option value="10">Kalipare</option>
                      <option value="11">Karangploso</option>
                      <option value="12">Kasembon</option>
                      <option value="13">Kepanjen</option>
                      <option value="14">Kromengan</option>
                      <option value="15">Lawang</option>
                      <option value="16">Ngajum</option>
                      <option value="17">Ngantang</option>
                      <option value="18">Pagak</option>
                      <option value="19">Pagelaran</option>
                      <option value="20">Pakis</option>
                      <option value="21">Pakisaji</option>
                      <option value="22">Poncokusumo</option>
                      <option value="23">Sumbermanjing Wetan</option>
                      <option value="24">Singosari</option>
                      <option value="25">Sumberpucung</option>
                      <option value="26">Tajinan</option>
                      <option value="27">Tirtoyudo</option>
                      <option value="28">Tumpang</option>
                      <option value="29">Turen</option>
                      <option value="30">Wagir</option>
                      <option value="31">Wajak</option>
                      <option value="32">Wonosari</option>
                      <option value="33">Pujon</option>
                    </select>
                  </div>
                  </div>
                  <div class="col-md-2 col-sm-2 col-lg-2" >
                  <button type="button" id="search" class="btn btn-primary">Cari Lokasi Lahan</button>
                </div>
          </div>

          <a data-toggle="modal" data-target="#ModalaAdd" class="btn btn-small btn-success">
            <span class="glyphicon glyphicon-edit"></span> Tambah Data</a><br/><br/>
            <div id="reload">
            <table class="table table-striped" id="mydata">
        <thead>
            <tr>
                <th>Nama Lahan</th>
                <th>Lokasi Lahan</th>
                <th>Kecamatan</th>
                <th align="center">Kontrol</th>
            </tr>
        </thead>

        <tbody id="show_data">

        </tbody>
    </table>
</div>

   </div>
  </div>
    </div>
 </div>
</div>
<!-- MODAL ADD -->
        <div class="modal fade" id="ModalaAdd" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 class="modal-title" id="myModalLabel">Tambah Data</h3>
            </div>

            <form class="form-horizontal">
                <div class="modal-body">

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Nama Lahan</label>
                        <div class="col-xs-9">
                            <input name="nama" id="nama" class="form-control" type="text" placeholder="Nama Lahan" style="width:335px;" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Kecamatan</label>
                        <div class="col-xs-9">
                          <select class="form-control" id="kecamatan" name="kecamatan" style="width:335px;">
                            <option value="1">Ampelgading</option>
                            <option value="2">Bantur</option>
                            <option value="3">Bululawang</option>
                            <option value="4">Dampit</option>
                            <option value="5">Dau</option>
                            <option value="6">Donomulyo</option>
                            <option value="7">Gedangan</option>
                            <option value="8">Gondanglegi</option>
                            <option value="9">Jabung</option>
                            <option value="10">Kalipare</option>
                            <option value="11">Karangploso</option>
                            <option value="12">Kasembon</option>
                            <option value="13">Kepanjen</option>
                            <option value="14">Kromengan</option>
                            <option value="15">Lawang</option>
                            <option value="16">Ngajum</option>
                            <option value="17">Ngantang</option>
                            <option value="18">Pagak</option>
                            <option value="19">Pagelaran</option>
                            <option value="20">Pakis</option>
                            <option value="21">Pakisaji</option>
                            <option value="22">Poncokusumo</option>
                            <option value="23">Sumbermanjing Wetan</option>
                            <option value="24">Singosari</option>
                            <option value="25">Sumberpucung</option>
                            <option value="26">Tajinan</option>
                            <option value="27">Tirtoyudo</option>
                            <option value="28">Tumpang</option>
                            <option value="29">Turen</option>
                            <option value="30">Wagir</option>
                            <option value="31">Wajak</option>
                            <option value="32">Wonosari</option>
                            <option value="33">Pujon</option>
                          </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Alamat Lahan</label>
                        <div class="col-xs-9">
                            <input name="alamat" id="alamat" class="form-control" type="text" placeholder="Alamat" style="width:335px;" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Keterangan</label>
                        <div class="col-xs-9">
                            <input name="ket" id="ket" class="form-control" type="text" placeholder="Keterangan" style="width:335px;">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Koordinat</label>
                        <div class="col-xs-9">
                            <input name="latlong" id="latlong" class="form-control" type="text" placeholder="123456789,987654321" style="width:335px;">
                          <h5>* Pisahkan setiap koordinat dengan spasi,contoh : <font color="blue">123456789,987654321</font> <font color="RED">SPASI</font> <font color="blue">987654321,123456789</font> </h5>
                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-info" id="btn_simpan">Simpan</button>
                </div>
            </form>
            </div>
            </div>
        </div>
        <!--END MODAL ADD-->

        <div class="modal fade" id="ModalHapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
                <h4 class="modal-title" id="myModalLabel">Hapus Barang</h4>
            </div>
            <form class="form-horizontal">
            <div class="modal-body">

                    <input type="hidden" name="kode" id="textkode" value="">
                    <div class="alert alert-warning"><p>Apakah Anda yakin mau menghapus barang ini?</p></div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                <button class="btn_hapus btn btn-danger" id="btn_hapus">Hapus</button>
            </div>
            </form>
        </div>
    </div>
</div>

<script type="text/javascript">
            $(document).ready(function(){
                tampil_data_barang();   //pemanggilan fungsi tampil barang.

                $('#mydata').dataTable();

                //fungsi tampil barang
                function tampil_data_barang(){
                    $.ajax({
                        type  : 'ajax',
                        url   : '<?php echo base_url()?>/lahan/data_lahan',
                        async : false,
                        dataType : 'json',
                        success : function(data){
                            var html = '';
                            var i;
                            for(i=0; i<data.length; i++){
                                html += '<tr>'+
                                        '<td>'+data[i].nama_lokasi+'</td>'+
                                        '<td>'+data[i].alamat+'</td>'+
                                        '<td>'+data[i].kecamatan+'</td>'+
                                        '<td style="text-align:center;">'+
                                            '<a href="javascript:;" class="btn btn-info btn-small item_tampil" data="'+data[i].id+'">Tampilkan</a>'+' '+
                                            '<a href="<?php base_url()."admin/detail/"?>'+data[i].id+'" class="btn btn-warning btn-small item_detail" data="'+data[i].id+'">Detail</a>'+
                                        '</td>'+
                                        '</tr>';
                            }
                            $('#show_data').html(html);
                        }

                    });
                }

                //GET UPDATE
                $('#show_data').on('click','.item_edit',function(){
                    var id=$(this).attr('data');
                    $.ajax({
                        type : "GET",
                        url  : "<?php echo base_url('index.php/barang/get_barang')?>",
                        dataType : "JSON",
                        data : {id:id},
                        success: function(data){
                            $.each(data,function(barang_kode, barang_nama, barang_harga){
                                $('#ModalaEdit').modal('show');
                                $('[name="kobar_edit"]').val(data.barang_kode);
                                $('[name="nabar_edit"]').val(data.barang_nama);
                                $('[name="harga_edit"]').val(data.barang_harga);
                            });
                        }
                    });
                    return false;
                });

                $("#search").click(function(){
                var kecamatan  = $("#kecamatan").val();
                //alert("your selected id is :"+kecamatan);
                $.ajax({
                    url: "/gis-lahan/home/cariKec",
                    data: "kecamatan="+kecamatan,
                    dataType: 'json',
                    cache: false,
                    success: function(msg) {
                        var gislahan3 = new google.maps.LatLng(-6.284600, 107.381583);
                        var petaoption3 = {
                            zoom: 11,
                            center: gislahan3,
                            mapTypeId: google.maps.MapTypeId.ROADMAP
                        };

                        var peta3 = new google.maps.Map(document.getElementById("map-canvas"),petaoption3);

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

                            polygon.setMap(peta3);
                            google.maps.event.addListener(polygon, 'click', function(event) {
                                infoWindow.setContent(this.html);
                                infoWindow.setPosition(event.latLng);
                                infoWindow.open(peta3);
                            });
                        }
                    }
                 });
                });


                //GET DISPLAY
                $('#show_data').on('click','.item_tampil',function(){
                    //var id=$(this).attr('data');
                    //alert("your selected id is :"+id);

                    var kecamatan  = $(this).attr('data');
                    $.ajax({
                        url: "/gis-lahan/home/getOne",
                        data: "kecamatan="+kecamatan,
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

                //Simpan Barang
                $('#btn_simpan').on('click',function(){
                var nama=$('#nama').val();
                var alamat=$('#alamat').val();
                var kecamatan=$('#kecamatan').val();
                var ket=$('#ket').val();
                var latlong=$('#latlong').val();
                $.ajax({
                  type : "POST",
                  url  : "<?php echo base_url('/lahan/simpan_lahan')?>",
                  dataType : "JSON",
                  data : {nama:nama , alamat:alamat, kecamatan:kecamatan, ket:ket, latlong:latlong},
                    success: function(data){
                        $('[name="nama"]').val("");
                        $('[name="alamat"]').val("");
                        $('[name="kecamatan"]').val("");
                        $('[name="ket"]').val("");
                        $('[name="latlong"]').val("");
                        $('#ModalaAdd').modal('hide');
                        tampil_data_barang();
                    }
                });
                $('#ModalaAdd').modal('hide');
                tampil_data_barang();
                return false;
                });

                //Update Barang
                $('#btn_update').on('click',function(){
                var kobar=$('#kode_barang2').val();
                var nabar=$('#nama_barang2').val();
                var harga=$('#harga2').val();
                    $.ajax({
                    type : "POST",
                    url  : "<?php echo base_url('index.php/barang/update_barang')?>",
                    dataType : "JSON",
                    data : {kobar:kobar , nabar:nabar, harga:harga},
                        success: function(data){
                          $('[name="kobar_edit"]').val("");
                          $('[name="nabar_edit"]').val("");
                          $('[name="harga_edit"]').val("");
                          $('#ModalaEdit').modal('hide');
                          tampil_data_barang();
                        }
                    });
                return false;
                });
                //Hapus Barang
                $('#btn_hapus').on('click',function(){
                    var kode=$('#textkode').val();
                    $.ajax({
                    type : "POST",
                    url  : "<?php echo base_url('index.php/barang/hapus_barang')?>",
                    dataType : "JSON",
                            data : {kode: kode},
                            success: function(data){
                                    $('#ModalHapus').modal('hide');
                                    tampil_data_barang();
                            }
                        });
                        return false;
                    });

            });

        </script>
