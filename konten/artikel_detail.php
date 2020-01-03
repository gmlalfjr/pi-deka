<style type="text/css">
	.artikel {
		line-height: 24px; 
		font-size: 14px;
		font: Baskerville, "Palatino Linotype", Palatino, "Century Schoolbook L", "Times New Roman", "serif";
		font-variant: normal;
		word-spacing: 8px;
		text-align: justify;
	}
</style>

<?php
	if(!defined("INDEX")) die("---");
	
	include_once("library/fungsi_tglindonesia.php");

	$artikel	= mysqli_query($koneksi, "update artikel set hits=hits+1
Where id_artikel='$_GET[id]'");

	$artikel	= mysqli_query($koneksi, "select * from artikel
Where id_artikel='$_GET[id]'");
	$data	= mysqli_fetch_array($artikel);
	$isi	= $data['isi'];
	$tanggal = tgl_indonesia($data['tanggal']);
	
?>
	<div class="artikel" style="margin-bottom: 10px;">
    	<h3 class="judul"><?= $data['judul']; ?></h3>
		<p style="word-spacing: 2px;"><em><?= $tanggal ?></em></p>
        <p>
        	<?php if($data['gambar']!="") ?>
            <a class="nanogallery" href="gambar/artikel/
				<?= $data['gambar']; ?>"
			title="<?= $data['judul']; ?>">
            
				<img src="gambar/artikel/
					<?= $data['gambar']; ?>"
                class="gambar-artikel" width="300" height="300">
            </a>
            &nbsp;&nbsp;&nbsp;&nbsp;<?=  $isi; ?>
		</p>
    </div>
<hr>
    
<!-- Bagian 1 /-->
<?php
	$komentar	= mysqli_query($koneksi, "Select * From komentar 
	 Where id_artikel='$_GET[id]'");
	$jmlkomentar	= mysqli_num_rows($komentar);
?>
	<h3><?= $jmlkomentar; ?> Komentar </h3>
	<hr>
<?php
	while($datakomen = mysqli_fetch_array($komentar)){
?>
	<div class="komentar">
    	<h5><b><?= $datakomen['nama']; ?> - <?=
		$datakomen['tanggal']; ?></b></h5>
        <p><?= $datakomen['komentar']; ?></p>
    </div>
	<hr>
<?php
	}
?>

	<!-- Bagian 2 /-->
<h3> Isi Komentar </h3>
<form method="post" action="?tampil=komentar_proses"
	class="form-horizontal well">
<input type="hidden" name="id" value="<?=
	$data['id_artikel']; ?>" >
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
		<label class="control-label col-md-2" for="komentar">Komentar</label>
		<div class="col-md-10">
			<textarea name="komentar" id="komentar" class="form-control" style="resize: none" rows="10"></textarea>
		</div>
	</div>
    <div class="form-group">
		<div class="col-md-10 col-md-offset-2">
			<input type="submit" value="Kirim Pesan" class="btn btn-primary">
		</div>
	</div>
</form>