<?php 
include 'database.php';
$hari = $_POST['hari'];
$jumlah_dipilih = count($makanan);
 
for($x=0;$x<$jumlah_dipilih;$x++){
	mysql_query("INSERT INTO jadwalasisten values ('','$makanan[$x]')");
}
 
header("location:index.php");
 
?>