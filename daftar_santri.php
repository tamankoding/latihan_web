<?php  
	include "koneksi.php";

	$nama = $_POST['nama'];
	$nis = $_POST['nis'];
	$kelas = $_POST['kelas'];
	$jk = $_POST['jk'];


	$insert = mysqli_query($conn, "INSERT INTO tb_santri VALUES('', '$nama', '$nis', '$jk', '$kelas')");

	if ($insert) {
		echo "berhasil";
	} else {
		echo "gagal";
	}

?>