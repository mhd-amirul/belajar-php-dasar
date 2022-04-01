<?php
// Pertemuan 2 - php dasar
// Sintax Php

// Standar Output
// echo, print
// echo "|Contoh echo : Muhammad Amirul|	";
// print("|Contoh print : Muhammad Amirul|	");
// print_r
// print_r("|Contoh print_r : Muhammad Amirul|	|");
// var_dump
// var_dump("Contoh var_dump : Muhammad Amirul")

// penulisan Sintax Php
// 1. PHP dalam HTML 
// 2. HTML dalam PHP
/* CONTOH :
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Belajar PHP</title>
</head>
<body>
	<h1>Halo, Selamat Datang Muhammad <?php echo "Amirul"; ?> </h1>
	<p><?php echo "Ini adalah paragraf"; ?></p>
	<?php echo "<h1>Halo, Selamat Datang Muhammad Amirul</h1>"; //tidak disarankan ?> 
</html>
*/

// Variabel dan Tipe data 
// Variabel
// tidak boleh diawali dengan angka, tapi boleh mengandung angka
// $nama = "Muhammad Amirul";
// echo "Nama saya $nama | =";
// echo '= |Nama saya $nama';

// operator
// aritmatika
// + - * / %
// $x = 3;
// $y = 5;
// echo 1+1;
// echo $x * $y;

// penggabung string / concatenation /concat 
// .
// $nama_depan = "Muhammad";
// $nama_belakang = "Amirul";
// echo $nama_depan." ".$nama_belakang;

// assignment
// =, +=, -=, *=, /=, .=, %=
// $x = 1;
// $x += 9;
// echo $x;
// $nama = "Muhammad";
// $nama .= " ";
// $nama .= "Amirul";
// echo $nama;

// Perbandingan
// <, >, <=, >=, ==, !=
// var_dump(1=="1");

// Identitas
// ===, !===
// var_dump(1==="1");

// Logika
// &&, ||, !
// $x = 30;
// var_dump($x < 20 || $x % 2 == 0);

?>