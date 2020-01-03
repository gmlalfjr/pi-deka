<?php
	if(!defined("INDEX")) die("---");
?>

<h2 class="sub-header"> Data Agenda </h2>

<a href="?tampil=agenda_tambah" class="btn btn-primary">Tambah Agenda</a>
<br><br>
<div class="table-responsive"></div>
<table class="table table-hover table-bordered">
<tr>
	<th>No</th>
    <th>Judul Agenda</th>
    <th>Tanggal</th>
    <th>Aksi</th>
</tr>

<?php

include("../library/fungsi_tglindonesia.php");

	$no = 1;
	$tampil = mysqli_query($koneksi, "SELECT * FROM agenda 
ORDER BY id_agenda DESC") 
	or die(mysqli_error($koneksi));
while($data=mysqli_fetch_array($tampil)){
	$tanggal	= tgl_indonesia($data['tanggal']);
?>

<tr>
	<td> <?= $no; ?> </td>
    <td> <?= $data['judul']; ?> </td>
    <td> <?= $tanggal; ?> </td>
    <td> 
	  <a href="?tampil=agenda_edit&id=
        	<?php echo $data['id_agenda']; ?>" class="btn btn-primary btn-sm"> EDIT </a> |
        <a href="?tampil=agenda_hapus&id=
        	<?php echo $data['id_agenda']; ?>" class="btn btn-danger btn-sm"> HAPUS </a>
    </td>
</tr>

<?php
		$no++;
	}
?>

</table>