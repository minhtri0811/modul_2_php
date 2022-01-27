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
<body>
<form method="post">
    <input type="text" name="money" placeholder="Money">
    <input type="text" name="interest" placeholder="Interest">
    <input type="text" name="year" placeholder="Year">
    <button>Calculator</button>
</form>
<?php
$money = $_POST["money"];
$interest = $_POST["interest"];
$year = $_POST["year"];
for ($i =1; $i <=$year; $i++){
    $money = $money +$money*$interest/100;
}
echo $money;
?>

</body>
</html>
