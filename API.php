<?php

function connect2MySQL($host, $user, $password, $database)
{
//註解：在 PHP 中以 dolor sign ($) 宣告變數
//    $host = "localhost";//請看主機 (Homestead) 上的 /etc/hosts，小心 Windows/system32/drivers/etc 之下也有 hosts 檔，要弄清楚編輯的對象
//    $user = "homestead";
//    $password = "secret";
//    $database = "PHP_testDB";
//執行連線到資料庫的動作，並將回傳的東西存放到 $dbLink 中
    $dbConnect = new mysqli($host, $user, $password, $database);
//檢查是否連線錯誤
    $ret = "";
    if ($dbConnect->connect_error) {
//            die("連線錯誤：".$dbLink->connect_error); //物件導向，透過物件執行。
        die("連線錯誤：" . mysqli_connect_error());//程序導向，此例是透過函數執行。
    }
    else
        echo "連線成功 ^^";//連線成功，物件 dbLink 可用來執行後續動作。/**>
    return $dbConnect;
}
?>