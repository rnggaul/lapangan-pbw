<?php
$array1 = array(4,6,7,9,13);
echo "Array yang dimasukan : ";
for($i = 0; $i <= 4; $i++){
    echo $array1[$i]," ";
}
echo "<br>Hasil penjumlahan array tersebut : ";
echo array_sum($array1);
?>