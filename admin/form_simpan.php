<html>
<head>
	<title>Admin HARUNDANG product</title>
</head>
<body>
	<h1>Tambah Product</h1>
	<form method="post" action="proses_simpan.php" enctype="multipart/form-data">
	<table cellpadding="8">
	<tr>
		<td>ID</td>
		<td><input type="text" name="br_id"></td>
	</tr>
	<tr>
		<td>Nama Product</td>
		<td><input type="text" name="br_nm"></td>
	</tr>
	<tr>
	<tr>
		<td>Harga</td>
		<td><input type="text" name="br_hrg"></td>
		
	</tr>
	<tr>
		<td>Stock</td>
		<td><input type="text" name="br_stok"></td>
	</tr>
	<tr>
		<td>Keterangan</td>
		<td><textarea name="ket"></textarea></td>
	</tr>
	<tr>
		<td>Foto</td>
		<td><input type="file" name="foto"></td>
	</tr>
	</table>
	
	<hr>
	<input type="submit" value="Simpan">
	<a href="index.php"><input type="button" value="Batal"></a>
	</form>
</body>
</html>
