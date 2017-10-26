<?php

include_once "Animal.php";

class Cat extends Animal{

    private $petName;

    public function __construct($petNameFromOut){
       parent::__construct("貓",0, 0);//需要呼叫父類別初始化的方法，否則父類別不會做
        $this->petName = $petNameFromOut;
        $this->position;
    }

    public function getPetName(){
//        $this->getAnimalType();
        return $this->petName;
    }



}

$cat = new Cat("FlyGuy");
echo $cat->getAnimalType();//繼承後可以直接使用父類別的 public 方法
echo $cat->getPetName();

$cat->getFood("五香乖乖");
$cat->moveDxDy(2,3);
$cat->moveDxDy(4,5);
