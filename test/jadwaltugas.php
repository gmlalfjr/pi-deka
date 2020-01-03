<?php
		include("database.php");
?><h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Jadwal Tugas Asisten</h2>
<h4><h4>Senin</h4></h4>
<table width="60%" cellspacing="0" class="data" border="1">
<tr>
    <td align="center" bgcolor="#FF9455"><h5>NAMA</h5></td>
</tr>
	
<tr>
	<td></td>
</tr>

<?php
	$no = 1;
	$sql = mysqli_query($koneksi, "SELECT * FROM jadwalasisten") or die(mysqli_error($koneksi));
	while($data=mysqli_fetch_array($sql)){
?>

<tr>
	<td align="center"> <?php echo $data['nama']; ?> </td>
	<td align="center"> <?php echo $data['hari']; ?> </td>
	<td align="center"> <?php echo $data['npm']; ?> </td>
	<td align="center"> <?php echo $data['shift']; ?> </td>
</tr>

<?php
		$no++;
	}
?>

</table>

<br>

<h4><h4>Selasa</h4></h4>
<table width="60%" cellspacing="0" class="data" border="1">
<tr>
	<td align="center" bgcolor="#FF9455"><h5>NAMA</h5></td></tr>
<tr>
	<td></td>
</tr>

<?php
	$no = 1;
	$sql = mysqli_query($koneksi, "SELECT * FROM jadwalasisten 
	Where hari='Selasa'") or die(mysqli_error($koneksi));
	while($data=mysqli_fetch_array($sql)){
?>

<tr>
	<td align="center"> <?php echo $data['hama']; ?> </td>
</tr>

<?php
		$no++;
	}
?>

</table>

<br>


<h4><h4>Rabu</h4></h4>
<table width="60%" cellspacing="0" class="data" border="1">
<tr>
	<td align="center" bgcolor="#FF9455"><h5>NAMA</h5></td></tr>
</tr>
	
<tr>
	<td></td>
</tr>

<?php
	$no = 1;
	$sql = mysqli_query($koneksi, "SELECT * FROM jadwalasisten 
	Where Hari='Rabu'") or die(mysqli_error($koneksi));
	while($data=mysqli_fetch_array($sql)){
?>

<tr>
	<td align="center"> <?php echo $data['Nama']; ?> </td>
</tr>

<?php
		$no++;
	}
?>

</table>

<br>


<h4><h4>Kamis</h4></h4>
<table width="60%" cellspacing="0" class="data" border="1">
<tr>
	<td align="center" bgcolor="#FF9455"><h5>NAMA</h5></td></tr>
</tr>
	
<tr>
	<td></td>
</tr>

<?php
	$no = 1;
	$sql = mysqli_query($koneksi, "SELECT * FROM jadwalasisten 
	Where Hari='Kamis'") or die(mysqli_error($koneksi));
	while($data=mysqli_fetch_array($sql)){
?>

<tr>
	<td align="center"> <?php echo $data['Nama']; ?> </td>
</tr>

<?php
		$no++;
	}
?>

</table>

<br>


<h4><h4>Jumat</h4></h4>
<table width="60%" cellspacing="0" class="data" border="1">
<tr>
	<td align="center" bgcolor="#FF9455"><h5>NAMA</h5></td></tr>
</tr>
	
<tr>
	<td></td>
</tr>

<?php
	$no = 1;
	$sql = mysqli_query($koneksi, "SELECT * FROM jadwalasisten 
	Where Hari='Jumat'") or die(mysqli_error($koneksi));
	while($data=mysqli_fetch_array($sql)){
?>

<tr>
	<td align="center"> <?php echo $data['Nama']; ?> </td>
</tr>

<?php
		$no++;
	}
?>

</table>

<br>

<h4><h4>Sabtu</h4></h4>
<table width="60%" cellspacing="0" class="data" border="1">
<tr>
	<td align="center" bgcolor="#FF9455"><h5>NAMA</h5></td></tr>
</tr>
	
<tr>
	<td></td>
</tr>

<?php
	$no = 1;
	$sql = mysqli_query($koneksi, "SELECT * FROM jadwalasisten 
	Where Hari='Sabtu'") or die(mysqli_error($koneksi));
	while($data=mysqli_fetch_array($sql)){
?>

<tr>
	<td align="center"> <?php echo $data['Nama']; ?> </td>
</tr>

<?php
		$no++;
	}
?>

</table>

<br>
