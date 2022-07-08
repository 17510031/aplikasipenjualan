<?php
include('koneksi.php');
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
@media (max-width:76px) {
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
</style>
</head>
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
            <li><a href="#">Petugas</a></li>
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
            <div class="container">
  <div class="content">
      <h2>Menu pelanggan &raquo; Edit Data</h2>
      <hr />
      
      <?php
      $kd_barang = $_GET['kd_barang']; // assigment nik dengan nilai nik yang akan diedit
      $sql = mysqli_query($conn, "SELECT * FROM tb_barang WHERE kd_barang='$kd_barang'"); // query untuk memilih entri data dengan nilai nik terpilih
        $rows = mysqli_fetch_assoc($sql);
      if(isset($_POST['save'])){ // jika tombol 'Save' dengan properti name="save" pada baris 135 ditekan
        $kd_barang        = $_POST['kd_barang'];
        $nama        = $_POST['nama'];
        $satuan   = $_POST['satuan'];
        $qty  = $_POST['qty'];
        $harga_beli  = $_POST['harga_beli'];
        $harga_jual   = $_POST['harga_jual'];

        
         // query untuk mengupdate nilai entri dalam database
        $update = mysqli_query($conn, "UPDATE tb_barang SET nama_barang='$nama', satuan='$satuan', qty='$qty', harga_beli='$harga_beli', hrg_jual='$harga_jual' WHERE kd_barang='$kd_barang'") or die(mysqli_error());
        if($update){ // jika query update berhasil dieksekusi
          echo "sukses";
        }else{ // jika query update gagal dieksekusi
          echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data gagal disimpan, silahkan coba lagi.</div>'; // maka tampilkan 'Data gagal disimpan, silahkan coba lagi.'
        }
      }
      
      if(isset($_GET['pesan']) == 'sukses'){ // jika terdapat pesan=sukses sebagai bagian dari berhasilnya query update dieksekusi
        echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data berhasil disimpan.</div>'; // maka tampilkan 'Data berhasil disimpan.'
      }
      ?>
      <!-- bagian ini merupakan bagian form untuk mengupdate data yang akan dimasukkan ke database -->
      <form class="form-horizontal" action="" method="POST">
        <div class="form-group">
          <label class="col-sm-3 control-label">Kode barang</label>
          <div class="col-sm-2">
            <input type="text" name="kd_barang" value="<?php echo $rows['kd_barang']; ?>" class="form-control" placeholder="NIK" required>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label">Nama</label>
          <div class="col-sm-4">
            <input type="text" name="nama" value="<?php echo $rows['nama_barang']; ?>" class="form-control" placeholder="Nama" required>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label">qty</label>
          <div class="col-sm-3">
            <input type="text" name="satuan" value="<?php echo $rows['satuan']; ?>" class="form-control" placeholder="Tempat Lahir" required>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label">qty</label>
          <div class="col-sm-3">
            <input type="text" name="qty" value="<?php echo $rows['qty']; ?>" class="form-control" placeholder="Tempat Lahir" required>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label">harga jual</label>
          <div class="col-sm-3">
            <input type="text" name="harga_beli" value="<?php echo $rows['harga_beli']; ?>" class="form-control" placeholder="No Telepon" required>
          </div>
        </div>
         <div class="form-group">
          <label class="col-sm-3 control-label">harga beli</label>
          <div class="col-sm-3">
            <input type="text" name="harga_jual" value="<?php echo $rows['hrg_jual']; ?>" class="form-control" placeholder="No Telepon" required>
          </div>
        </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label">&nbsp;</label>
          <div class="col-sm-6">
            <input type="submit" name="save" class="btn btn-sm btn-primary" value="Simpan" data-toggle="tooltip" title="Simpan Data Karyawan">
            <a href="v_pelanggan.php" class="btn btn-sm btn-danger" data-toggle="tooltip" title="Batal">Batal</a>
          </div>
        </div>
      </form>
    </div> <!-- /.content -->
      </div>
      </div>
      </div>
      
    </div><!-- Akhir Wrapper -->
    <!-- Script js -->
    <script src="jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- End Script -->
</body>
</html>