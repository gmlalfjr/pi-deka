<h2 class="sub-header"> Data Video </h2>

<a href="?tampil=video_tambah" class="btn btn-primary">Tambah Video</a><br><br>
<div class="table-responsive"></div>
<table class="table table-hover table-bordered">
<tr>
	<th>No</th>
	<th>Judul Video</th>
    <th>Link Video (Embed Code)</th>
    <th>Tanggal</th>
    <th>Aksi</th>
</tr>

<?php
	$no = 1;
	$tampil = mysqli_query($koneksi, "SELECT * FROM video") 
		or die(mysqli_error($koneksi));
while($data=mysqli_fetch_array($tampil)){
?>

<tr>
	<td> <?= $no; ?> </td>
    <td> <?= $data['judul']; ?> </td>
	<td> <a href='<?= $data['video']; ?>'><?= $data['link_video']; ?></a> </td>
    <td> <?= $data['tanggal']; ?> </td>
    <td> 
	 <a href="?tampil=video_edit&id=
        	<?php echo $data['id_video']; ?>" class="btn btn-primary"> Edit </a> |
        <a href="?tampil=video_hapus&id=
        	<?php echo $data['id_video']; ?>" class="btn btn-danger"> Hapus </a>
    </td>
</tr>

<?php
		$no++;
	}
?>

</table>