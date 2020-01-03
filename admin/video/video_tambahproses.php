<?php
	
	$tanggal		= date('Ymd');
	
	$input = mysqli_query($koneksi, "INSERT INTO video SET
			judul	= '$_POST[judul]',
			link_video 	= '$_POST[link_video]',
			tanggal	= '$tanggal'
		") or die(mysqli_error($koneksi));
		
	if($input){
		echo"Data telah tersimpan";
		echo"<meta http-equiv='refresh' content='1;
		url=?tampil=video'>";
	}
?>