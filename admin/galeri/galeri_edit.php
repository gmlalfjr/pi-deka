<?php
	if(!defined("INDEX")) die("---");

	$tampil	= mysqli_query($koneksi, "SELECT * FROM galeri 
WHERE id_galeri='$_GET[id]'") or die(mysqli_error($koneksi));
	$data	= mysqli_fetch_array($tampil);
?>

<h2 class="sub-header">Edit Galeri</h2>

<form name="edit" method="post"
action="?tampil=galeri_editproses"
enctype="multipart/form-data" class="form-horizontal">
	<input type="hidden" name="id" 
value="<?= $data['id_galeri']; ?>">
	
<div class="form-group">
	<label class="label-control col-md-2">
		Judul Galeri
	</label>
	<div class="col-md-4">
		<input type="text" class="form-control" name="judul" value="<?= $data['judul'];
	?>">
	</div>
</div>	

<div class="form-group">
	<label class="label-control col-md-2">
		Gambar
	</label>
	<div class="col-md-4">
		<img src="../gambar/galeri/<?= $data['gambar'];?>" width="300px" class="thumbnail">
		<input type="file" class="form-control" name="gambar">
	</div>
</div>

<div class="form-group">
	<label class="label-control col-md-2">
		
	</label>
	<div class="col-md-4">
		<input type="submit" class="btn btn-primary" name="edit" value="Edit">
	</div>
</div>	
</form>