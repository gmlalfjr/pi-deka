<style type="text/css">
	.isi {line-height: 26px;}
	.judul {line-height: 26px;}
	.gambar {line-height: 26px;}
</style>

<?php
	if(!defined("INDEX")) die("---");

	$tampil	= mysqli_query($koneksi, "SELECT * FROM artikel 
WHERE id_artikel='$_GET[id]'") or die(mysqli_error($koneksi));
	$data	= mysqli_fetch_array($tampil);
?>

<h2 class="sub-header"> Edit Artikel </h2>

<form name="edit" method="post"
action="?tampil=artikel_editproses"
enctype="multipart/form-data" class="form-horizontal">
	<input type="hidden" name="id" 
value="<?= $data['id_artikel']; ?>">

<div class="form-group">
	<label class="label-control col-md-2">
		Judul Artikel
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
		<img src="../gambar/artikel/<?= $data['gambar'];?>" width="300px" class="thumbnail">
		<input type="file" class="form-control" name="gambar">
	</div>
</div>
	
<div class="form-group">
	<label class="label-control col-md-2">
		Isi
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