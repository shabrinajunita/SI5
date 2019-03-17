<?php
if (isset($_POST['tambah'])) {
	include_once 'koneksi.php';
	$nim 	= 	$_POST['nim'];
	$nama 	= 	$_POST['nama'];
	$ttl 	= 	$_POST['ttl'];
	$alamat = 	$_POST['alamat'];
	$tinggi = 	$_POST['tinggi'];
	$hobi 	= 	$_POST['hobi'];
	$cita 	= 	$_POST['cita'];
	$input 	= mysqli_query($koneksi,"insert into datamhs (nim,nama,ttl,alamat,tinggi,hobi,cita) values ('$nim', '$nama', '$ttl','$alamat','$tinggi', '$hobi', '$cita')");
	if ($input) {
		echo '<h3>Data berhasil di tambahkan! <br>';
		echo '<a href="home.php">Beranda</a> &nbsp;&nbsp;';
		echo '<a href="tambah.php">Tambah</a>';
		echo "
		<script>
			window.location = 'home.php';
		</script>";	
	}else{
		echo 'Gagal menambahkan data! ';
		echo '<a href="tambah.php">Kembali</a>';	
	}
}else{
	echo '<script>window.history.back()</script>';
}
?>
