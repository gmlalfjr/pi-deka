<h2 class="sub-header"> Data Galeri </h2>

<a href="?tampil=galeri_tambah" class="btn btn-primary">Tambah Galeri</a><br><br>
<div class="table-responsive"></div>
<table class="table table-hover table-bordered">
<tr>
	<th>No</th>
    <th>Foto</th>
    <th>Judul Foto</th>
    <th>Tanggal</th>
    <th>Aksi</th>
</tr>

<?php
	$no = 1;
	$tampil = mysqli_query($koneksi, "SELECT * FROM galeri") 
		or die(mysqli_error($koneksi));
while($data=mysqli_fetch_array($tampil)){
?>

<tr>
	<td> <?= $no; ?> </td>
    <td><img src="../gambar/galeri/<?= $data['gambar']; ?>" width="100"> </td>
    <td> <?= $data['judul']; ?> </td>
    <td> <?= $data['tanggal']; ?> </td>
    <td> 
	 <a href="?tampil=galeri_edit&id=
        	<?php echo $data['id_galeri']; ?>" class="btn btn-primary"> Edit </a> |
        <a href="?tampil=galeri_hapus&id=
        	<?php echo $data['id_galeri']; ?>" class="btn btn-danger"> Hapus </a>
    </td>
</tr>

<?php
		$no++;
	}
?>

</table>