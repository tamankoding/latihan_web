<?php  
	include "koneksi.php";

?>
<!DOCTYPE html>
<html>
<head>
	<title>membuat inputan dengan tabel relasi</title>
</head>
<body>
	<form action="aksi.php" method="post">
		<input type="text" name="nama" placeholder="nama lengkap">
		<br>
		<select name="agama">
			<?php  
				$q = mysqli_query($conn, "SELECT * FROM agama");
				while ($data = mysqli_fetch_assoc($q)) {
					echo '<option value="'.$data['id_agama'].'">'.$data['agama'].'</option>';
				}

			?>
		</select>
		<br>
		<input type="text" name="alamat" placeholder="alamat">
		<br>
		<input type="submit" name="simpan" value="simpan">
	</form>
</body>
</html>