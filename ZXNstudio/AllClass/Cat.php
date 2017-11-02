<?php
namespace ZXNstudio\AllClass;

include_once "Animal.php"; //include 和 include_once 的差異：後者避免重複引入(把 include 想成"複製(檔案內容)"。

class Cat extends Animal{

    private $petName;
    public static $staticProperty = "類別中宣告的靜態屬性"; //以 static 宣告的靜態變數，並指定初始值。
    public function __construct($petNameFromOut){
       parent::__construct("貓",0, 0);//需要呼叫父類別初始化的方法，否則父類別不會做它的建構子的初始動作
        $this->petName = $petNameFromOut;
        $this->position;
//        var_dump($this->position);
        self::$staticProperty = "在建構子中設定的靜態屬性：(".$this->petName.")"; //在建構子中為靜態屬性指派值，要用 "self::"
    }

    public function getPetName(){
//        $this->getAnimalType(); //測試 protected 方法
        return $this->petName;
    }

    public static function staticFunction($test){
        echo "this is a static function";
        self::$staticProperty = "從類別的靜態方法中改變靜態屬性(".$test.")";
    }
}

function test(){
    echo "function test";
}

const TEST = "const test<br>";//常數的命名慣例是全大寫



//測試
/*$cat = new Cat("FlyGuy");
echo $cat->getAnimalType();//繼承後可以直接使用父類別的 public 方法
echo $cat->getPetName();

$cat->getFood("五香乖乖");
$cat->moveDxDy(2,3);
$cat->moveDxDy(4,5);*/
