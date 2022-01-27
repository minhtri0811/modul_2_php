<?php
if ($_SERVER["REQUEST_METHOD"] == "GET"){
    $string = $_REQUEST["string"];
    $random = $_REQUEST["random"];
    function checkNumber($string){
        if (strlen($string) > 50 ){
            return "Chuoi qua dai";
        }else{
            for ($i = 0; $i < strlen($string) ; $i++){
                if (is_numeric($string[$i])){
                    return "Trong chuoi co ky tu so";
                }
            }return "Trong chuoi khong co ky tu so";
        }
    }

    function checkHoaThuong($string){
        $strHoa = "/^[A-Z]$/";
        for ($i = 0; $i < strlen($string) ; $i++){
            if (preg_match($strHoa,"$string[$i]")){
                return "Trong chuoi co ky tu in hoa";
            }
        }return "Trong chuoi khong co ky tu in hoa";
    }
    function checkTonTai($string, $random){
        for ($i = 0; $i < strlen($string) ; $i++){
            if ($string[$i] === $random){
                return "Ky tu $random nam trong chuoi";
            }
        }return "Ky tu $random khong nam trong chuoi";
    }


}

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="get">
    <input type="text" name="string" placeholder="Nhap chuoi tuy y" value="<?php echo $string?>">
    <input type="text" name="random" placeholder="Nhap ky tu bat ky" value="<?php echo $random?>">
    <button type="submit">Kiem Tra</button>
</form>

</body>
</html>
<?php
echo checkNumber($string);
echo "<br>";
echo checkHoaThuong($string);
echo "<br>";
echo checkTonTai($string,$random);
?>

