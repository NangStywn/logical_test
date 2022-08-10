<?php
$aplikasi[1] = 'gtAkademik';
$aplikasi[2] = 'gtFinansi';
$aplikasi[3] = 'gtPerizinan';
$aplikasi[4] = 'eCampuz';
$aplikasi[5] = 'eOviz';
$appLength = count($aplikasi);
$i = 1;
while ($i <= $appLength) {
    echo $aplikasi[$i] . "<br/>";
    $i++;
}
