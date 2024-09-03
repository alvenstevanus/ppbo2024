<?php
date_default_timezone_set("Asia/Jakarta");
$nama = readline('Masukkan nama Anda: ');
$jam = date('H');
$menit = date('i');

if ($jam>5 && $jam<11){
    $sapaan="selamat pagi";
} 
elseif ($jam>11 && $jam<15){
    $sapaan="selamat siang";
}
elseif ($jam>15 && $jam<19){
    $sapaan="selamat sore";
}
else{
    $sapaan="selamat malam";
}
echo "{$sapaan} {$nama}! sekarang pukul {$jam}:{$menit}\n";