<?php

echo "陣列 - 鍵值對 Key Value<br>";
$keyValue = ["name" => "mike", "gender" => "m", "area" => "新竹"];
var_dump($keyValue);

echo $keyValue['name']."<br>";
echo $keyValue['gender']."<br>";
echo $keyValue['area']."<br>";

//陣列的宣告、命名與給值
echo "陣列<br>";
$a = [1,2,3];
echo "$a[0]<br>"; //取得並列印陣列index=0的值，陣列值的index是從0開始。

$a = ["Jack","Mike","Joseph"];
var_dump($a);

echo "$a[0]<br>";//取得陣列中index=0的值。

$a[0] = "傑克";//改變陣列中index=0的值。
echo "$a[0]<br>";

//變數的宣告與命名
echo "<h1>變數的宣告與命名</h1>";
//$x = "Hello";
//$y = "World";
echo '$tmp'." = Hello;<br>".'$tmp'." = Chris;<br><br>";
$tmp = "Hello";
$name = "Chris";
/* 為了程式的可讀性，強烈建議為變數指定有意義的名稱。
PHP 本身的關鍵字不分大小寫，但變數名稱有分大小寫。
變數名稱不可以數字開頭，必須以英文字母或底線開頭。 */
echo "以下是以 echo 輸出的結果<br>";
echo "$tmp".", ".$name."!";
?>


