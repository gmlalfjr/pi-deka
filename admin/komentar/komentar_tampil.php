<h2 class="sub-header"> Data Komentar Artikel</h2>
<a href="?tampil=komentar1" class="btn btn-primary">Back</a>

<div class="table-responsive" style="margin-top: 15px;"></div>
<table class="table table-hover table-bordered">
<tr>
	<th>No</th>
	<th>Id_Komentar</th>
	<th>Id_Artikel</th>
	<th>Nama</th>
    <th>Email</th>
	<th>Tanggal</th>
	<th>Komentar</th>
</tr>

<?php
	$no = 1;
	$sql = mysqli_query($koneksi, "SELECT * FROM komentar 
	ORDER BY id_komentar") or die(mysqli_error($koneksi));
	while($data=mysqli_fetch_array($sql)){
?>

<tr>
	<td> <?php echo $no; ?> </td>
    <td> <?php echo $data['id_komentar']; ?> </td>
    <td> <?php echo $data['id_artikel']; ?> </td>
    <td> <?php echo $data['nama']; ?> </td>
    <td> <?php echo $data['email']; ?> </td>
	<td> <?php echo $data['tanggal']; ?> </td>
	<td> <?php echo $data['komentar']; ?> </td>
	<td><a href="?tampil=komentar_hapus&id=
        	<?php echo $data['id_komentar']; ?>" class="btn btn-danger"> Hapus </a>
    </td>
</tr>

<?php
		$no++;
	}
?>

</table>

