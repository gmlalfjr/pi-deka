<?php
	if(!defined("INDEX")) die("---");
	
	$nama	= $_POST['nama'];
	$email	= $_POST['email'];
	$pesan	= $_POST['pesan'];
	
	$subjek	= "pesan dari pengunjung website";
	$dari	= "$email";
	$tanggal= date('Ymd');
	
	mail($email,$subjek,$pesan,$dari);
	
	mysqli_query($koneksi, "Insert into pesan set
			nama	= '$nama',
			email	= '$email',
			pesan	= '$pesan',
			subjek	= '$subjek',
			tanggal = '$tanggal'
	") or die (mysqli_error($koneksi));
	
	echo"Pesan Telah Terkirim";
	echo"<meta http-equiv='refresh' content='1;
			url=?tampil=kontak'>";
?>