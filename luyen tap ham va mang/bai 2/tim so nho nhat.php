<?php
function timMin($arr){
    $min = $arr[0];
    for ($i = 1; $i < count($arr) ; $i++){
        if ($arr[$i] < $min){
            $min = $arr[$i];
        }
    }
    return $min;
}
$arr = [1,2,3,4,5];
echo timMin($arr);
