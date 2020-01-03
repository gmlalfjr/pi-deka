<link rel="stylesheet" type="text/css"
	href="plugin/validation/demo/site-demos.css">
<script type="text/javascript"
	src="plugin/validation/dist/jquery.validate.min.js"></script>
<script type="text/javascript">
	$(function(){
		$('#kontakkami').validity(function(){
			$('#nama').require(' Nama Tidak Boleh Kosong! ');
			$('#email').require(' Email Tidak Boleh Kosong! ')
						.match('email','Email tidak valid!');
			$('#pesan').require(' Pesan Tidak Boleh Kosong! ');
		});
	});
</script>

<?php
	if(!defined("INDEX")) die("---");
?>

<ul class="breadcrumb">
	<li>Home</li>
	<li class="active"> Kontak Kami </li>
</ul>

<form id="kontakkami" method="post" action="?tampil=kontak_proses"
	  class="form-horizontal well">
    <div class="form-group">
		<label class="control-label col-md-2" for="nama">Nama</label>
		<div class="col-md-10">
			<input type="text" name="nama" id="nama" class="form-control">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-md-2" for="email">Email</label>
		<div class="col-md-10">
			<input type="text" name="email" id="email" class="form-control">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-md-2" for="komentar">Pesan</label>
		<div class="col-md-10">
			<textarea name="komentar" id="komentar" class="form-control"></textarea>
		</div>
	</div>
    <div class="form-group">
		<div class="col-md-10 col-md-offset-2">
			<input type="submit" value="Kirim Pesan" class="btn btn-primary">
		</div>
	</div>
</form>