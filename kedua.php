<?php

$ibujari=45;
$tunggukiris=40;

function luasLingkaran($jari) : float {
    $luas = 3.14*$jari*$jari;
    return $luas;
}


function kelilingLingkaran($jari) : float {
    $keliling = 2 * 3.14 * $jari;
    return $keliling;
}


function volumeBola($jari) : float {
    $volume = (4/3) * 3.14 * $jari * $jari * $jari;
    return $volume;
}


function volumeTabung($jari, $tinggi) : float {
    $volume = 3.14 * $jari * $jari * $tinggi;
    return $volume;
}


function volumeKerucut($jari, $tinggi) : float {
    $volume = (1/3) * 3.14 * $jari * $jari * $tinggi;
    return $volume;
}


$luas_tanah = luasLingkaran($ibujari);
echo "Luas tanah budi adalah {$luas_tanah}\n";

$kel_ling = kelilingLingkaran($ibujari);
echo "Keliling lingkar perut budi adalah {$kel_ling}\n";

$vol_bol = volumeBola($ibujari);
echo "Volume bola budi adalah {$vol_bol}\n";

$vol_tab= volumeTabung($ibujari,$tunggukiris);
echo "Volume tabung oksigen budi adalah {$vol_tab}\n";

$vol_ker= volumeKerucut($ibujari,$tunggukiris);
echo "Volume Topi kerucut budi adalah {$vol_ker}\n";
