<?php

	$nama_gambar	= $_FILES['gambar'] ['name'];
	$lokasi_gambar	= $_FILES['gambar'] ['tmp_name'];
	$tipe_gambar	= $_FILES['gambar'] ['type'];
	
	$tanggal		= date('Ymd');
	$isi			= addslashes($_POST['isi']);
		
	if($lokasi_gambar==" "){
		$input = mysqli_query($koneksi, "UPDATE agenda SET
			judul	= '$_POST[judul]',
			isi		= '$isi',
		WHERE id_agenda='$_POST[id]'")
		or die(mysqli_error($koneksi));
	}else{
		$data = mysqli_fetch_array(mysqli_query($koneksi, 
		"SELECT * FROM agenda WHERE id_agenda='$_POST[id]'"));
		
	if($data['gambar'] != "")
			unlink("../gambar/agenda/$data[gambar]");
			
	move_uploaded_file($lokasi_gambar,
			"../gambar/agenda/$nama_gambar");
		
	$edit = mysqli_query($koneksi, "UPDATE agenda SET
			judul	= '$_POST[judul]',
			isi		= '$isi',
			gambar	= '$nama_gambar'
		WHERE id_agenda='$_POST[id]'")
		or die(mysqli_error($koneksi));
	}
	
	if($edit){
		echo"Data telah di Edit";
		echo"<meta http-equiv='refresh' content='1;
				url=?tampil=agenda'>";
	}
?>