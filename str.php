<?php

$str = "ishika rana";
$n = strlen($str);
for ($i = 0; $i < $n-1; $i++) {
    for ($j = $i+1; $j < $n; $j++) {
        if($str[$i]>$str[$j]){
            $temp =$str[$i];
            $str[$i] = $str[$j];
            $str[$j] = $temp;
        }
    }
}
echo $str;
?>