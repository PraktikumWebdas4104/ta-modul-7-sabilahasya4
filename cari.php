<?php 
include 'koneksiDB.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Pencarian</title>
</head>
<body>
	<form method="post">
		<input type="text" name="nt" placeholder="cari..."/>
		<input type="submit" name="cari2" value="cari">
	</form>
	<table border="1" cellpading="5" cellspacing="5">
		<tr>
			<th>Nama Toko </th>
			<th> NIM </th>
		</tr>

	<?php if(isset($_POST['cari2'])){
$no = 1;
$cari = $_POST['nt'];
$sql = "select * from mahasiswa WHERE nim='$nim' ORDER BY nim A";
$query = mysqli_query($db_link,$sql);
while ($data = mysqli_fetch_array($query)){
?>
<tr>
	//memanggil hasil pencarian
<th><?php echo $no;?></th>
<th><?php echo $data['nt'];?></th>
<th><?php echo $data['domain'];?></th>
<th><?php echo $data['marketing'];?></th>





}

	} 
	 ?>

</body>
</html>



 ?>