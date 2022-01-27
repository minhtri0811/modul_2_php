<?php
function timSoChinhPhuong($arr){
    $arr2 = [];
    for ($i = 0; $i < count($arr) ; $i++){
        if (sqrt($arr[$i])*sqrt($arr[$i]) == $arr[$i]){
            $arr2[] = $arr[$i];
        }
    }
    return $arr2;
}
$arr = [4,9,16,2,3,5];
echo "<pre>";
echo "Cac so chinh phuong trong mang la : ";
print_r(timSoChinhPhuong($arr));
