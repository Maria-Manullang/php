<?php 
//NOTE BUAT KONDISI IF WAKTU

function salam($waktu = "Datang" ,$nama = "Admin"){
	return "Selamat $waktu, $nama!";
}
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Latihan Function</title>
 </head>
 <body>
 	<h1> <?php echo salam("Pagi","Maria"); ?> </h1>
 </body>
 </html>