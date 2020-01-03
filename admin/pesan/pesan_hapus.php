<?php
	
	mysqli_query($koneksi, "DELETE FROM pesan WHERE
id_pesan='$_GET[id]'") or die(mysqli_error($koneksi));

		echo"Data Telah di Hapus";
		echo"<meta http-equiv='refresh' content='1;
			 url=?tampil=pesan'>";
?>
