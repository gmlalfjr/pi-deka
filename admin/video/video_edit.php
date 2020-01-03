<?php
	if(!defined("INDEX")) die("---");

	$tampil	= mysqli_query($koneksi, "SELECT * FROM video 
WHERE id_video='$_GET[id]'") or die(mysqli_error($koneksi));
	$data	= mysqli_fetch_array($tampil);
?>

<h2 class="sub-header">Edit Video</h2>

<form name="edit" method="post"
action="?tampil=video_editproses"
enctype="multipart/form-data" class="form-horizontal">
	<input type="hidden" name="id" 
value="<?= $data['id_video']; ?>">
	
<div class="form-group">
	<label class="label-control col-md-2">
		Judul Video
	</label>
	<div class="col-md-4">
		<input type="text" class="form-control" name="judul" value="<?= $data['judul']; ?>">
	</div>
</div>

<div class="form-group">
	<label class="label-control col-md-2">
		Link Video
	</label>
	<div class="col-md-10">
		<textarea class="form-control" name="link_video" value=''><?= $data['link_video']; ?></textarea>
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