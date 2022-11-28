<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Data Registrasi</title>
	<style>
		table {
			border-collapse: collapse;
			width: 70%;
		}
		th, td {
			margin: 10px;
			padding: 10px;
		}
		button {
				padding: 10px;
				background: #E07E2F;
				color: #FFFFFF;
				cursor: pointer;
				border: 0px;
				border-radius: 10px;
			}
	</style>
</head>
<body>
	<div align="center">
		<h1>Data Registrasi</h1>
		<a href="form-registrasi.php"><button>Tambah Data Pengunjung</button></a> <br><br>
	<!-- ini untuk manggil koneksi.php -->
	<?php 
		include 'koneksi.php';
	?>

	<!-- membuat table untuk data siswa -->
	<table border="1 solid">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>Alamat</th>
				<th>TTL</th>
				<th>Agama</th>
				<th>Hobi</th>
				<th>Aksi</th>
			</tr>
		</thead>

		<!-- perintah untuk membaca database -->
		<?php 

			$perintah = "SELECT * FROM tabel_pengunjung";
			$query = mysqli_query($koneksi, $perintah);
			$no = 0;
			while($data = mysqli_fetch_array($query)) {
				$no++;
		?>

		<tbody>
			<tr>
				<td align="center"><?php echo $no ?></td>
				<td><?php echo $data["nama"]; ?></td>
				<td><?php echo $data["alamat"]; ?></td>
				<td><?php echo $data["ttl"]; ?></td>
				<td><?php echo $data["agama"]; ?></td>
				<td><?php echo $data["hobi"]; ?></td>
				<td align="center">
					<button onclick="klikhapus()" style="background: #F94C4C;">Hapus</button>
					<button onclick="klikhapus()" style="background: #4DC477;">Edit</button>
				</td>
			</tr>
		</tbody>
		<?php } ?>
	</table>
	</div>

<script>
	function klikhapus() {
		alert("Fungsi Belum Dibuat");
	}
</script>

</body>
</html>