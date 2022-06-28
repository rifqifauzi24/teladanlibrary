<!DOCTYPE html>
<html>
<head>
	<title>Ubah Data</title>
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
		 	<h2 align='center'>Ubah Data</h2>
			<?php
				include "koneksi.php";

				$ide = $_GET["rubah_id"];

				$sql = "SELECT * FROM anggota WHERE id='$ide'";
				$query = mysqli_query($koneksi, $sql);

				if(mysqli_num_rows($query) > 0){
					$data = mysqli_fetch_array($query);
				}
			?>

			<form action="update.php" method="POST">

				<input type="hidden" name="id" value="<?php echo $data["id"];?>">

				<table align="center">
					<tr>
						<td>Nama </td>
						<td>:</td>
						<td><input type="text" name="nama" value="<?php echo $data["nama_anggota"];?>"></td>
					</tr>
					<tr>
						<td>Email</td>
						<td>:</td>
						<td><input type="email" name="mail" value="<?php echo $data["email_anggota"];?>"></td>
					</tr>
					<tr>
						<td>No Telp</td>
						<td>:</td>
						<td><input type="text" name="notelp" value="<?php echo $data["notelp_anggota"];?>"></td>
					</tr>
					<tr>
						<td>Domisili</td>
						<td>:</td>
						<td><input type="text" name="domisili" value="<?php echo $data["domisili_anggota"];?>"></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td>
							<input type="submit" name="edit" value="UBAH">
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


	<!-- <?php
		include "koneksi.php";

		$ide = $_GET["rubah_id"];

		$sql = "SELECT * FROM anggota WHERE id='$ide'";
		$query = mysqli_query($koneksi, $sql);

		if(mysqli_num_rows($query) > 0){
			$data = mysqli_fetch_array($query);
		}
	?>

	<form action="update.php" method="POST">

		<input type="hidden" name="id" value="<?php echo $data["id"];?>">

		<table>
			<tr>
				<td>Nama </td>
				<td>:</td>
				<td><input type="text" name="nama" value="<?php echo $data["nama_anggota"];?>"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td><input type="email" name="mail" value="<?php echo $data["email_anggota"];?>"></td>
			</tr>
			<tr>
				<td>No Telp</td>
				<td>:</td>
				<td><input type="text" name="notelp" value="<?php echo $data["notelp_anggota"];?>"></td>
			</tr>
			<tr>
				<td>Domisili</td>
				<td>:</td>
				<td><input type="text" name="domisili" value="<?php echo $data["domisili_anggota"];?>"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td>
					<input type="submit" name="edit" value="UBAH">
				</td>
			</tr>
		</table>
	</form> -->

</body>
</html>