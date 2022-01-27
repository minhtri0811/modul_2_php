<?php
function lonHonAvg($arr){
    $sum = 0;
    $arr2 = [];
    for ($i = 0; $i < count($arr) ; $i++){
        $sum += $arr[$i];
    }
    $avg = $sum/count($arr);
    for ($i = 0; $i < count($arr) ; $i++){

        if ($arr[$i] > $avg){
            $arr2[] = $arr[$i];
        }
    }
    return $arr2;
}
$arr = [1,2,3,4,5];
echo "<pre>";
print_r(lonHonAvg($arr)) ;
