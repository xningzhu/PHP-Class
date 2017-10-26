<?php

//1. 定義 Animal 類別
//2. 屬性 position 可被繼承
//3. 初始化時可以設定物種名稱及初始位置
//4. 可以取得物種名稱
//5. 可以從外部得到食物

class Animal{
    private $animalType = "default animal type"; //若沒有呼叫父類別的建構子，會印出這個。
    protected $position; // 以 protected 宣告才可以被繼承！

    public function __construct($animalTypeFromOut, $posX, $posY){
        $this->animalType=$animalTypeFromOut;
        $this->position=["x"=>$posX, "y"=>$posY];
    }

    public function getAnimalType(){
        return $this->animalType;
    }

    protected function getFood($foodName){
        echo "得到食物: $foodName<br>";
    }
}