<?php
$panjang = 13;
$lebar = 11;
$luas = $panjang * $lebar;

if($luas < 90 ){
    echo " luas rumah dani termasuk tipe 36";
}elseif($luas > 90 && $luas < 96){
    echo "luas rumah dani termasuk tipe 45";
}elseif($luas > 96 && $luas <120){
    echo "luas rumah dani termasuk tipe 54";
}elseif($luas > 120 && $luas <150){
    echo "luas rumah dani termasuk tipe 60";
}else{
    echo "luas rumah dani termasuk tipe 70";
}
?>