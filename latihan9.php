<?php  
//variabel scope / lingkup variabel

//variabel lokal untuk 1 halaman ini
// $x=10;
// function tampilX(){
 	//variabel lokal untuk funsi ini
// 	$x=20;
// 	echo $x;
// }

// tampilX();
// echo "<br>";
// echo $x;

//variabel superglobal
//array assosiative
//$_GET
// $_POST
// $_REQUEST
// $_SESSION
// $_COOKIE
// $_SERVER
// $_ENV

// $x=10;
// function tampilX(){
// 	global $x;
// 	echo $x;
// }

// tampilX();

//superglobals
//variabel global milik php
//merupakan array assosiative
// echo $_SERVER["HTTP_ACCEPT"];

// $_GET["nama"]="Maria Manullang";
// $_GET["NIM"]="12S17056";
$mahasiswa=[
			[
			"gambar"=>"2017-12-16-00-01-49.jpg ",
			"nama" => "Maria Manullang", 
			"nim"=>"12S17056",
			"email"=>"mariaanastasyamanullang@gmail.com",
			"prodi"=>"Sistem Informasi"],
			[
			"gambar"=>"2018-03-15-08-09-17.jpg",
			"nama" => "Aldo Manullang", 
			"nim"=>"11S17011",
			"email"=>"aldomanullang@gmail.com",
			"prodi"=>"Informatika"]
			];
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>GET</title>
</head>
<body>
	<h1>Daftar Mahasiswa</h1>
	<?php foreach($mahasiswa as $mhs): ?>
		<li>
			<a href="latihan10.php?nama= <?php echo $mhs["nama"]; ?>&nim=<?php echo $mhs["nim"];?>&email=<?php echo $mhs["email"]; ?> &prodi=<?php echo $mhs["prodi"]; ?>&gambar=<?php echo $mhs["gambar"];  ?>"><?php echo $mhs["nama"];?></a>
		</li>
		
	<?php endforeach; ?>
</body>
</html>