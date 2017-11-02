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
        include 'API.php';

//        註解：在 PHP 中以 dolor sign ($) 宣告變數
        $host = "localhost";//請看主機 (Homestead) 上的 /etc/hosts，小心 Windows/system32/drivers/etc 之下也有 hosts 檔，要弄清楚編輯的對象
        $user = "homestead";
        $password = "secret";
//        執行連線到資料庫的動作，並將回傳的東西存放到 $dbLink 中
        $database = "PHP_testDB";
//        $dbLink = new mysqli($host, $user, $password, $database);

//        檢查是否連線錯誤
//        if($dbLink->connect_error)
//        {
//            die("連線錯誤：".$dbLink->connect_error); //物件導向，透過物件執行。
//            die("連線錯誤：".mysqli_connect_error());//程序導向，此例是透過函數執行。
//        }
//        else
//            echo "<br><br><br>成功連線至資料庫~";//連線成功，物件 dbLink 可用來執行後續動作。
        $dbLink = connect2MySQL($host,$user,$password,$database);
        $sql = "SELECT * FROM students";
        $result = $dbLink->query($sql);

//        var_dump($result);  列出除錯用的資訊

        if( $result->num_rows > 0)//檢查是否有資料
        {
            while( $row = $result->fetch_array())// 將資料取出列印
            {
                echo "<br>name: ".$row["name"].
                     "gender: ".$row["gender"].
                     "address: ".$row["addressArea"].
                    "addressDetail".$row["addressDetail"];

            }
        }
        else
            echo "沒有資料啦~~";

        $dbLink->close();//應該每次都要關閉資料庫的連線


    ?>
</body>
</html>