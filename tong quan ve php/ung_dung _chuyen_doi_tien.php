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
<form action="" method="post">
    <h3>Hiện nay, tỉ giá có thể là 23000 VND/USD.</h3>
    <input type="text" name="usd">
    <input type="submit" value="Tính">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usd = $_POST["usd"];
    if ($usd === "") {
        echo "";
    } else {
        echo $usd * 23000 . "VND";
    }

}


?>

</body>
</html>

