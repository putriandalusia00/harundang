<?php

include "koneksi.php";

$nis = $_GET['br_id'];


$br_nm = $_POST['br_nm'];
$br_hrg = $_POST['br_hrg'];
$br_stok = $_POST['br_stok'];
$ket = $_POST['ket'];

if(isset($_POST['ubah_foto'])){ 
	$foto = $_FILES['foto']['name'];
	$tmp = $_FILES['foto']['tmp_name'];
	
	$fotobaru = date('dmYHis').$foto;
	
	$path = "images/".$fotobaru;

	
	if(move_uploaded_file($tmp, $path)){ 
		$query = "SELECT * FROM barang WHERE br_id='".$br_id."'";
		$sql = mysqli_query($connect, $query); 
		$data = mysqli_fetch_array($sql); 

		
		if(is_file("images/".$data['foto'])) 
			unlink("images/".$data['foto']);  
		
		
		$query = "UPDATE barang SET br_nm='".$br_nm."', br_hrg='".$br_hrg."', br_stok='".$br_stok."', ket='".$ket."', foto='".$fotobaru."' WHERE br_id='".$br_id."'";
		$sql = mysqli_query($connect, $query); 
		if($sql){ 
			header("location: index.php"); 
		}else{
			
			echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
			echo "<br><a href='form_ubah.php'>Kembali Ke Form</a>";
		}
	}else{
		
		echo "Maaf, Gambar gagal untuk diupload.";
		echo "<br><a href='form_ubah.php'>Kembali Ke Form</a>";
	}
}else{ 
	$query = "UPDATE barang SET br_nm='".$br_nm."', br_hrg='".$br_hrg."', br_stok='".$br_stok."', ket='".$ket."' WHERE br_id='".$br_id."'";
	$sql = mysqli_query($connect, $query); 

	if($sql){ 
		
		header("location: index.php");
	}else{
		
		echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
		echo "<br><a href='form_ubah.php'>Kembali Ke Form</a>";
	}
}
?>
