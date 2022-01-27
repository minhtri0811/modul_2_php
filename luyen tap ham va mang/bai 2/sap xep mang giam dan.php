<?php
function sapXepMangGiamDan($arr){
    rsort($arr);
    return $arr;
}
$arr = [1,3,5,8,4];
echo "<pre>";
print_r(sapXepMangGiamDan($arr));
