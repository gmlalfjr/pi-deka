<?php
	if(!defined("INDEX")) die("---");
?>

<h2 class="sub-header"> Tambah Galeri </h2>

<form name="tambah" method="post"
action="?tampil=galeri_tambahproses"
enctype="multipart/form-data" class="form-horizontal">
	
<div class="form-group">
	<label class="label-control col-md-2">
		Judul Galeri
	</label>
	<div class="col-md-4">
		<input type="text" class="form-control" name="judul">
	</div>
</div>

<div class="form-group">
	<label class="label-control col-md-2">
		Gambar
	</label>
	<div class="col-md-4">
		<input type="file" class="form-control" name="gambar">
	</div>
</div>

<div class="form-group">
	<label class="label-control col-md-2">
	</label>
	<div class="col-md-4">
		<input type="submit" class="btn btn-primary" name="tambah" value="Tambah">
	</div>
</div>
</form>