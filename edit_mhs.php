<?php

	include_once('koneksi.php');

	$nim = $_GET['nim'];

	$show_mahasiswa = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE nim= '$nim'");
	$data_mahasiswa = mysqli_fetch_array($show_mahasiswa);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Update Data Mahasiswa</title>
</head>
<body>
	<form action="edit_mhs.php" method="POST">
		<table>
			<tr>
				<td>NIM</td>
				<td><input type="text" name="nim" value="<?php echo $data_mahasiswa['nim']?>"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama" value="<?php echo $data_mahasiswa['nama']?>"></td>
			</tr>
            <tr>
				<td>Tanggal Lahir</td>
				<td><input type="date" name="tgl_lahir" value="<?php echo $data_mahasiswa['tgl_lahir']?>"></td>
			</tr>
            <tr>
				<td>Jenis Kelamin</td>
                <td>
                    <Select name="jenis_kelamin" value="<?php echo $data_mahasiswa['jenis_kelamin']?>">
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </Select>
                </td>
			</tr>
			<tr>
				<td>Jurusan</td>
				<td><input type="text" name="jurusan" value="<?php echo $data_mahasiswa['jurusan']?>"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><textarea name="alamat"><?php echo $data_mahasiswa['alamat']?></textarea></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Submit"></td>
			</tr>
		</table>
	</form>

    <?php
		// Mengecek tombol submit apakah sudah diisi semua
			if(isset($_POST['submit'])){
				$nim = $_POST['nim'];
				$nama = $_POST['nama'];
				$tgl_lahir = $_POST['tgl_lahir'];
				$jenis_kelamin = $_POST['jenis_kelamin'];
				$jurusan = $_POST['jurusan'];
				$alamat = $_POST['alamat'];

				// Query MySQL untuk Insert
				$insert_customer = mysqli_query($koneksi, "UPDATE mahasiswa SET nama = '$nama', tgl_lahir ='$tgl_lahir' , jenis_kelamin = '$jenis_kelamin', jurusan = '$jurusan', alamat = '$alamat' WHERE nim = '$nim'");
				header("Location:mahasiswa.php");
			}
	?>
</body>
</html>

