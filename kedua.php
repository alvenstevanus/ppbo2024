<?php


function luasLingkaran($jari) : float {
    $luas = 3.14*$jari*$jari;
    return $luas;
}

function kelilingLingkaran($jari) : float {
    $keliling=2*3.14*$jari;
    return $keliling;
}

function volumeBola($jari) : float {
    $volumebol=(4/3)*3.14*$jari*$jari*$jari;
    return $volumebol;
}

function volumeTabung($jari,$tinggi) : float {
    $volumetab=3.14*$jari*$jari*$tinggi;
    return $volumetab;
}

function volumeKerucut($jari,$tinggi) : float {
    $volumeker=(1/3)*3.14*$jari*$jari*$tinggi;
    return $volumeker;
}




$luas_tanah = luasLingkaran(45);
$keliling_tanah = kelilingLingkaran(45);
$basket = volumeBola(9);
$celengan = volumeTabung(7,15);
$topiultah = volumeKerucut(3.5,15);
echo "Luas tanah budi adalah {$luas_tanah} dan kelilingnya {$keliling_tanah}\nVolume bola basket rafael adalah {$basket}\nVolume celengan tabung fahri adalah {$celengan}\nVolume topi ulang tahun dapa adalah {$topiultah}";
