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
<?php
$x=10;
echo "<br>宣告變數 x 初始值為 10<br>";
echo "++x = ".++$x."<br>";
echo "前遞增之後的 x 值：<br>";
echo $x;

$y=5;
echo "<br>宣告變數 y 初始值為 5<br>";
echo "y++ = ".$y++."<br>";
echo "後遞增之後的 y 值：<br>";
echo $y;

echo "<br>";
echo "<br>";

$x = array("a" => "red", "b" => "green");
$y = array("c" => "blue", "d" => "yellow");
$z = $x + $y; // $x 与 $y 的联合
var_dump($z);
var_dump($x == $y);
var_dump($x === $y);
var_dump($x != $y);
var_dump($x <> $y);
var_dump($x !== $y);

echo ("<br>");
$a = false;
$b = false;

var_dump($a || $b);
echo ("<br>");

?>

</body>
</html>