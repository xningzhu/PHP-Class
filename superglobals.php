<?php
$x = 75;
$y = 25;
var_dump($GLOBALS);
function addition() {
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}
var_dump($GLOBALS);
addition();
echo $z;
?>