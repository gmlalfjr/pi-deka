<?php
	$nama_gambar	= $_FILES['gambar'] ['name'];
	$lokasi_gambar	= $_FILES['gambar'] ['tmp_name'];
	$tipe_gambar	= $_FILES['gambar'] ['type'];
	
	$tanggal		= date('Ymd');
		
	if($lokasi_gambar==" "){
		$input = mysqli_query($koneksi, "UPDATE galeri SET
			judul	= '$_POST[judul]',
		WHERE id_galeri='$_POST[id]'")
		or die(mysqli_error($koneksi));
	}else{
		$data = mysqli_fetch_array(mysqli_query($koneksi, 
		"SELECT * FROM galeri WHERE id_galeri='$_POST[id]'"));
		
	if($data['gambar'] != "")
			unlink("../gambar/galeri/$data[gambar]");
			
	move_uploaded_file($lokasi_gambar,
			"../gambar/galeri/$nama_gambar");
		
	$edit = mysqli_query($koneksi, "UPDATE galeri SET
			judul	= '$_POST[judul]',
			gambar	= '$nama_gambar'
		WHERE id_galeri='$_POST[id]'")
		or die(mysqli_error($koneksi));
	}
	
	if($edit){
		echo"Data telah di Edit";
		echo"<meta http-equiv='refresh' content='1;
				url=?tampil=galeri'>";
	}
?>