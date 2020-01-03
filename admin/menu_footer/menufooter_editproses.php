<?php
	$edit = mysqli_query($koneksi, "UPDATE menu_footer SET 
			judul 	= '$_POST[judul]',
			link  	= '$_POST[link]',
			nilai	= '$_POST[nilai]',
			urutan	= '$_POST[urutan]'
	WHERE id_menu='$_POST[id]'") or die(mysqli_error($koneksi));
	
if($edit){
	echo"<p>Data Telah di Edit</p>";
	echo"<meta http-equiv='refresh' content='1;
		url=?tampil=menufooter'>";
}
?>