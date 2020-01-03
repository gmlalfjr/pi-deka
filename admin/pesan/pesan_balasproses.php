<?php
	
	mysqli_query($koneksi, "UPDATE pesan SET balasan='$_POST[balas]'
WHERE id_pesan='$_POST[id]'") or die(mysqli_error($koneksi));

	$email	= mail($_POST['email'],$_POST['subjek'],$_POST['pesan'],
		"From: agam.pro234@gmail.com");

		echo"Data Telah di Hapus";
		echo"<meta http-equiv='refresh' content='1;
			 url=?tampil=pesan'>";
?>