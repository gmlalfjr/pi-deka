<?php

	$data = mysqli_fetch_array(mysqli_query($koneksi, 
		"SELECT * FROM agenda WHERE id_agenda='$_GET[id]'"));
	
	if($data['gambar'] != "")
		unlink("../gambar/agenda/$data[gambar]");
	
	$hapus	= mysqli_query($koneksi, "DELETE FROM agenda WHERE
id_agenda='$_GET[id]'") or die(mysqli_error($koneksi));

	$hapus1	= mysqli_query($koneksi, "DELETE FROM komentar_agenda WHERE
id_artikel='$_GET[id]'") or die(mysqli_error($koneksi));

	if($hapus){
		echo"Data Telah di Hapus";
		echo"<meta http-equiv='refresh' content='1;
			 url=?tampil=agenda'>";
	}
?>
