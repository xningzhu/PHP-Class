<?php
echo "=======================<br>";
$colors3 = array("red","green","blue","yellow");

foreach ($colors3 as $value) {
    echo "$value <br>";
}

echo "=======================";
$colors2 = ["red", "green", "blue", "yellow" ];
var_dump($colors2);

$colors = ["red", "a" => "green", "5" => "blue", "yellow"];
var_dump($colors);

foreach ($colors as $key => $value){
    echo "$key:$value <br>";
}
?>