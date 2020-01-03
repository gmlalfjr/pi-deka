<?php
	if(!defined("INDEX")) die("---");
?>
<style type="text/css">
	.isi {line-height: 26px;}
	.judul {line-height: 26px;}
	.gambar {line-height: 26px;}
</style>

<h2 class="sub-header"> Tambah Agenda </h2>

<form name="tambah" method="post"
action="?tampil=agenda_tambahproses"
enctype="multipart/form-data" class="form-horizontal">
<div class="form-group">
	<label class="label-control col-md-2">
		Judul Agenda
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
		Isi Agenda
	</label>
	<div class="col-md-8">
		<textarea class="form-control" name="isi">
		</textarea>
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