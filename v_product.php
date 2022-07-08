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
                  <center><h2>Pencarian Data Product</h2></center>
    <form action="" method="POST" class="navbar-form navbar-left" role="search">
  <div class="form-group">
    <input type='text' placeholder='Cari Data Berdasarkan Kode dan Nama' name='qcari' class='form-control'> <br/>
  </div>
  <input type='submit' value='Cari Data' class='btn btn-sm btn-primary'> <a href='index.php' class='btn btn-sm btn-success' > All Data</a>
    </form>
   <form action="delete2.php" method="POST" class="navbar-form navbar-left" role="search">
  <div class="form-group">
    <input type='text' placeholder='hapus Data Berdasarkan Kode dan Nama' name='kode' class='form-control'> <br/>
  </div>
  <input type='submit' value='hapus data' name="hapus2" class='btn btn-sm btn-primary'>
    </form>

<br/>
<br/>
<br/>

    <div class="panel panel-success">
  <div class="panel-heading">
   <h3 class="panel-title">Data Pelanggan</h3>
  </div><div align="left" style="margin-left:12px;margin-top:12px"><a href="tambahbarang.php" class="table table-hover" >New Record</a></div>
  <div class="panel-body">
  
    <table class="table table-hover" >
      <th><td>ID barang</a></td><td>NAMA</td><td>satuan</td><td>qty</td><td>harga beli</td><td>Harga jual</td><td>ACTION</td></th>

<?php
require_once('koneksi.php');
$query1="select * from tb_barang ";


if(isset($_POST['qcari'])){
  $qcari=$_POST['qcari'];
  $query1="SELECT * FROM  tb_barang
  where kd_barang like '%$qcari%'
  or nama_barang like '%$qcari%'  ";

}

$result=mysqli_query($conn,$query1) or die(mysqli_error());
$no=1; //penomoran 
while($rows=mysqli_fetch_assoc($result)){
      ?>
      <tr>
        <td><?php echo $no
        ?></td>
        <td><?php   echo $rows['kd_barang'];?></td>
        <td><?php   echo $rows['nama_barang'];?></td>
        <td><?php   echo $rows['satuan'];?></td>
        <td><?php   echo $rows['qty'];?></td>
        <td><?php   echo $rows['harga_beli'];?></td>
        <td><?php   echo $rows['hrg_jual'];?></td>
        <td><a href="edit2.php?kd_barang=<?php echo $rows['kd_barang']; ?>" class="btn btn-sm btn-success"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Edit Data</a></td>

      </tr>
      <?php
$no++;
}?>
    </table>  
</div>
</div>
    </div><!-- /.container -->

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