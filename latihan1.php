<?php  
//Date
// untuk menampilkan tanggal dengan format tertentu
//	echo date("l, d-M-Y");

//Time
//UNIX Timestamp / EPOCH time
//detik yang sudah berlalu sejak 1 januari 1970
// echo time();

//menghitung hari apa untuk 2 hari kedepan dari hari ini
// echo date("l", time()+172800);

//menghitung 10 hari dari hari ini adalah hari..
// echo date("l", time()+60*60*24*10);

//mktime
//membuat sendiri detik yang berlalu dari 1 januari 1970
//mktime(0,0,0,0,0,0)
//jam, menit, detik, bulan tanggal, tahun
// echo date("l", mktime(0,0,0,8,13,1999));

//strtotime
echo date("l", strtotime("13 aug 1999"));
?>