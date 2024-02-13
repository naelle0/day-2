<?php
$umur = 17;

if($umur > 6 && $umur < 12){
    echo "waktu tidur 10 jam";
}elseif($umur > 12 && $umur <18){
    echo "waktu tidur 8-9 jam";
}elseif($umur > 18 && $umur < 40){
    echo "waktu tidur 7-8 jam";
}else{
    echo "7 jam";
}
?>