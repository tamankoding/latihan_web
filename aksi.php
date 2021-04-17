<?php  
	include "koneksi.php";

	$agama = $_POST['agama'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];

	$insert = mysqli_query($conn, "INSERT INTO identitas VALUES('', '$agama', '$nama', '$alamat')");


	if ($insert) {
		echo "berhasil";
	} else {
		echo "gagal";
	}


?>