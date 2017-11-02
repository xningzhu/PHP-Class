<?php

include_once "Animal.php";

class Dog extends Animal{

    private $petName;


    public function __construct($petNameFromOut){
        parent::__construct("狗", 0, 0);
        $this->petName = $petNameFromOut;
        $this->position;
    }

    public function getPetName(){
        return $this->petName;
    }

    public function setPetName($petName){
        $this->petName=$petName;
    }
}
//測試
/*$dog = new Dog("Uncle");
echo $dog->getAnimalType();
echo $dog->getPetname()."<br>";

$dog->setPetName("Walter");
echo $dog->getPetName()."<br>";*/

