<?php
namespace ZXNstudio\AllClass;

//1. 定義 Animal 類別
//2. 屬性 position 可被繼承
//3. 初始化時可以設定物種名稱及初始位置
//4. 可以取得物種名稱
//5. 可以從外部得到食物

class Animal{
    private $animalType = "default animal type"; //若沒有呼叫父類別的建構子，會印出這個。
    protected $position; // 以 protected 宣告才可以被繼承！
    protected $foodName;

    public function __construct($animalTypeFromOut, $posX, $posY){
        $this->animalType=$animalTypeFromOut;
        $this->position=["x"=>$posX, "y"=>$posY];
    }

    public function getAnimalType(){
        return $this->animalType;
    }

    public function getFood($foodName){
        $this->foodName = $foodName;
        echo "得到食物：$foodName<br>";
        //還要加入判斷式，視動物的飲食習慣來決定要不要吃
        $this->eat();
    }

    protected function eat(){
        echo "吃".$this->foodName."<br>";

        $this->digest();
    }

    private function digest(){
        echo "消化".$this->foodName."<br>";
    }

    public function moveDxDy($dx, $dy){
        $this->position["x"] = $this->position["x"] + $dx;
        $this->position["y"] = $this->position["y"] + $dy;
        $this->getPosition();
    }

    public function getPosition() {
        $x = $this->position["x"];
        $y = $this->position["y"];
        echo "<br>($x, $y)";
    }
}