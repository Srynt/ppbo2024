<?php
date_default_timezone_set("Asia/Jakarta");
$nama = readline('Masukkan nama Anda: ');
$waktu = date('H');
if ($waktu>19){
    echo "Selamat malam {$nama}, sekarang pukul {$waktu}\n";
} else if ($waktu>15){
    echo "Selamat sore {$nama}, sekarang pukul {$waktu}\n"; 
} else if ($waktu>11){
    echo "Selamat siang {$nama}, sekarang pukul {$waktu}\n";
} else if ($waktu>5){
    echo "Selamat pagi {$nama}, sekarang pukul {$waktu}\n";
}