<?php

//include_once "AllClass/Animal.php";
include_once "AllClass/Cat.php";
include_once "AllClass/Dog.php";

$cat = new Cat("Milky"); //IDE為何以蚯蚓線加註 Cat，因為此專案資料夾 (Public) 還有其他地方也有定義一個 Cat class, 但是沒差，因為這裡的 include 有指定對路徑。
echo $cat->getAnimalType();
echo $cat->getPetName();
echo "<br>";

$cat->getFood("素雞");
$cat->moveDxDy(2,3);
$cat->moveDxDy(4,5);
echo "<br>";

$dog = new Dog("Spot");
echo $dog->getAnimalType();
echo $dog->getPetName();
echo "<br>";

$dog->getFood("鳳梨");
$dog->moveDxDy(2,3);
$dog->moveDxDy(4,5);
echo "<br>";

