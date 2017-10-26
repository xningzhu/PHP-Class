<?php

echo "if else<br>";
$x = false;
$tmp = "100";
$x = ( $tmp < 10 );

$tmp = "mike";
$x = ($tmp == "make");

//多行程式碼必須以大括弧包住，單行程式碼則非必要。
if($x) {
    echo "true 則執行 myFunc4 和 myFunc3<br>";
    myFunc4();
}
else
    echo "false 則執行 myFunc<br>";
    myFunc();

echo "static 變數<br>";

function myFunc4() {
    static $x = 100;
    $x = $x + 1;
    echo $x."<br>";
}
myfunc4();
myfunc4();
myfunc4();




echo "<br>";
echo "變數的作用範圍<br>";
$x = 100;

//在函式外(大括號外)定義的變數，對函式無效(函式不會認得該變數)。
//以下 myFunc2 函式中出現的$x被開發環境指出錯誤"Undefined variable 'x'。
function myFunc2() {
    $y = 200;
    echo "y = $y";
    echo "x = $x";
}



//echo "<br>";
//echo "函式<br>";

function myFunc() {
    echo "This is from myFunc().";
    echo "<br>";
}
////函式要叫用才會執行，沒叫用就不會執行。
//myFunc();
//myFunc();
//myFunc();
//myFunc();
//myFunc();

?>