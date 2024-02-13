<?php
$andi = 2004;
$eko = $andi - 4;
 
if($andi %4 == 0 && $eko %4 == 0 ){
    echo "keduanya lahir di tahun kabiset";
}elseif($eko %4 == 0){
    echo "Eko lahir di tahun kabiset";
}elseif($andi %4 == 0){
    echo "andi lahir di tahun kabiset";
}else{
    echo "keduanya tidak lahir di tahun kabiset";
}

?>