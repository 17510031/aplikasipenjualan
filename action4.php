      <?php
include('koneksi.php');
if(isset($_POST['tambah'])) {
        $kode         = $_POST['transaksi'];
        $pelanggan        = $_POST['qcari'];
        $barang    = $_POST['qcari2'];
        $qty    = $_POST['qty'];
        $total    = $_POST['total'];
        $tanggal_jual = $_POST['tanggal_jual'];

     $querytambah = mysqli_query($conn,"INSERT INTO tb_penjualan VALUES('$kode', '$pelanggan', '$barang', '$tanggal_jual', '$qty', '$total')") ;
  if($querytambah) {
    header('location: v_transaksi.php');
   } else{
    echo "Upss Something wrong..";
   }

}
?>