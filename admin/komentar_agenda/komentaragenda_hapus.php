<?php

	$hapus	= mysqli_query($koneksi, "DELETE FROM komentar_agenda WHERE
id_komentar='$_GET[id]'") or die(mysqli_error($koneksi));

	if($hapus){
		echo"Data Telah di Hapus";
		echo"<meta http-equiv='refresh' content='1;
			url=?tampil=komentaragenda'>";
	}
?>
