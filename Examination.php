<?php
//include_once "AllClass/Animal.php";
include_once "ZXNstudio/AllClass/Cat.php"; //即使有用命名空間，還是需要 include
include_once "ZXNstudio/AllClass/Dog.php";

use ZXNstudio\AllClass\Cat;//命名空間的階層建議依照實際資料夾的結構
use ZXNstudio\AllClass\Cat as CatA;//可以用 as 取別名，以避開其他同名(也許在不同階層樹)的類別
use ZXNstudio\AllClass\Dog;
use const ZXNstudio\AllClass\TEST;//命名空間也可以用在變數，通常是常數
use const ZXNstudio\AllClass\TEST as const_TEST;//也可以用 as 取別名
use function ZXNStudio\AllClass\test;//命名空間也可以用在函式
use function ZXNStudio\AllClass\test as func_test;//也可以取別名

//觀察 Cat 類別中，以 static 宣告的靜態屬性 "staticProperty" 和靜態方法 "staticFunction"
//在 new 出 Cat 之前，該類別的靜態屬性和靜態方法已經可以使用。雙冒號表示其屬於類別範圍。

echo Cat::$staticProperty; //還未初始化即可使用
echo "<br>";
Cat::staticFunction("類別");
echo "<br>";
echo Cat::$staticProperty;//靜態屬性在靜態方法中被改變了
echo "<br>";
echo "<br>";
//
//
//
$cat = new Cat("Milky"); //IDE為何以蚯蚓線加註 Cat，因為此專案資料夾 (Public) 還有其他地方也有定義一個 Cat class, 但是沒差，因為這裡的 include 有指定對路徑。
echo $cat->getAnimalType();
echo $cat->getPetName();
echo "<br>";
echo $cat::$staticProperty; //new 之後仍可使用類別的靜態屬性
echo "<br>";

$cat->getFood("素雞");
$cat->moveDxDy(2,3);
$cat->moveDxDy(4,5);
echo "<br>";
echo "<br>";
echo "<br>";

$dog = new Dog("Spot");
echo $dog->getAnimalType();
echo $dog->getPetName();
echo "<br>";

$dog->getFood("鳳梨");
$dog->moveDxDy(2,3);
$dog->moveDxDy(4,5);
echo "<br>";
echo "<br>";
echo "<br>";

echo "先來看一下 Cat 類別中目前的靜態屬性：". Cat::$staticProperty."<br>";
$cat2 = new Cat("斑斑");
echo "這裡開始是 new 出一隻斑斑cat2".$cat2->getPetName()."，…<br>";
echo "cat2::staticProperty 是：".$cat2::$staticProperty; //從類別的角度叫用的靜態屬性
echo "<br>";
echo "cat::staticProperty 是：".$cat::$staticProperty; //另一個物件的角度但仍是靜態屬性
echo "<br>";
echo "<br>";
echo "<br>";

echo "以下是命名空間、命名空間別名的相關範例<br>";
$catA = new CatA("Hello");//使用類別的別名來 new 物件
echo $catA->getPetName();


$catNameSpace = new ZXNstudio\AllClass\Cat("喵喵");//直接到 namespace 使用
echo $catNameSpace->getPetName();
echo "<br>";

echo ZXNstudio\AllClass\TEST;
echo TEST;
echo const_TEST;

ZXNstudio\AllClass\test();
echo "<br>";
test();
echo "<br>";
func_test();
echo "<br>";


