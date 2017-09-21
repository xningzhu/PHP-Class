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
        $host = "";
        $user = "";
        $password = "";

        $dbLink = new mysqli($host, $user, $password);

        if($dbLink->connect_error)
        {
            die("連線錯誤：".$dbLink->connect_error);
        }
        else "連線成功囉！";

    ?>
</body>
</html>