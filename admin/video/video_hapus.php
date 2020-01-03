<?php

	$data = mysqli_fetch_array(mysqli_query($koneksi, 
		"SELECT * FROM video WHERE id_video='$_GET[id]'"));
	
	$hapus	= mysqli_query($koneksi, "DELETE FROM video WHERE
id_video='$_GET[id]'") or die(mysqli_error($koneksi));

	if($hapus){
		echo"Data Telah di Hapus";
		echo"<meta http-equiv='refresh' content='1;
			 url=?tampil=video'>";
	}
?>
