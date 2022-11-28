<?php
		include 'koneksi.php';
?>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Form Registrasi</title>
		<style>
			.marginatas {
				padding: 10px;
				margin: 15px;
			}
			button {
				padding: 10px;
				background: #2F97E0;
				color: #FFFFFF;
				cursor: pointer;
				border: 0px;
				border-radius: 10px;
			}
			td {
				padding: 10px;
			}
			input {
				padding: 10px;
			}
		</style>
	</head>
	<body>
		<div align="center">
			<h1>Form Registrasi</h1>
			<a href="data-registrasi.php"><button>Lihat Data Registrasi</button></a>
			<?php
				// membuat function input
				function input($data) {
					$data = trim($data);
					$data = stripslashes($data);
					$data = htmlspecialchars($data);
					return $data;;
				}
				// membuat kondisi untuk submit data
				if (isset($_POST['tambah_data'])) {
					// diambil dari inputan user
					$nama = input($_POST['nama']);
					$alamat = input($_POST['alamat']);
					$ttl = input($_POST['ttl']);
					$agama = input($_POST['agama']);
					$hobi = input($_POST['hobi']);
					// perintah untuk input ke database
					$query = "
						INSERT INTO tabel_pengunjung
						(nama, alamat, ttl, agama, hobi)
						VALUES
						('$nama', '$alamat', '$ttl', '$agama', '$hobi')
					";
					// jalanin query database
					$hasil = mysqli_query($koneksi, $query);
					// kondisi jika berhasil atau gagal
					if ($hasil) {
						header("Location:data-registrasi.php");
					} else {
						echo "Pesan Error :". mysqli_error($koneksi);
					}
				}
			?>
			<form action="" method="POST" accept-charset="utf-8" style="padding: 10px; width: 100%; margin: 10px;">
				<table>
					<tr>
						<td>
							<label class="marginatas" for="nama">Nama</label>
						</td>
						<td>:</td>
						<td>
							<input type="text" id="nama" name="nama" placeholder="Masukkan Nama" required>
						</td>
					</tr>
					<tr>
						<td>
							<label class="marginatas" for="alamat">Alamat</label>
						</td>
						<td>:</td>
						<td>
							<textarea name="alamat" id="alamat" cols="30" rows="5"></textarea>
						</td>
					</tr>
					<tr>
						<td>
							<label class="marginatas" for="ttl">Tempat Tanggal Lahir</label>
						</td>
						<td>:</td>
						<td>
							<input type="text" id="ttl" name="ttl" placeholder="Masukkan TTL" required>
						</td>
					</tr>
					<tr>
						<td>
							<label class="marginatas" for="agama">Agama</label>
						</td>
						<td>:</td>
						<td>
							<input type="text" id="agama" name="agama" placeholder="Masukkan Agama" required>
						</td>
					</tr>
					<tr>
						<td>
							<label class="marginatas" for="hobi">Hobi</label>
						</td>
						<td>:</td>
						<td>
							<input type="text" id="hobi" name="hobi" placeholder="Masukkan Hobi" required>
						</td>
					</tr>
				</table>
				<br><br>
				<button type="submit" name="tambah_data">Kirim Data</button>
			</form>
		</div>
	</body>
</html>