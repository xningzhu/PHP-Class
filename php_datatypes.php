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
$x = 5985;
var_dump($x);
echo "<br>";
$x = -345; //負數
var_dump($x);
echo "<br>";
$x = 0x8c; //十六進制數
var_dump($x);
echo "<br>";
$x = 047; //八進制數
var_dump($x);
?>

<?php
$x = 10.365;
var_dump($x);
echo "<br>";
$x = 2.4e3;
var_dump($x);
echo "<br>";
$x = 8E-5;
var_dump($x);
?>

<?php
$carBrands = ["Volvo","BMW","SAAB"];
$carBrands = ["name" => "Tom","gender" => "M","area" => "苗栗"];
var_dump($carBrands);
echo "陣列的宣告，取用，修改，印出結果。<br>";
echo $carBrands["name"];
$classmateNames = ["呈融","漢秋","明惠","朱"];
var_dump($classmateNames);

echo "第二排第一位同學是：".$classmateNames[0]."<br>";
$classmateNames[5] = "Patty";
var_dump($classmateNames);



?>


</body>
</html>