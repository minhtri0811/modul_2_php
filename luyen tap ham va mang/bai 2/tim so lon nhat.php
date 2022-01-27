<?php
function timMax($arr){
    $max = $arr[0];
    for ($i = 1; $i < count($arr) ; $i++){
        if ($arr[$i] > $max){
            $max = $arr[$i];
        }
    }
    return $max;
}
$arr = [1,2,3,4,5];
echo timMax($arr);
