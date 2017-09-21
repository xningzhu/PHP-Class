<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>連接到 MySQL | PHP</title>
</head>
<body>
    <h1>連接到 MySQL</h1>
    <?php
        echo "測試連線資料庫…";

        //註解：在 PHP 中以 dolor sign ($) 宣告變數
        $host = "localhost";//請看主機 (Homestead) 上的 /etc/hosts，小心 Windows/system32/drivers/etc 之下也有 hosts 檔，要弄清楚編輯的對象
        $user = "homestead";
        $password = "secret";

        //執行連線到資料庫的動作，並將回傳的東西存放到 $dbLink 中
        $dbLink = new mysqli($host, $user, $password);

        //檢查是否連線錯誤
        if($dbLink->connect_error)
        {
//            die("連線錯誤：".$dbLink->connect_error); //物件導向，透過物件執行。
            die("連線錯誤：".mysqli_connect_error());//程序導向，此例是透過函數執行。
        }
        else
            echo "<br><br><br>連線成功囉~";
    ?>
</body>
</html>