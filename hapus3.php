<?php
include('koneksi.php');
if(isset($_POST['hapus3'])) {
   $kode         = $_POST['kode'];
 
     $querytambah = mysqli_query($conn,"DELETE FROM tb_operator WHERE id_operator='$kode'") ;
  if($querytambah) {
    header('location: v_operator.php');
   } else{
    echo "Upss Something wrong..";
   }

}
?>