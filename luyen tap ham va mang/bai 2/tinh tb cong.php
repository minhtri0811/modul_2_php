<?php
function AvgArr($arr){
    $sum = 0;
    for ($i = 0; $i < count($arr) ; $i++){
        $sum += $arr[$i];
    }
    return $sum/count($arr);
}
$arr = [1,2,3,4,5];
echo AvgArr($arr);
