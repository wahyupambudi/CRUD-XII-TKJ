<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>BELAJAR KONEKSI DATABASE</title>
	<style>
		table {
			border-collapse: collapse;
		}
	</style>
</head>
<body>
	<h1>tes koneksi php</h1>
	<!-- ini untuk manggil koneksi.php -->
	<?php 
		include 'koneksi.php';
	?>

	<!-- membuat table untuk data siswa -->
	<table border="1 solid">
		<thead>
			<tr>
				<th>ID</th>
				<th>NIS</th>
				<th>Nama</th>
				<th>Kelas</th>
				<th>Jurusan</th>
			</tr>
		</thead>

		<?php 

			$perintah = "SELECT * FROM tb_datasiswa";
			$query = mysqli_query($koneksi, $perintah);

			while($data = mysqli_fetch_array($query)) {
		?>

		<tbody>
			<tr>
				<td><?php echo $data["id"]; ?></td>
				<td><?php echo $data["nis"]; ?></td>
				<td><?php echo $data["nama"]; ?></td>
				<td><?php echo $data["kelas"]; ?></td>
				<td><?php echo $data["jurusan"]; ?></td>

				<!-- <td>1</td>
				<td>19312302</td>
				<td>Wahyu</td>
				<td>XII TKJ</td>
				<td>Teknik Komputer dan Jaringan</td> -->
			</tr>
		</tbody>

		<?php } ?>
	</table>
</body>
</html>