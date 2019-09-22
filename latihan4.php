<?php 
$mahasiswa=[["Maria Manullang", "12S17056","Sistem Informasi", "mariaanastasyamanullang@gmail.com"],["Aldo Manullang", "11S17011","Informatika", "aldomanullang@gmail.com"],["Aldo Manullang", "11S17011","Informatika", "aldomanullang@gmail.com"]

];
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title> Daftar Mahasiwa</title>
 </head>
 <body>
 	<h1>Daftar Mahasiswa</h1>
 	<?php foreach($mahasiswa as $mhs): ?>
 	<ul>
 			<li>Nama:<?php echo $mhs[0]; ?></li>
 			<li>NIM:<?php echo $mhs[1]; ?></li>
 			<li>Jurusan:<?php echo $mhs[2]; ?></li>
 			<li>Email:<?php echo $mhs[3]; ?></li>
 	</ul>
 	<?php endforeach;  ?>
 
 </body>
 </html>