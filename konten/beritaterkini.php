<style type="text/css">
	.artikel {
		font-size: 13px;
		word-spacing: 5px;
		text-align: justify;
	}
</style>

<?php
	if(!defined("INDEX")) die("---");
	
	include_once("library/fungsi_tglindonesia.php");

	$hal	= isset($_GET['hal']) ? $_GET['hal']: 1;
	$batas	= 4;
	$posisi	= ($hal-1) * $batas ;
	
	$artikel	= mysqli_query($koneksi, "select * from artikel
		order by id_artikel desc limit $posisi, $batas") or die(mysqli_error($koneksi));
	while($data=mysqli_fetch_array($artikel)){
		$isi	= substr($data['isi'],0,700);
		$isi	= substr($data['isi'],0,strrpos($isi," "));
	$tanggal = tgl_indonesia($data['tanggal']);
?>
	<div class="artikel">
    	<h3 class="judul" align="left"><a href="?tampil=artikel_detail&id=
    				<?= $data['id_artikel']; ?>"> 
		<?= $data['judul']; ?> </a></h3>
		<p style="word-spacing: 2px;"><em><?= $tanggal ?></em></p>
        <div class="row">
        	<div class="col-md-4">
        		<?php if($data['gambar']!="") ?>
        			<a class="nanogallery" href="gambar/artikel/
						<?= $data['gambar']; ?>"
					title="<?= $data['judul']; ?>">
        
				<img src="gambar/artikel/<?= $data['gambar'];?>"
            		class="img-thumbnail" width="100%">
         		</a>
            </div>
            <div class="col-md-8">
        		<p style="line-height: 22px">&nbsp;&nbsp;&nbsp;&nbsp;<?= $isi; ?> ....
    			<a href="?tampil=artikel_detail&id=
    				<?= $data['id_artikel']; ?>"
                    class="btn btn-primary btn-xs">Selengkapnya</a>
				</p>
        </div>
    </div>
</div>
<?php
	}
	
    $semua 		= mysqli_query($koneksi, "select * from artikel");
	$jmldata	= mysqli_num_rows($semua);
	$jmlhal		= ceil($jmldata/$batas);
	$sebelumnya	= $hal - 1;
	$berikutnya	= $hal + 1;
	
	echo"<div class='paging'>";
	
	// bagian 1
	if($hal > 1){
		echo"<span class='btn btn-default'><a href='?tampil=home&hal=1'>
				Pertama </a></span>";
		echo"<span class='btn btn-default'><a href='?tampil=home&hal=$sebelumnya'>
				Sebelumnya </a></span>";
	}else{
		echo"<span class='btn btn-default'> Pertama </span>";
		echo"<span class='btn btn-default'> Sebelumnya </span>";
	}
	
	// bagian 2
	for($i=1; $i<=$jmlhal; $i++){
		if($i == $hal) echo"<span class='btn btn-default'> <b>$i</b> </span>";
		else echo"<span class='btn btn-default'><a href='?tampil=home&hal=$i'>
					$i </a></span>";
	}
	
	// bagian 3
	if($hal < $jmlhal){
		echo"<span class='btn btn-default'><a href='?tampil=home&hal=$berikutnya'>
					Berikutnya </a></span>";
		echo"<span class='btn btn-default'><a href='?tampil=home&hal=$jmlhal'>
					Terakhir </a></span>";
	}else{
		echo"<span class='btn btn-default'>	Berikutnya </span>";
		echo"<span class='btn btn-default'> Terakhir </span>";
	}
	
	echo"</div>";
?>