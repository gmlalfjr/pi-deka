<?php
	$input = mysqli_query($koneksi, "INSERT INTO menu_footer SET
			judul	= '$_POST[judul]',
			link 	= '$_POST[link]',
			nilai	= '$_POST[nilai]',
			urutan	= '$_POST[urutan]'
		") or die(mysqli_error($koneksi));
		
	if($input){
		echo"Data telah tersimpan";
		echo"<meta http-equiv='refresh' content='1;
		url=?tampil=menufooter'>";
	}
?>