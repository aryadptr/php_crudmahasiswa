<!DOCTYPE html>
<html>
<head>
	<title>Insert Mahasiswa</title>
</head>
<body>
	<form action="insert_mhs.php" method="POST">
		<table>
			<tr>
				<td>NIM</td>
				<td><input type="text" name="nim"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
            <tr>
				<td>Tanggal Lahir</td>
				<td><input type="date" name="tgl_lahir"></td>
			</tr>
            <tr>
				<td>Jenis Kelamin</td>
                <td>
                    <Select name="jenis_kelamin">
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </Select>
                </td>
			</tr>
			<tr>
				<td>Jurusan</td>
				<td><input type="text" name="jurusan"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><textarea name="alamat"></textarea></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Submit"></td>
			</tr>
		</table>
	</form>

	<?php
		// Include file koneksi.php
		include_once('koneksi.php');

		// Mengecek tombol submit apakah sudah diisi semua
		if(isset($_POST['submit'])){
			$nim = $_POST['nim'];
			$nama = $_POST['nama'];
			$tgl_lahir = $_POST['tgl_lahir'];
			$jenis_kelamin = $_POST['jenis_kelamin'];
			$jurusan = $_POST['jurusan'];
			$alamat = $_POST['alamat'];

			// Query MySQL untuk Insert
			$insert_customer = mysqli_query($koneksi, "INSERT INTO mahasiswa(nim, nama, tgl_lahir, jenis_kelamin, jurusan, alamat) VALUES('$nim','$nama','$tgl_lahir','$jenis_kelamin','$jurusan', '$alamat')");
			header("Location:mahasiswa.php");
		}
	?>
</body>
</html>