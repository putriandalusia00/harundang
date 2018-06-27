<html>
<head>
	<title>Admin HARUNDANG product</title>
</head>
<body>
	<h1><center>Data Product</center></h1>
	<a href="form_simpan.php">Tambah Data</a><br><br>
	<table border="1" width="100%">
	<tr>
		<th>Image</th>
		<th>Id</th>
		<th>Nama Product</th>
		<th>Harga</th>
		<th>Stock</th>
		<th>Keterangan</th>
		<th colspan="2">Aksi</th>
	</tr>
	<?php
	
	include "koneksi.php";
	
	$query = "SELECT * FROM barang"; 
	$sql = mysqli_query($connect, $query); 
	
	while($data = mysqli_fetch_array($sql)){ 
		echo "<tr>";
		echo "<td><img src='images/".$data['foto']."' width='90' height='90'></td>";
		echo "<td>".$data['br_id']."</td>";
		echo "<td>".$data['br_nm']."</td>";
		echo "<td>".$data['br_hrg']."</td>";
		echo "<td>".$data['br_stok']."</td>";
		echo "<td>".$data['ket']."</td>";
		echo "<td>".$data['foto']."</td>";
		echo "<td><a href='form_ubah.php?br_id=".$data['br_id']."'>Ubah</a></td>";
		echo "<td><a href='proses_hapus.php?br_id=".$data['br_id']."'>Hapus</a></td>";
		echo "</tr>";
	}
	?>
	</table>
</body>
</html>
