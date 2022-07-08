<?php
include('koneksi.php');
include('action4.php');
?>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Halaman admin</title>
<link rel="stylesheet" href="css/bootstrap.min.css"/>
<style type="text/css"> 
.row{
    margin-left:0px;
    margin-right:0px;
}

#wrapper {
    padding-left: 70px;
    transition: all .4s ease 0s;
    height: 100%;

}

#sidebar-wrapper {
    margin-left: -150px;
    left: 70px;
    width: 200px;
    background: #aaa;
    position: fixed;
    height: 100%;
    z-index: 10000;
    transition: all .4s ease 0s;
    background-color: #061568;
}

.sidebar-nav {
    display: block;
    float: left;
    width: 200px;
    list-style: none;
    margin: 0;
    padding: 0;
    background-color: #31f91b;
}
#page-content-wrapper {
    padding-left: 0;
    margin-left: 0;
    width: 100%;
    height: auto;
}
#wrapper.active {
    padding-left: 150px;
}
#wrapper.active #sidebar-wrapper {
    left: 150px;
}

#page-content-wrapper {
  width: 100%;
}

#sidebar_menu li a, .sidebar-nav li a {
    background-color: white;
    display: block;
    float: left;
    text-decoration: none;
    width: 150px;
    background: #fff;
    -webkit-transition: background .5s;
    -moz-transition: background .5s;
    -o-transition: background .5s;
    -ms-transition: background .5s;
    transition: background .5s;
     background-color: #061568;
}
.sidebar_name {
    padding-top: 25px;
    color: #fff;
    opacity: .7;
}

.sidebar-nav li {
  line-height: 40px;
  text-indent: 20px;
}

.sidebar-nav li a {
  color: white;
  display: block;
  text-decoration: none;
}

.sidebar-nav li a:hover {
  color: white;
  background: rgba(255,255,255,0.2);
  text-decoration: none;
}

.sidebar-nav li a:active,
.sidebar-nav li a:focus {
  text-decoration: none;
}
.sidebar-nav{
   background-color:#061568;
   width: 200px;
}
.sidebar-nav > .sidebar-brand {
  height: 100px;
  width: 200px;
  line-height: 60px;
  font-size: 18px;
}

.sidebar-nav > .sidebar-brand a {
  color: white;
}

.sidebar-nav > .sidebar-brand a:hover {
  color: #fff;
  background: none;
}
#main_icon
{
    float:left;
   padding-right: 30px;
   padding-top:30px;
   color: white;
}
.sub_icon
{
    float:right;
   padding-right: 65px;
   padding-top:10px;
}
.content-header {
  height: 65px;
  line-height: 65px;
}

.content-header h1 {
  margin: 0;
  margin-left: 20px;
  line-height: 65px;
  display: inline-block;
}
.sidebar-brand img {
  width: 100px;
  height:100px;
}
@media (max-width:767px) {
    #wrapper {
    padding-left: 70px;
    transition: all .4s ease 0s;
}
#sidebar-wrapper {
    left: 70px;
}
#wrapper.active {
    padding-left: 150px;
}
#wrapper.active #sidebar-wrapper {
    left: 150px;
    width: 200px;
    transition: all .4s ease 0s;
    background-color:#5a9107;
}
}
.navbar{
    background-color: #061568;
}
        .navbar{
            background-color: #061568;
        }
        .container-fluid .satu{
            background-color: #061568;
        }
        .navbar a{
            color: white;
        }
        .jumbotron{
          height: 200px;
          margin-top: 100px;
        }
.capek {
 
}
.lemes{
  margin-top: 50px;
}
</style>
</head>
<?php
$query = "SELECT max(no_transaksi) as maxKode FROM tb_penjualan";
$hasil = mysqli_query($conn,$query);
$data  = mysqli_fetch_array($hasil);
$kodeBarang = $data['maxKode'];
$noUrut = (int) substr($kodeBarang, 4, 4);

$noUrut++;

$char = "trns";
$newID = $char . sprintf("%03s", $noUrut);
?>
<body>
  <div id="wrapper" class="active">
      
      <!-- Sidebar -->
            <!-- Sidebar -->
      <div id="sidebar-wrapper">
      <ul id="sidebar_menu" class="sidebar-nav">
           <li class="sidebar-brand"><a>App penjualan</a></li>
           <li class="sidebar-brand"><img src="download.png"></li>
           <li class="sidebar-brand"><a><span class="light" id="main_icon">Hello :)</span></a></li>
      </ul>
        <ul class="sidebar-nav" id="sidebar">     
         <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Master<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li class="active"><a href="v_product.php">Product</a></li>
            <li><a href="v_operator.php">Petugas</a></li>
          </ul>
        </li>
         <li class="active"><a href="v_pelanggan.php">Pelanggan</a></li>
          <li class="active"><a href="v_transaksi.php">Transaksi</a></li>
        </ul>
      </div>
          
      <!-- Halaman Konten -->
      <div id="page-content-wrapper">
        <!-- Buat seluruh isi konten berada dalam class="page-content inset" -->
         <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container-fluid satu">

            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="logout.php">Log out</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
    </nav>
    <div id="main-wrapper" class="col-md-11 pull-right">
            <div id="main">
            <div class="page-header">
              <div class="row">
              <h3 class="text-center">Proses transaksi</h3>
              <form action="action4.php" method="POST" class="navbar-form navbar-left" role="search">
              <div class="form-group capek">
              <label>Kode transaksi</label>
  <input type="text" name="transaksi" value="<?php echo $newID;?>" class="form-control">
  </div>
  <div class="form-group lemes ">
  <label>Kode pelanggan</label>
  <input type='text' placeholder='Cari Data Berdasarkan Kode dan Nama' name='qcari' id="qcari" class='form-control'> 
  &nbsp;
   &nbsp;
    &nbsp;
     &nbsp;
  <button type="button" id="btn-search"> Cari </button> <span id="loading">loading</span>
   &nbsp;
   &nbsp;
    &nbsp;
     &nbsp;
  <label>Nama pelanggan</label>
  <input type='text' name="nama" id="nama" class='form-control' readonly="true"> 
  &nbsp;
   &nbsp;
    &nbsp;
     &nbsp;
    <label>Nama kasir</label>
    <input type='text' name="kasir" class='form-control' value="aji raharjo"> 
  </div>
  <div class="panel-body">
  
    <table class="table table-hover" >
      <tr><td>Kode barang</td><td>nama barang</td><td>satuan</td><td>harga</td><td>Jumlah</td></tr>
      <tr>
        <td><input type='text' placeholder='Cari Data Berdasarkan Kode dan Nama' name='qcari2' id="qcari2" class='form-control'>
          <button type="button" id="btn-search2"> Cari </button> <span id="loading2"></span>
        </td>
        <td><input type='text' name="nama2" id="nama2" class='form-control' readonly=""></td>
        <td>  <input type='text' name="satuan" id="satuan" class='form-control' readonly="true"> </td>
        <td><input type='text' name="harga" id="harga" class='form-control'></td>
        <td><input type='text' name="qty" id="qty" class='form-control'></td>
      </tr>
       <tr>
        <td>Biaya pemasangan dll</td>
        <td></td>
        <td></td>
        <td><input type='text' name="tambahan" id="tambahan" class='form-control'></td>
      </tr>
      <tr>
        <td>Total</td>
        <td></td>
        <td></td>
        <td><input type='text' name="total" id="total" class='form-control'><input type="button" value="tambah" onclick="hitung();" /></td>
      </tr>
      </table>
      <div class="form-group hari">
          <label>tanggal jual</label>
          <div >
            <input type="date" name="tanggal_jual" class="input-group datepicker form-control" date="" data-date-format="dd-mm-yyyy" placeholder="dd-mm-yyyy" id="tgldua">
          </div>
        </div><br/>
        <br/>
       <div class="form-group">
            <input type="submit" name="tambah" value="submit">
       <input type = "reset" name = 'Reset' value = 'Reset' />
          </div>
        </div>
  </form>
      </div>
      </div>
      </div>
      
    </div><!-- Akhir Wrapper -->
    <!-- Script js -->
    <script src="jquery.min.js"></script>
    <script src="proses.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
      function search(){
  $("#loading").show(); // Tampilkan loadingnya
  
  $.ajax({
        type: "POST", // Method pengiriman data bisa dengan GET atau POST
        url: "carikasir.php", // Isi dengan url/path file php yang dituju
        data: {qcari : $("#qcari").val()}, // data yang akan dikirim ke file proses
        dataType: "json",
        beforeSend: function(e) {
            if(e && e.overrideMimeType) {
                e.overrideMimeType("application/json;charset=UTF-8");
            }
    },
    success: function(response){ // Ketika proses pengiriman berhasil
            $("#loading").hide(); // Sembunyikan loadingnya
            
            if(response.status == "success"){ // Jika isi dari array status adalah success
        $("#nama").val(response.nama); // set textbox dengan id nama
      }else{ // Jika isi dari array status adalah failed
        alert("Data Tidak Ditemukan");
      }
    },
        error: function (xhr, ajaxOptions, thrownError) { // Ketika ada error
      alert(xhr.responseText);
        }
    });
}
$(document).ready(function(){
  $("#loading").hide(); // Sembunyikan loadingnya
  
    $("#btn-search").click(function(){ // Ketika user mengklik tombol Cari
        search(); // Panggil function search
    });
    
    $("#qcari").keyup(function(){ // Ketika user menekan tombol di keyboard
    if(event.keyCode == 13){ // Jika user menekan tombol ENTER
      search(); // Panggil function search
    }
  });
});

  function hitung() {

          var barang = document.getElementById('harga').value;
      var jumlah = document.getElementById('qty').value;
      var biaya = document.getElementById('tambahan').value;
      var result = parseInt(barang) * parseInt(jumlah) + parseInt(biaya); 
      if (!isNaN(result)) {
         document.getElementById('total').value = result;
      }
      }

    </script>
</body>
</html>