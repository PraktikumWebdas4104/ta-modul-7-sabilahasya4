<!DOCTYPE html>
<html>
<head>
	<title>Data Mahasiswa</title>
</head>
<body>
<h2>DATA MAHASISWA</h2>
<br/>
<br/>
<table border="1">
	<tr>

		<th>Nama</th>
		<th>NIM</th>
	<tr/>

<?php 
include 'koneksiDB.php';
$no = 1;
$data = mysqli_query($koneksi,"select * from mahasiswa");
while($d = mysqli_fetch_array($data)){

	?>
	<tr>
		<td><?php echo $d['nama']; ?></td>
		<td><?php echo $d['nim']; ?></td>
		<td>
			<a href="#">UPDATE</a>
			<a href="#">HAPUS</a>
		</td>
	</tr>
	<?php 
}
?>
</table>
	 </tr>
</body>
</html>