<?php

$a = 170000;

if($a > 150000){
    $diskon = $a - 10000;
    $total =   $a - $a - 10000;
    echo "dani mendapat potongan sebesar 10000 dari yang awalnya $a menjadi $diskon dan dani mendapat 1 dus permen kaki";
}elseif($a >= 100000 && $a <= 150000){
    $diskon = $a - 10000;
    echo "dani mendapat potongan sebesar 10000 dari yang awalnya $a menjadi $diskon dan total bayar nya adalah $diskon";
}else{
    echo "dani tidak mendapat diskon";
}
?>
