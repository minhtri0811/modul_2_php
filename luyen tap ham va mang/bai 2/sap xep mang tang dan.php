<?php
function sapXepMangTangDan($arr){
    sort($arr);
    return $arr;
}
$arr = [1,3,5,8,4];
echo "<pre>";
print_r(sapXepMangTangDan($arr));
