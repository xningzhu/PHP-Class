1. 宣告一個變數 x，給它一個值，印到標準網頁格式中。
2. 宣告兩個函式，內部宣告兩個變數 x 和 y，印到標準網頁格式中。
3. 執行上述兩個函式。
4. 在函式中加入 HTML 語法，在其中應用變數.
5. 在函式中使用 global 宣告，或以 GLOBALS[] 取得全域變數，印出全域變數，修改全域變數。
6. 執行完函式後，印出已經被修改的全域變數。

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
//以下是步驟 1~4。
//$x = 100;
//
//function myTest1() {
//    $y = 10;
//    echo "<p> 在 myTest1() 函數內部測試變數叫用：</p>";
//    echo "變數 x 是：$x";
//    echo "<br>";
//    echo "變數 y 是：$y";
//    echo "<br>";
//}
//
//function myTest2() {
//    echo "<p>在 myTest2() 函數內部測試變數叫用：</p>";
//    $y=200;
//    echo "變數 y 是：$y";
//    echo "<br>";
//}
//echo "執行 myTest1()...<br>";
//myTest1();
//echo "myTest1() 執行完畢<br><br>";
//
//echo "執行 myTest2()...<br>";
//myTest2();
//echo "myTest2() 執行完畢<br><br>";
//echo "以下是直接在 php 區塊 (即函數範圍外) 中叫用變數 x 並印出<br>";
//echo "變數 x 是：$x";
//以下是步驟 5~6。
$x = 100;
function myTest1() {
    $y = 10;
    global $x;
    $x = 3;
    echo "<p> 在 myTest1() 函數內部測試變數叫用並印出：</p>";
    echo "變數 x 是：$x";
    echo "<br>";
    echo "變數 y 是：$y";
    echo "<br>";
}

function myTest2() {
    echo "<p>在 myTest2() 函數內部測試變數叫用並印出：</p>";
    $y=200;
    echo "變數 x 是：".$GLOBALS["x"];
    echo "<br>";
    $GLOBALS["x"]=5;
    echo "變數 y 是：$y";
    echo "<br>";
}
echo "<br>";
echo "執行 myTest1()...<br>";
myTest1();
echo "myTest1() 執行完畢<br><br>";

echo "執行 myTest2()...<br>";
myTest2();
echo "myTest2() 執行完畢<br><br>";

echo "以下是在 php 區塊 (即函數範圍外) 中叫用變數 x 並印出<br>";
echo "見鬼啦，變數 x 的值幾時變成了 $x";

?>
</body>
</html>