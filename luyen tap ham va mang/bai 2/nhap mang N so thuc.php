<?php
function nhapNsoThuc ($n){
    $arr = [];
    $str = "/^[0-9]{1,2}+[.]{1}+[0-9]{1,2}$/";

    $i = 0;
    while ($i < $n){
        $random = rand(1,100)/10;
        if (preg_match($str,"$random")){
            $arr[] = $random;
            $i++;
        }

    }
    return $arr;
}
echo "<pre>";
$n = 20;
print_r(nhapNsoThuc($n));
//$n = 10;
