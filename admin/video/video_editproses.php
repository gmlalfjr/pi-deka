<?php
	
	$tanggal		= date('Ymd');
	
	$edit = mysqli_query($koneksi, "UPDATE video SET
			judul	= '$_POST[judul]',
			link_video 	= '$_POST[link_video]',
			tanggal	= '$tanggal'
		WHERE id_video='$_POST[id]'") or die(mysqli_error($koneksi));
		
	if($edit){
		echo"Data telah tersimpan";
		echo"<meta http-equiv='refresh' content='1;
		url=?tampil=video'>";
	}
?>