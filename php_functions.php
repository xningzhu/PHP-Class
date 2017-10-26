<?php
function minus($x, $y) {
    $z = $x - $y;
    return $z;
}
    echo "5 - 10 = " . minus(5, 10). "<br>";
    echo "999 - 263 = " . minus (999, 263) . "<br>";

function writeMsg() {
    echo "<br>";
    echo "Hello world!";
    echo "<br>";
}
writeMsg();

function familyName($fname) {
    echo "$fname Zhang.<br>";
}

familyName("Li");
familyName("Hong");
familyName("Tao");
familyName("Xiao Mei");
familyName("Jian");

function familyName($fname,$year) {
    echo "$fname Zhang. Born in $year <br>";
}

familyName("Li","1975");
familyName("Hong","1978");
familyName("Tao","1983");

function setHeight($minheight=50) {
    echo "The height is : $minheight <br>";
}

setHeight(350);
setHeight(); // 将使用默认值 50
setHeight(135);
setHeight(80);
?>