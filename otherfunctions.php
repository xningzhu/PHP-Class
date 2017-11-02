<?php
include 'API.php';

function testMySQL(){
    $dbLink = connect2MySQL("localhost","homestead","secret","PHP_testDB");
}

testMySQL()
?>