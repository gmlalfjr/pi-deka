<h2 class="sub-header"> Data Menu Footer </h2>
<a href="?tampil=menufooter_tambah" class="btn btn-primary">Tambah Menu Footer</a><br><br>

<div class="table-responsive"></div>
<table class="table table-hover table-bordered">
<tr>
	<th>No</th>
    <th>Judul Menu</th>
    <th>Link</th>
    <th>Urutan</th>
	<th>Nilai</th>
    <th>Aksi</th>
</tr>

<?php
	$no = 1;
	$sql = mysqli_query($koneksi, "SELECT * FROM menu_footer ORDER BY 
urutan, nilai") or die(mysqli_error($koneksi));
	while($data=mysqli_fetch_array($sql)){
?>

<tr>
	<td> <?php echo $no; ?> </td>
    <td> <?php echo $data['judul']; ?> </td>
    <td> <?php echo $data['link']; ?> </td>
    <td> <?php echo $data['urutan']; ?> </td>
    <td> <?php echo $data['nilai']; ?> </td>
    <td> 
		<a href="?tampil=menufooter_edit&id=
        	<?php echo $data['id_menu']; ?>" class="btn btn-primary"> Edit </a> |
        <a href="?tampil=menufooter_hapus&id=
        	<?php echo $data['id_menu']; ?>"  class="btn btn-danger"> Hapus </a>
    </td>
</tr>

<?php
		$no++;
	}
?>

</table>