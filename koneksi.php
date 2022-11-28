<!-- membuat koneksi ke database -->
<?php 

// cara pertama
	// $server = "localhost";
	// $username = "root";
	// $password = "";
	// $database = "db_siswa";

	// $koneksi = mysqli_connect($server, $username, $password, $database);

	// if($koneksi) {
	// 	echo "Koneksi Berhasil";
	// } else {
	// 	die("Koneksi Gagal : ". mysqli_connect_error());
	// }

// cara kedua

	$koneksi = mysqli_connect("localhost", "root", "", "db_pengunjung");

	if(!$koneksi) {
		die("Koneksi Gagal : ". mysqli_connect_error());
	}

?>