<?php 
//cek apakah tidak ada data di $_GET
if(!isset($_GET["nama"])|| 
	!isset($_GET["nim"])||
	!isset($_GET["email"])||
	!isset($_GET["prodi"])||
	!isset($_GET["gambar"])){
	//redirect
	header("location: latihan9.php");
	exit;
}
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Detail mahasiswa</title>
</head>
<body>

<ul>
	<img src="img/<?php echo $_GET["gambar"]; ?>" width="100px" height="100px">
 	<li><?php echo $_GET["nama"]; ?></li>
 	<li><?php echo $_GET["nim"]; ?></li>
 	<li><?php echo $_GET["email"]; ?></li>
 	<li><?php echo $_GET["prodi"]; ?></li>
</ul>

<a href="latihan9.php">Kembali ke daftar mahasiswa</a>

</body>
</html>