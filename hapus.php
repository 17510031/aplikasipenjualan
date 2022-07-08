<?php
include('koneksi.php');
if(isset($_POST['hapus'])) {
   $kode         = $_POST['kode'];
 
     $querytambah = mysqli_query($conn,"DELETE FROM tb_pelanggan WHERE kd_plg='$kode'") ;
  if($querytambah) {
    header('location: v_pelanggan.php');
   } else{
    echo "Upss Something wrong..";
   }

}
?>