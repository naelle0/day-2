<?php
$tinggi = 148;
$berat = 44;
$imt = $berat / ($tinggi/100) ** 2;

if($imt < 18.5){
    echo "Berat Badan Kurang";
}elseif($imt >18.5 && $imt < 22.9){
    echo "Normal";
}elseif($imt >22.9 && $imt <24.9){
    echo "Berat Badan Lebih";
}else{
    echo "Obesitas";
}

?>