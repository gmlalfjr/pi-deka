<h2 class="sub-header"> Data Menu </h2>
<a href="?tampil=menu_tambah" class="btn btn-primary">Tambah Menu</a>

<div class="table-responsive" style="margin-top: 15px;"></div>
<table class="table table-hover table-bordered">
<tr>
	<th>No</th>
    <th>Judul Menu</th>
    <th>Link</th>
    <th>Urutan</th>
    <th>Aksi</th>
</tr>

<?php
	$no = 1;
	$sql = mysqli_query($koneksi, "SELECT * FROM menu ORDER BY 
urutan") or die(mysqli_error($koneksi));
	while($data=mysqli_fetch_array($sql)){
?>

<tr>
	<td> <?php echo $no; ?> </td>
    <td> <?php echo $data['judul']; ?> </td>
    <td> <?php echo $data['link']; ?> </td>
    <td> <?php echo $data['urutan']; ?> </td>
    <td> 
		<a href="?tampil=menu_edit&id=
        	<?php echo $data['id_menu']; ?>" class="btn btn-primary"> Edit </a> |
        <a href="?tampil=menu_hapus&id=
        	<?php echo $data['id_menu']; ?>"  class="btn btn-danger"> Hapus </a>
    </td>
</tr>

<?php
		$no++;
	}
?>

</table>