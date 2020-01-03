<?php
	if(!defined("INDEX")) die("---");
?>

<h2 class="sub-header"> Tambah Menu </h2>

<form name="tambah" method="post"
action="?tampil=menu_tambahproses" class="form-horizontal">
<div class="form-group">
	<label class="label-control col-md-2">
		Judul Menu
	</label>
	<div class="col-md-4">
		<input type="text" class="form-control" name="judul">
	</div>
</div>	

<div class="form-group">
	<label class="label-control col-md-2">
		Link
	</label>
	<div class="col-md-4">
		<input type="text" class="form-control" name="link">
	</div>
</div>

<div class="form-group">
	<label class="label-control col-md-2">
		Urutan
	</label>
	<div class="col-md-4">
		<input type="text" class="form-control" name="urutan">
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