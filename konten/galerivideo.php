
<ul class="breadcrumb">
	<li>Home</li>
    <li class="active">Galeri Video</li>
    <li><a href="?tampil=galerivideo">Video</a></li>
</ul>

<div class="galeri">
	<div class="row">
<?php	
	$no	= 1;
			
	$hal	= isset($_GET['hal']) ? $_GET['hal']: 1;
	$batas	= 6;
	$posisi	= ($hal-1) * $batas ;
	
	$artikel	= mysqli_query($koneksi, "select * from video
Order by id_video desc limit $posisi,$batas ");
	while($data= mysqli_fetch_array($artikel)){
?>
	<div class="col-md-6">
		<td> <?php echo $data['link_video']; ?> </td>    
	</div>
<?php 
	if($no%2 == 0) echo"</div><div class='row'>";
	$no++;
  }			     
?>
	</div>
</div>
<div style="margin-bottom: 20px">
</div>
<?php
		
    $semua 		= mysqli_query($koneksi, "select * from video");
	$jmldata	= mysqli_num_rows($semua);
	$jmlhal		= ceil($jmldata/$batas);
	$sebelumnya	= $hal - 1;
	$berikutnya	= $hal + 1;
	
	echo"<div class='paging'>";
	
	// bagian 1

	
	// bagian 2
	for($i=1; $i<=$jmlhal; $i++){
		if($i == $hal) echo"<span class='btn btn-default'> <b>$i</b> </span>";
		else echo"<span class='btn btn-default'><a href='?tampil=galerifoto&hal=$i'>
					$i </a></span>";
	}
	
	// bagian 3

	
	echo"</div>";
?>