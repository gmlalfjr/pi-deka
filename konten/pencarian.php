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
	$batas	= 5;
	$posisi	= ($hal-1) * $batas ;
	
	$artikel	= mysqli_query($koneksi, "select * from artikel
		Where isi LIKE '%$_REQUEST[kata]%' or judul LIKE '%$_REQUEST[kata]%' ORDER BY id_artikel DESC LIMIT
		$posisi, $batas") or die(mysqli_error($koneksi));
		
	$semua 		= mysqli_query($koneksi, "select * from artikel");
	$jmldata	= mysqli_num_rows($semua);
	if($jmldata > 0) {
	
	echo"Hasil Pencarian dari <b>$_REQUEST[kata]</b>";	
	while($data=mysqli_fetch_array($artikel)){
		$isi	= substr($data['isi'],0,700);
		$isi	= substr($data['isi'],0,strrpos($isi," "));
	$tanggal = tgl_indonesia($data['tanggal']);
?>	
<div class="artikel">
    	<h3 class="judul"><a href="?tampil=artikel_detail&id=
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
            		class="img-thumbnail" width="225" height="175" style="margin-bottom: 20px;">
         		</a>
            </div>
            <div class="col-md-8" style="padding-top: 8px;">
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
	
	$jmlhal		= ceil($jmldata/$batas);
	$sebelumnya	= $hal - 1;
	$berikutnya	= $hal + 1;
	
	echo"<div class='paging'>";
	
	
	if($hal > 1){
		echo"<span><a href='?tampil=pencarian&kata=
			$_REQUEST[kata]&hal=1'> Pertama </a></span>";
		echo"<span><a href='?tampil=pencarian&kata=
			$_REQUEST[kata]&hal=$sebelumnya'> Sebelumnya </a></span>";
	}else{
		echo"<span> Pertama </span>";
		echo"<span> Sebelumnya </span>";
	}
	
	
	for($i=1; $i<=$jmlhal; $i++){
		if($i == $hal) echo"<span> <b>$i</b> </span>";
		else echo"<span><a href='?tampil=pencarian&kata=
			$_REQUEST[kata]&hal=$i'>
					$i </a></span>";
	}
	
	
	if($hal < $jmlhal){
		echo"<span><a href='?tampil=pencarian&kata=
			$_REQUEST[kata]&hal=$berikutnya'>
					Berikutnya </a></span>";
		echo"<span><a href='?tampil=pencarian&kata=
			$_REQUEST[kata]&hal=$jmlhal'>
					Terakhir </a></span>";
	}else{
		echo"<span>	Berikutnya </span>";
		echo"<span> Terakhir </span>";
	}	
	}else{
		echo "Kata yang dicari tidak ada";
	}
	
	echo"</div>";

?>	
	