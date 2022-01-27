<?php
function timAmLeMin($arr){
    $min = $arr[0];
    for ($i = 1; $i < count($arr) ; $i++){
        if ($arr[$i] < $min && $arr[$i] < 0 && $arr[$i] % 2 != 0){
            $min = $arr[$i];
        }
    }
    return $min;
}
$arr = [-1,-4,-3,1,2,3,4,5];
echo timAmLeMin($arr);
