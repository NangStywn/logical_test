<?php
function divBilangan($bilA, $bilB)
{
    echo 'Bilangan Pertama: ' . $bilA . '<br>';
    echo 'Hasil Kedua: ' . $bilB . '<br>';
    $hasil = 0;
    while ($bilA >= $bilB) {
        $bilA -= $bilB;
        $hasil++;
    }
    echo 'Hasil Pembagian: ' . $hasil;
}
divBilangan(29, 3);