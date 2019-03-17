<!DOCTYPE html>
<html>
<head>
	<title>Admin Page</title>
</head>
<body>
	<h3><p><a href="home.php">Beranda</a> /
<a href="tambah.php">Tambah Data</a></p>
	<b>Edit Data Mahasiswa</b><br></h3>
	
<?php
	include('koneksi.php');
	if(isset($_GET['id'])) { $id = $_GET['id']; }
	else { $id = ""; }
	$show = mysqli_query($koneksi,"SELECT * FROM datamhs WHERE id_mhs='$id'");
	if(mysqli_num_rows($show) == 0){
		echo '<script>window.history.back()</script>';
	}else{
		$data = mysqli_fetch_assoc($show);
	}
	?>
	
<form action="edit-proses.php" method="post">
<input type="hidden" name="id" value="<?php echo $id; ?>">
<table cellpadding="3" cellspacing="0">
	<tr>
		<td>NIM</td>
		<td>:</td>
		<td><input type="text" name="nim" size="30" value="<?php echo $data['nim']; ?>" required></td>
	</tr>
	<tr>
		<td>Nama Lengkap</td>
		<td>:</td>
		<td><input type="text" name="nama" size="30" value="<?php echo $data['nama']; ?>" required></td>
	</tr>
	<tr>
		<td>TTL</td>
		<td>:</td>
		<td><input type="text" name="ttl" size="30" value="<?php echo $data['ttl']; ?>" required></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td>:</td>
		<td><input type="text" name="alamat" size="30" value="<?php echo $data['alamat']; ?>" required></td>
	</tr>
	<tr>
		<td>Tinggi (cm)</td>
		<td>:</td>
		<td><input type="text" name="tinggi" size="30" value="<?php echo $data['tinggi']; ?>" required></td>
	</tr>
	<tr>
		<td>Hobi</td>
		<td>:</td>
		<td><input type="text" name="hobi" size="100" value="<?php echo $data['hobi']; ?>" required></td>
	</tr>
	<tr>
		<td>Cita-Cita</td>
		<td>:</td>
		<td><input type="text" name="cita" size="100" value="<?php echo $data['cita']; ?>" required></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td></td>
		<td><input type="submit" name="simpan" value="Simpan"></td>
</tr>
</table>
</form>
</body>
</html>
