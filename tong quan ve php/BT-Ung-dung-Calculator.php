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
<h1>Simple Calculator</h1>
<form action="" method="post">
    <fieldset>
        <legend>Calculator</legend>
        <table>
            <tr>
                <td>First operand:</td>
                <td><input type="text" name="st1"></td>
            </tr>
            <tr>
                <td>Operator:</td>
                <td>
                    <select name="calculation">
                        <option value="+">+</option>
                        <option value="-">-</option>
                        <option value="*">*</option>
                        <option value="/">/</option>
                    </select></td>
            </tr>
            <tr>
                <td>Second operand:</td>
                <td><input type="text" name="st2"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Calculate"></td>
            </tr>
        </table>
    </fieldset>
</form>
<h1>Result:</h1>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $st1 = $_POST['st1'];
    $pay = $_POST['calculation'];
    $st2 = $_POST['st2'];

    if ($st1 == "" || $st2 == "") {
        echo "";
    } else if ($pay == "+") {
        echo $st1 . " + " . $st2 . ' = ' . $st1 + $st2;
    } else if ($pay == "-") {
        echo $st1 . " - " . $st2 . ' = ' . $st1 - $st2;
    } else if ($pay == "*") {
        echo $st1 . " * " . $st2 . ' = ' . $st1 * $st2;
    } else if ($pay == "/") {
        echo $st1 . " / " . $st2 . ' = ' . $st1 / $st2;
    }
}
?>

</body>
</html>
