<!DOCTYPE html>
<html>
<head>
	<title>Admin Page</title>
</head>
<body>
	<h3><p><a href="home.php">Beranda</a> / <a href="tambah.php">Tambah Data</a></p>
	<p>Tambah Data Mahasiswa</p></h3>
	<form action="tambah-proses.php" method="post">
		<table cellpadding="3" cellspacing="0">
			<tr>
				<td>NIM</td>
				<td>:</td>
				<td><input type="number" name="nim" required></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama" required></td>
			</tr>
			<tr>
				<td>TTL</td>
				<td>:</td>
				<td><input type="text" name="ttl" required></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><input type="text" name="alamat" required></td>
			</tr>
			<tr>
				<td>Tinggi(cm)</td>
				<td>:</td>
				<td><input type="number" name="tinggi" required></td>
			</tr>
			<tr>
				<td>Hobi</td>
				<td>:</td>
				<td><input type="text" name="hobi" required></td>
			</tr>
			<tr>
				<td>Cita-Cita</td>
				<td>:</td>
				<td><input type="text" name="cita" required></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td></td>
				<td><input type="submit" name="tambah" value="Tambah"></td>
			</tr>
		</table>
	</form>
</body>
</html>