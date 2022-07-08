<?php
include "koneksi.php"; // Load file koneksi.php
$kode = $_POST['qcari2']; // Ambil data NIS yang dikirim lewat AJAX
$query = mysqli_query($conn, "SELECT * FROM tb_barang WHERE kd_barang='".$kode."'"); // Tampilkan data siswa dengan NIS tersebut
$row = mysqli_num_rows($query); // Hitung ada berapa data dari hasil eksekusi $query
if($row > 0){ // Jika data lebih dari 0
  $data = mysqli_fetch_array($query); // ambil data siswa tersebut
  
  // BUat sebuah array
  $callback = array(
    'status' => 'success', // Set array status dengan success
    'nama2' => $data['nama_barang'],
    'satuan' => $data['satuan'],
    'harga' => $data['harga_beli'],
     // Set array nama dengan isi kolom nama pada tabel siswa
  );
}else{
  $callback = array('status' => 'failed'); // set array status dengan failed
}
echo json_encode($callback); // konversi varibael $callback menjadi JSON
?>