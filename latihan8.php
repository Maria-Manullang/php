<?php 
// $mahasiswa=[["Maria Manullang", "12S17056","mariaanastasyamanullsng@gmail.com","Sistem Informasi"],["Aldo Manullang", "11S17011","aldomanullsng@gmail.com","Informatika"]];

//array assosiative
//definisinya sama seperti array tapi key nya adalah string yang kita buat sendiri

$mahasiswa=[
			[
			"gambar"=>"2017-12-16-00-01-49.jpg ",
			"nama" => "Maria Manullang", 
			"NIM"=>"12S17056",
			"Email"=>"mariaanastasyamanullang@gmail.com",
			"Prodi"=>"Sistem Informasi"],
			[
			"gambar"=>"2018-03-15-08-09-17.jpg",
			"nama" => "Aldol Manullang", 
			"NIM"=>"11S17011",
			"Email"=>"aldomanullang@gmail.com",
			"Prodi"=>"Informatika"]
			];
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>daftar Mahasiswa</title>
 </head>
 <body>
 	<h1>Daftar Mahasiswa</h1>
 		<?php foreach($mahasiswa as $mhs): ?>
 			<ul>
 				<li><!-- <img src="img/2017-12-16-00-01-49.jpg" width="100px" height="100px"> -->
 				<img src="img/<?= $mhs["gambar"] ?>" width="100px" height="100px">
 				</li>
 				<li>Nama:<?= $mhs["nama"]; ?></li>
 				<li>NIM:<?= $mhs["NIM"]; ?></li>
 				<li>Email:<?= $mhs["Email"]; ?></li>
 				<li>Prodi:<?= $mhs["Prodi"]; ?></li>
 			</ul>
 		<?php endforeach; ?>
 </body>
 </html>
 