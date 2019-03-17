<?php
if(isset($_POST['simpan'])){
	include('koneksi.php');
	$id 	= $_POST['id'];
	$nim 	= $_POST['nim'];
	$nama 	= $_POST['nama'];
	$ttl 	= $_POST['ttl'];
	$alamat = $_POST['alamat'];
	$tinggi = $_POST['tinggi'];
	$hobi 	= $_POST['hobi'];
	$cita 	= $_POST['cita'];
	$update = mysqli_query($koneksi,"UPDATE datamhs SET nim='$nim',nama='$nama', ttl='$ttl', alamat='$alamat', tinggi='$tinggi', hobi='$hobi', cita='$cita'  WHERE id_mhs='$id'") or die(mysqli_error());
	if($update){
		echo '<h3>Data berhasil di update! ';	
		echo '<a href="home.php?id='.$id.'"> Kembali </a>';
	}else{
		echo 'Gagal menyimpan data! ';
		echo '<a href="edit.php?id='.$id.'">Kembali</a>';
	}
}else{	
	echo '<script>window.history.back()</script>';
}
?>