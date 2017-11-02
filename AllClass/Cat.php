<?php

include_once "Animal.php"; //include 和 include_once 的差異：後者避免重複引入(把 include 想成"複製(檔案內容)"。

class Cat extends Animal{

    private $petName;

    public function __construct($petNameFromOut){
       parent::__construct("貓",0, 0);//需要呼叫父類別初始化的方法，否則父類別不會做它的建構子的初始動作
        $this->petName = $petNameFromOut;
        $this->position;
//        var_dump($this->position);
    }

    public function getPetName(){
//        $this->getAnimalType();
        return $this->petName;
    }



}

//測試
/*$cat = new Cat("FlyGuy");
echo $cat->getAnimalType();//繼承後可以直接使用父類別的 public 方法
echo $cat->getPetName();

$cat->getFood("五香乖乖");
$cat->moveDxDy(2,3);
$cat->moveDxDy(4,5);*/
