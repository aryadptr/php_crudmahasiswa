<?php
	include_once('koneksi.php');
	$show_mahasiswa = mysqli_query($koneksi, "SELECT * FROM mahasiswa ORDER BY nim ASC");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
</head>
<body>
	<button><a href="insert_mhs.php" style="text-decoration: none;">Insert Data Mahasiswa</a></button>

	<table width="80%" border="1" style="margin-top: 30px; text-align:center;">

		<tr>
			<th>NIM</th>
			<th>Nama Lengkap</th>
			<th>Tanggal Lahir</th>
			<th>Jenis Kelamin</th>
            <th>Jurusan</th>
            <th>Alamat</th>
            <th>Proses</th>
		</tr>

		<?php
			while($data_mahasiswa = mysqli_fetch_array($show_mahasiswa)) {
			
			echo "<tr>";
			echo "<td>".$data_mahasiswa['nim']."</td>";
			echo "<td>".$data_mahasiswa['nama']."</td>";
            echo "<td>".$data_mahasiswa['tgl_lahir']."</td>";
            echo "<td>".$data_mahasiswa['jenis_kelamin']."</td>";
            echo "<td>".$data_mahasiswa['jurusan']."</td>";
            echo "<td>".$data_mahasiswa['alamat']."</td>";
            echo "<td><a href='edit_mhs.php?nim=$data_mahasiswa[nim]'>Edit</a> | <a href='delete_mhs.php?nim=$data_mahasiswa[nim]'>Delete</a></td>";
			echo "</tr>";

			}
		?>
	</table>
</body>
</html>