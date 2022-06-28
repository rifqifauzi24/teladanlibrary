<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data</title>
	<style>
		form a{
			text-decoration: none;
			color: black;
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
		 	<h2 align='center'>Tambah Data</h2>
			 <form action="insert.php" method="POST">
			<table align="center">
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td><input type="email" name="mail"></td>
			</tr>
			<tr>
				<td>No Telp</td>
				<td>:</td>
				<td><input type="text" name="notelp"></td>
			</tr>
			<tr>
				<td>Domisili</td>
				<td>:</td>
				<td><input type="text" name="domisili"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td>
					<input type="submit" name="kirim" value="SIMPAN">
					<button type="reset"><a href="tampil-data.php">BATAL</a></button>
				</td>
			</tr>
		</table>
	</form>
    	</div>
        <div class="footer">
            <p class="copy">Copyright 2021. Muhammad Rifqi Fauzi</p>
        </div>
    </div>
<!-- 
	<h3>Tambah Data</h3> -->

	<!-- <form action="insert.php" method="POST">
		<table>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td><input type="email" name="mail"></td>
			</tr>
			<tr>
				<td>No Telp</td>
				<td>:</td>
				<td><input type="text" name="notelp"></td>
			</tr>
			<tr>
				<td>Domisili</td>
				<td>:</td>
				<td><input type="text" name="domisili"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td>
					<input type="submit" name="kirim" value="SIMPAN">
					<button type="reset"><a href="tampil-data.php">BATAL</a></button>
				</td>
			</tr>
		</table>
	</form> -->

</body>
</html>