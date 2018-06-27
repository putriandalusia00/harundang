<?php

include "koneksi.php";


$br_id = $_POST['br_id'];
$br_nm = $_POST['br_nm'];
$br_hrg = $_POST['br_hrg'];
$br_stok = $_POST['br_stok'];
$ket = $_POST['ket'];
$foto = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];
	

$fotobaru = date('dmYHis').$foto;


$path = "images/".$fotobaru;


if(move_uploaded_file($tmp, $path)){
	
	$query = "INSERT INTO barang VALUES('".$br_id."', '".$br_nm."', '".$br_hrg."', '".$br_stok."', '".$ket."', '".$fotobaru."')";
	$sql = mysqli_query($connect, $query); 

	if($sql){ 
		
		header("location: index.php"); 
	}else{
		
		echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
		echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";
	}
}else{
	
	echo "Maaf, Gambar gagal untuk diupload.";
	echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";
}
?>
