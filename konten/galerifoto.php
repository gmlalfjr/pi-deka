<ul class="breadcrumb">
	<li>Home</li>
    <li><a href="?tampil=galeri">Galeri</a></li>
    <li class="active">Album</li>
	<li></li>
</ul>

<div class="galeri">
	<div class="row">
    
<?php
	$no	= 1;	
	
	$hal	= isset($_GET['hal']) ? $_GET['hal']: 1;
	$batas	= 12;
	$posisi	= ($hal-1) * $batas ;
	
	$artikel	= mysqli_query($koneksi, "select * from galeri
Order by id_galeri desc limit $posisi, $batas") or die(mysqli_error($koneksi));
	while($data= mysqli_fetch_array($artikel)){
?>
	<div class="col-md-4">
		<a class="nanogallery" href="gambar/galeri/
			<?= $data['gambar']; ?>"
		title="<?= $data['judul']; ?>">
		
    	<img src="gambar/galeri/<?= $data['gambar']; ?>"
        width="100%" height="200px" class="thumbnail">
        <p align="center"> <?= $data['judul']; ?>
		</p>
    	</a>
    </div>
<?php 
	if($no%3 == 0) echo"</div><div class='row'>";
	$no++;
			     
?>
<?php
}
    $semua 		= mysqli_query($koneksi, "select * from galeri");
	$jmldata	= mysqli_num_rows($semua);
	$jmlhal		= ceil($jmldata/$batas);
	$sebelumnya	= $hal - 1;
	$berikutnya	= $hal + 1;
	
	echo"<div class='paging1'>";
	
	// bagian 1
	if($hal > 1){
		echo"<span class='btn btn-default'><a href='?tampil=galerifoto&hal=1'>
				Pertama </a></span>";
		echo"<span class='btn btn-default'><a href='?tampil=galerifoto&hal=$sebelumnya'>
				Sebelumnya </a></span>";
	}else{
		echo"<span class='btn btn-default'> Pertama </span>";
		echo"<span class='btn btn-default'> Sebelumnya </span>";
	}
	
	// bagian 2
	for($i=1; $i<=$jmlhal; $i++){
		if($i == $hal) echo"<span class='btn btn-default'> <b>$i</b> </span>";
		else echo"<span class='btn btn-default'><a href='?tampil=galerifoto&hal=$i'>
					$i </a></span>";
	}
	
	// bagian 3
	if($hal < $jmlhal){
		echo"<span class='btn btn-default'><a href='?tampil=galerifoto&hal=$berikutnya'>
					Berikutnya </a></span>";
		echo"<span class='btn btn-default'><a href='?tampil=galerifoto&hal=$jmlhal'>
					Terakhir </a></span>";
	}else{
		echo"<span class='btn btn-default'>	Berikutnya </span>";
		echo"<span class='btn btn-default'> Terakhir </span>";
	}
	
	echo"</div>";
?>
	</div>
</div>
