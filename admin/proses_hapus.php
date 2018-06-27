<?php

include "koneksi.php";

$br_id = $_GET['br_id'];
$query = "SELECT * FROM barang WHERE br_id='".$br_id."'";
$sql = mysqli_query($connect, $query); 
$data = mysqli_fetch_array($sql);

if(is_file("images/".$data['foto'])) 
	unlink("images/".$data['foto']); 

$query2 = "DELETE FROM barang WHERE br_id='".$br_id."'";
$sql2 = mysqli_query($connect, $query2);

if($sql2){ 
	header("location: index.php"); 
}else{
	
	echo "Data gagal dihapus. <a href='index.php'>Kembali</a>";
}
?>
