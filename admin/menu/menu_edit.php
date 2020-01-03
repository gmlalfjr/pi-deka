<?php
	if(!defined("INDEX")) die("---");

	$sql	= mysqli_query($koneksi, "SELECT * FROM menu WHERE 
id_menu='$_GET[id]'") or die(mysqli_error($koneksi));
	$data	= mysqli_fetch_array($sql);
?>

<h2 class="sub-header"> Edit Menu </h2>

<form name="edit" method="post"
action="?tampil=menu_editproses" 
  class="form-horizontal">
	<input type="hidden" name="id" value="<?= $data['id_menu'];
	?>">
<div class="form-group">
	<label class="label-control col-md-2">
		Judul Menu
	</label>
	<div class="col-md-4">
		<input type="text" class="form-control" name="judul" value="<?= $data['judul'];
	?>">
	</div>
</div>	

<div class="form-group">
	<label class="label-control col-md-2">
		Link
	</label>
	<div class="col-md-4">
		<input type="text" class="form-control" name="link" value="<?= $data['link'];
	?>">
	</div>
</div>

<div class="form-group">
	<label class="label-control col-md-2">
		Urutan
	</label>
	<div class="col-md-4">
		<input type="text" class="form-control" name="urutan" value="<?= $data['urutan'];
	?>">
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