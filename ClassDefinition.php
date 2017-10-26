<?php
/**
 * Created by PhpStorm.
 * User: yvtc
 * Date: 2017/10/12
 * Time: 下午 03:56
 */
//定義類別，物件的藍圖/設計圖（如果以建築物比喻的話，類別還不是建築物，只是個設計圖）

class Animal //Animal(動物)是所有 Cat (貓) 的父類別
{
//    private $pri1; //以 private 宣告的變數(屬性)，無法被繼承
//    protected $prot1; //以 protected 宣告的變數(屬性)，可以被繼承


}


class Cat //Cat (貓) 是 Animal(動物)是的子父類別
{
    private $name; // 變數，經實體化由外部叫用時，便成「(物件的)屬性」
    private $test = "test";
    protected $position;

    function __construct($name){ //建構子，通常用來做初始化的動作
        $this->position=["x" => 0, "y" => 0]; //方括號為陣列
        $this->name = $name;
    }
    // 陣列的指定：$陣列名稱 = [陣列元素(index0), 陣列元素(index1), 陣列元素(index2), ...];
    // 第24行是利用鍵值對(Key-Value)的方式來指定陣列元素。"x => 0" 表示改用 "x" 來代表 "index0" 這個位置，而這個位置的值為 0。
    function setName($name){
        $this->name = $name; //將 name 屬性宣告 private，並透過 setName 這個方法來保護，避免意外更動物件的名稱
    }
    function getName(){
        return $this->name;
    }

    function test(){    //函式，經實體化由外部叫用時，便成「(物件的)方法」
        echo "\n測試\n";
    }

    function moveDxDy($dx, $dy){
        $this->position["x"] = $this->position["x"] + $dx;
        $this->position["y"] = $this->position["y"] + $dy;
//        $this->position["x"] += $dx;
//        $this->position["y"] += $dy;
//        $x = $this->position["x"];
//        $y = $this->position["y"];
//        echo "($x, $y)<br>";
//        var_dump($this->position);
//        return $this->position;
        $this->getPosition();

//        $x = $x + $dx;
//        $y = $y + $dy;
//        $this->$position = ["x" => $x, "y" => $y];
//        echo "($x,$y)<br>";
    }

    function getPosition() {
            $x = $this->position["x"];
            $y = $this->position["y"];
            echo "<br>($x, $y)";
    }
}

$cat1 = new Cat("BigK");
    //以建築物來比喻，new 就是根據建築物的設計圖，將建築物實際建設出來。new 這個動作稱為「實體化」。
/*var_dump($cat);*/
echo $cat1->getName()."<br>"; //實體化之後，name稱為屬性。要使用物件的屬性或方法，在 php 中是使用 "->"，相當於 C# 中的點 (.)

$cat1->test();//實體化之後，test()稱為方法。

// 練習
// 1. 定義一個位置的屬性
// 2. 設計一個用 x, y 座標的概念，讓 cat 移動 dx, dy 的方法
// 3. 移動之後，

$cat1->moveDxDy(1,1);
//echo $cat1->position();
$cat1->moveDxDy(-5,1);
//echo $cat1->position();
$cat1->moveDxDy(2,2);
//echo $cat1->position();
$cat1->moveDxDy(1,5);
//echo $cat1->position();
