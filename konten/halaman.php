<style type="text/css">
.p { letter-spacing:0,5px; text-indent:50px; word-spacing:1,5px;}

</style>
<?php
	if(!defined("INDEX")) die("---");
	
	$artikel	= mysqli_query($koneksi,  "select * from halaman
Where id_halaman='$_GET[id]'");
	$data	= mysqli_fetch_array($artikel);
	$isi	= $data['isi'];
	
?>
	<div class="halaman">
    	<h2 class="judul"><?= $data['judul']; ?></h2>
        <p class="p">
            <?= $isi; ?>
		</p>
    </div>