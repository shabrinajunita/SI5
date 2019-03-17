<? 
session_start();
if (session_is_registered('password'))
{
	$_SESSION['username'];
	$_SESSION['password'];
	
	?>
	<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin Page</title>
  <style>
table {
  width:100%;
}
table, thead, td {
  border: 3px solid black;
  
}
thead,td {
  padding: 15px;
  text-align: left;
  background-color:#FFE4E1;
}
thead{
border: 3px solid black;
text-align: center;
background-color:#F5F5F5;}
</style>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body>
<div class="jumbotron text-center">
  <h1>DATA PRAKTIKAN SISTEM INFORMASI 5</h1>
  <p>Ilmu Komputer Laboratory Center</p> 
</div>
 <div>
 <h3><p><a href="home.php">Beranda</a> / <a href="tambah.php">Tambah Data</a> <br><a href="logout.php"> Logout</a></h3>
	<div class="container">
  <table class="table">
    <thead>
      <tr>
        <th>No</th>
        <th>NIM</th>
        <th>Nama</th>
		<th>Ttl</th>
        <th>Alamat</th>
        <th>Tinggi Badan(cm)</th>
		<th>Hobi</th>
		<th>Cita-Cita</th>
		<th>Keterangan</th>
      </tr>
    </thead>
    <tbody>
<div class="container">
  <div class="row">
    <div class="col-sm-4">
<?php
		include_once 'koneksi.php';
		$query = mysqli_query($koneksi, "SELECT * From datamhs ") or die(mysqli_error());
		if (mysqli_num_rows($query) == 0) {
			echo "<tr align='center'><td colspan='6'>Tidak ada data !</td></tr>";
		} else {
			$no = 1;
			while ($data = mysqli_fetch_assoc($query)) {
				
				echo 	"<tr>".
						"<td>".$no."</td>".
						"<td>".$data['nim']."</td>".
						"<td>".$data['nama']."</td>".
						"<td>".$data['ttl']."</td>".
						"<td>".$data['alamat']."</td>".
						"<td>".$data['tinggi']."</td>".
						"<td>".$data['hobi']."</td>".
						"<td>".$data['cita']."</td>".
						"<td><a href='edit.php?id= ".$data['id_mhs']."'>edit</a> / <a href='hapus.php?id=".$data['id_mhs']."' onclick='return confirm(\'yakin ?\')'>hapus</a></td>";
						$no++;
			}
		}
		
		?>
    </div>
  </div>
</div>

</body>
</html>


