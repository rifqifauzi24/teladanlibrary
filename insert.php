<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data</title>
	<style>
		.content a{
			text-decoration: none;
		}
	</style>
	<link rel="stylesheet" href="tampil-data.css">
</head>
<body>
	<div class="container">
        <div class="header">
            <h1 class="judul">Perpustakaan Teladan 82</h1>
            <ul>
                <li><a href="halamanutama.php">Home</a></li>
                <li><a href="#">Profile</a></li>
                <li><a href="tampil-data.php">Data Anggota</a></li>
                <li><a href="#">Koleksi Digital</a></li>
                <li><a href="#">Galeri</a></li>
             </ul>
        </div>
        <div class="hero"></div>
        <div class="content">
			<?php
				include "koneksi.php";

				// $nm = $_POST["nama"];
				// $em = $_POST["mail"];

				// $id = $_POST["id"];
				$nm = $_POST["nama"];
				$em = $_POST["mail"];
				$notelp = $_POST["notelp"];
				$dom = $_POST["domisili"];

				// date_default_timezone_set("Asia/Jakarta");

				// $tgl = date("Y:m:d");

				// query sql
				$sql = "INSERT INTO anggota (nama_anggota, email_anggota, notelp_anggota, domisili_anggota) VALUES('$nm','$em','$notelp', '$dom')";
				$query = mysqli_query($koneksi, $sql);

				if($query){
					$hasil = "Data berhasil di insert!";
				} else {
					echo "Error :".$sql."<br>".mysqli_error($koneksi);
				}

				mysqli_close($koneksi);

			?>
            <h2><?php echo $hasil ?></h2>
			<a href="tampil-data.php">Kembali ke Tampil Data</a>
        </div>
        <div class="footer">
            <p class="copy">Copyright 2021. Muhammad Rifqi Fauzi</p>
        </div>
    </div>
</body>
</html>