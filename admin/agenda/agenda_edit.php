<style type="text/css">
	.isi {line-height: 26px;}
	.judul {line-height: 26px;}
	.gambar {line-height: 26px;}
</style>

<?php
	if(!defined("INDEX")) die("---");

	$tampil	= mysqli_query($koneksi, "SELECT * FROM agenda 
WHERE id_agenda='$_GET[id]'") or die(mysqli_error($koneksi));
	$data	= mysqli_fetch_array($tampil);
?>

<h2 class="sub-header"> Edit Agenda </h2>

<form name="edit" method="post"
action="?tampil=agenda_editproses"
enctype="multipart/form-data" class="form-horizontal">
	<input type="hidden" name="id" 
value="<?= $data['id_agenda']; ?>">

<div class="form-group">
	<label class="label-control col-md-2">
		Judul Agenda
	</label>
	<div class="col-md-4">
		<input type="text" class="form-control" name="judul" size="100" value="<?= $data['judul'];?>">
	</div>
</div>
	
<div class="form-group">
	<label class="label-control col-md-2">
		Gambar
	</label>
	<div class="col-md-4">
		<img src="../gambar/agenda/<?= $data['gambar'];?>" width="300px" class="thumbnail">
		<input type="file" class="form-control" name="gambar" multiple>
	</div>
</div>
	
<div class="form-group">
	<label class="label-control col-md-2">
		Isi Agenda
	</label>
	<div class="col-md-10">
		<textarea class="form-control" name="isi" cols="1000" rows="15"><?= $data['isi'];?></textarea>
	</div>
</div>
	
<div class="form-group">
	<label class="label-control col-md-2">

	</label>
	<div class="col-md-4">
		<input type="submit" class="btn btn-primary" name="edit" value="edit">
	</div>
</div>

</form>