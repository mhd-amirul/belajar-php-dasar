<?php  
// date
// untuk menampilkan tanggal dengan format tertentu
// echo date("l, d-m-y");

// time
// tampilan deufault detiknya disebut Unix Timestamp / EPOCH time 
// detik yang sudah berlalu sejak 1 januari 1970
// echo time();
// echo date("l", time() - 60 * 60 * 24 * 100);

// mktime 
// membuat waktu sendiri (detik)
// mktime(0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun
// echo date("l", mktime(0,0,0,4,7,2000));

// strtotime
echo date("l", strtotime("7 april 2000"));
?>