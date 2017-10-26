<?php
date_default_timezone_set('Asia/Taipei');
$t = date("H");
var_dump($t);

if($t < "20")
{
    echo "Have a good day!";
}
echo "<br>";
echo "===================";
// ? : 條件判斷式 (C# 有講過，但陳老師不愛用，因為雖然寫起來很快，但可讀性很差)
$hour = "6";
$t =($hour >= 12) ? $hour-12 : $hour;
var_dump($t);

echo "<br>";
?>