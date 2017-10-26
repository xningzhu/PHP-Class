<?php

include_once "Animal.php";

class Cat extends Animal{

    private $petName;

    public function __construct($petNameFromOut){
       parent::__construct("貓",0, 0);
        $this->petName = $petNameFromOut;
        $this->position();
    }

    public function getPetName(){
//        $this->getAnimalType();
        return $this->petName;
    }
}

$cat = new Cat("BigK");
echo $cat->getAnimalType();//繼承後可以直接使用父類別的 public 方法
echo $cat->getPetName();