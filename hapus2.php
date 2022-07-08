<?php
include('koneksi.php');
if(isset($_POST['hapus2'])) {
   $kode         = $_POST['kode'];
 
     $querytambah = mysqli_query($conn,"DELETE FROM tb_barang WHERE kd_barang='$kode'") ;
  if($querytambah) {
    header('location: v_product.php');
   } else{
    echo "Upss Something wrong..";
   }

}
?>