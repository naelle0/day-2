<?php

$nasiGoreng = 15000;
$ayamBakar = 20000;
$nasiKebuli = 25000;
$jus = 8000;
$tehManis = 3000;
$jeruk = 5000;
$beli = $nasiKebuli * 2 + $ayamBakar + $nasiGoreng * 2 + $jus + $jeruk;
$hari = Date('D');


if($hari == 'Mon'){
    $diskon = $beli * 0.02;
    $total = $beli - $beli * 0.02;
    echo "Dani mendapat diskon sebesar $diskon dan hanya membayar sebesar $total";
}elseif($hari == 'Tue'){
    $diskon = $beli * 0.05;
    $total = $beli - $beli * 0.05;
    echo "Dani Mendapat Diskon sebesar $diskon dan hanya membayar sebesar $total";
}else{
    echo "Dani tidak mendapat Diskon dan total bayarnya adalah $beli";
}

?>