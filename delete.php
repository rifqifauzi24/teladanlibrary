<!DOCTYPE html>
<html>
<head>
	<title>Hapus Data</title>
	<link rel="stylesheet" href="tampil-data.css">
	<style>
		.content a{
			text-decoration: none;
		}
	</style>
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

				$idh = $_GET["hapus_id"];

				// query sql
				$sql = "DELETE FROM anggota WHERE id='$idh'";
				$query = mysqli_query($koneksi, $sql);

				if($query){
					$berhasil;
					$berhasil='Data Berhasil dihapus!';
				} else {
					echo "Error :".$sql."<br>".mysqli_error($koneksi);
				}

				mysqli_close($koneksi);
			?>
            <h2><?php echo $berhasil ?></h2>
			<a href="tampil-data.php">Kembali ke Tampil Data</a>
        </div>
        <div class="footer">
            <p class="copy">Copyright 2021. Muhammad Rifqi Fauzi</p>
        </div>
    </div>
</body>
</html>