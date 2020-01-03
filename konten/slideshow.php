<?php
	if(!defined("INDEX")) die("---");
?>

<div id="mycarousel" class="carousel slide" data-ride="carousel">

	<ol class="carousel-indicators">
    <?php
		
		$hal	= isset($_GET['hal']) ? $_GET['hal']: 1;
		$batas	= 5;
		$posisi	= ($hal-1) * $batas ;
		
		$artikel	= mysqli_query($koneksi, "select * from artikel
			order by id_artikel desc limit $posisi, $batas");
		$no=0;
		while($data=mysqli_fetch_array($artikel)){
	?>
		<li data-target="#mycarousel" data-slide-to="<?= $no ?>"
        <?php if($no == 0) echo' class="active" '; ?>
		></li>
    
    <?php
			$no++;
		}
	?>
	</ol>
    
    <div class="carousel-inner" role="listbox">
    <?php
		
		$hal	= isset($_GET['hal']) ? $_GET['hal']: 1;
		$batas	= 5;
		$posisi	= ($hal-1) * $batas ;
		
		$artikel	= mysqli_query($koneksi, "select * from artikel
			order by id_artikel desc limit  $posisi, $batas");
		$no=0;
		while($data=mysqli_fetch_array($artikel)){
		$isi	= substr($data['isi'],0300);
		$isi	= substr($data['isi'],0,strrpos($isi," "));
	?>
	
    <div class="item
		<?php if($no == 0) echo' active '; ?>">
    <a class="nanogallery" href="gambar/artikel/
			<?= $data['gambar']; ?>"
		title="<?= $data['judul']; ?>">
    
    	<img src="gambar/artikel/<?= $data['gambar'];?>"
    		width="100%">
    </div>
<?php
		$no++;
	}
?>
</div>
  <a class="left carousel-control" href="#mycarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#mycarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>