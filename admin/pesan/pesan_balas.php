<?php
	if(!defined("INDEX")) die("---");

	$tampil	= mysqli_query($koneksi, "SELECT * FROM pesan 
WHERE id_pesan='$_GET[id]'") or die(mysqli_error($koneksi));
	$data	= mysqli_fetch_array($tampil);
?>

<h2 class="sub-header">Balas Pesan</h2>

<form name="edit" method="post"
action="?tampil=pesan_balasproses" class="form-horizontal">
	<input type="hidden" name="id" 
value="<?= $data['id_pesan']; ?>">

<div class="form-group">
	<label class="label-control col-md-2">
		Kepada
	</label>
	<div class="col-md-4">
		<input type="text" class="form-control" name="email" value="<?= $data['email']; ?>">
	</div>
</div>

<div class="form-group">
	<label class="label-control col-md-2">
		Subjek
	</label>
	<div class="col-md-4">
		<input type="text" class="form-control" name="subjek" value="Re : <?= $data['subjek']; ?>">
	</div>
</div>

<div class="form-group">
	<label class="label-control col-md-2">
		Pesan
	</label>
	<div class="col-md-8">
		<textarea class="form-control" name="pesan"><?= $data['pesan']; ?>
		</textarea>
	</div>
</div>
	
<div class="form-group">
	<label class="label-control col-md-2">
		Balas
	</label>
	<div class="col-md-8">
		<textarea class="form-control" name="balas" ><?= $data['balasan']; ?>
		</textarea>
	</div>
</div>

<div class="form-group">
	<label class="label-control col-md-2">
	</label>
	<div class="col-md-4">
		<input type="submit" class="btn btn-primary" name="edit" value="Balas">
	</div>
</div>
</form>