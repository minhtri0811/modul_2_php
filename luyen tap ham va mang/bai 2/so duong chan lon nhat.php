<?php
function timMaxDuongChan($arr){
    $max = $arr[0];
    for ($i = 1; $i < count($arr) ; $i++){
        if ($arr[$i] > $max && $arr[$i] > 0 && $arr[$i] % 2 ==0){
            $max = $arr[$i];
        }
    }
    return $max;
}
$arr = [1,2,3,4,5];
echo timMaxDuongChan($arr);
