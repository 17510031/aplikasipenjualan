<?php
	$host='localhost';
	$db_user='root';
	$db_pass='';
	$db_name='db_penjualan1';
 
	$conn=mysqli_connect($host,$db_user,$db_pass,$db_name);
	if (mysqli_connect_error()) {
	echo "tidak bisa tersambung ke database";
}
	
?>