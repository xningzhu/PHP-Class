<?php
echo "<h2>PHP is fun!</h2>";
echo "Hello world!<br>";
echo "I'm about to learn PHP!<br>";
echo "This", " string", " was", " made", " with multiple parameters.";
echo "<br><br><br>";

$x = 5;
$y = 6;
$z = $x+$y;
//我的做法：
//echo '$x'." = $x <br>";
//echo '$y'." = $y <br>";
//echo '$z'." = ".'$x'."+".'&y'."<br>";
//echo '$z'." = ".$x+$y;
//老師的做法：
echo "x = ".$x."<br>";
echo "y = ".$y."<br>";
echo "z = x+y = ".$z."<br>";
echo "<br><br><br>";
//再一種做法：
echo "x = $x<br>"; //在雙引號中可以直接呼叫變數名稱取其值
echo "y = $y<br>";
echo "z = x+y =$z";
echo "<br><br><br>";
?>