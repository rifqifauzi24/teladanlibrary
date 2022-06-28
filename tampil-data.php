<!DOCTYPE html>
<html>
<head>
	<title>Data Anggota</title>
	<link rel="stylesheet" href="tampil-data.css">
	<style>
		body table a {
			text-decoration: none;
		}
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
		<table border="1" cellspacing="0" cellpadding="10" align="center">
			<thead>
				<th>No</th>
				<th>Nama </th>
				<th>Email </th>
				<th>No Telp </th>
				<th>Domisili </th>
				<th colspan="2">Aksi</th>
			</thead>
			<tbody>
				<?php
					include "koneksi.php";

					// query sql
					$sql = "SELECT * FROM anggota ORDER BY id ASC";
					$query = mysqli_query($koneksi, $sql);

					$no = 1; // no. urut

					while($data = mysqli_fetch_array($query)){

						$id = $data["id"];
						$nm = $data["nama_anggota"];
						$em = $data["email_anggota"];
						$notelp = $data["notelp_anggota"];
						$dom = $data["domisili_anggota"];

						echo "<tr>
								<td>$no</td>
								<td>$nm</td>
								<td>$em</td>
								<td>$notelp</td>
								<td>$dom</td>
								<td>
									<a href='rubah-data.php?rubah_id=$id'>Ubah |</a>
									<a href='delete.php?hapus_id=$id'>Hapus</a>
								</td>
							</tr>";
						$no++;
					}
				?>
			</tbody>
		</table>
		<br>
		<a href="tambah-data.php">Tambah Data</a>
		<br><br><br><br>
		<a href="loginn.html">Logout</a>
        </div>
        <div class="footer">
            <p class="copy">Copyright 2021. Muhammad Rifqi Fauzi</p>
        </div>
    </div>
</body>
</html>