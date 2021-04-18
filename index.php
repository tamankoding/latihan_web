<?php 
	include "koneksi.php";

?>
<!DOCTYPE html>
<html>
<head>
	<title>Form Absensi</title>
</head>
<body>
	<h3>Form Kelas</h3>
	<form action="daftar_santri.php" method="POST">
		<label>Nama</label><br>
		<input type="text" name="nama" placeholder="Masukan Nama"><br>

		<label>NIS</label><br>
		<input type="text" name="nis" placeholder="Masukan NIS"><br>

		<label>Jenis Kelamin</label><br>
		<select name="jk"><br>
			<option value="Pria">Pria</option>
			<option value="Wanita">Wanita</option>
		</select>

		<label>Pilih Kelas</label><br>
		<select name="kelas"><br>
			<?php  
				$query = mysqli_query($conn, "SELECT * FROM tb_kelas");
				while ($data = mysqli_fetch_assoc($query)) {
					echo '<option value="'.$data['id_kelas'].'">'.$data['kelas'].'</option>';
				}
			?>
		</select>

		<br>
		<input type="submit" name="kirim" value="Daftar">
	</form>

	<h3>Form Absen</h3>
</body>
</html>