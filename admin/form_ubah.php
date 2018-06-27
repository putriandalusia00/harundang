<html>
<head>
	<title>Admin HARUNDANG product</title>
</head>
<body>
	<h1>Ubah Data Product</h1>
	
	<?php
	
	include "koneksi.php";
	
	
	$id = $_GET['br_id'];
	
	
	$query = "SELECT * FROM barang WHERE br_id='".$id."'";
	$sql = mysqli_query($connect, $query); 
	$data = mysqli_fetch_array($sql);
	?>
	
	<form method="post" action="proses_ubah.php?nis=<?php echo $br_id; ?>" enctype="multipart/form-data">
	<table cellpadding="8">
	<tr>
		<td>Nama Prouct</td>
		<td><input type="text" name="br_nm" value="<?php echo $data['br_nm']; ?>"></td>
	</tr>
	<tr>
		<td>Harga</td>
		<td><input type="text" name="br_hrg" value="<?php echo $data['br_hrg']; ?>"></td>
		
		</td>
	</tr>
	<tr>
		<td>Stock</td>
		<td><input type="text" name="br_stok" value="<?php echo $data['br_stok']; ?>"></td>
	</tr>
	<tr>
		<td>Keterangan</td>
		<td><textarea name="ket"><?php echo $data['ket']; ?></textarea></td>
	</tr>
	<tr>
		<td>Foto</td>
		<td>
			<input type="checkbox" name="ubah_foto" value="true"> Ceklis jika ingin mengubah foto<br>
			<input type="file" name="foto">
		</td>
	</tr>
	</table>
	
	<hr>
	<input type="submit" value="Ubah">
	<a href="index.php"><input type="button" value="Batal"></a>
	</form>
</body>
</html>
