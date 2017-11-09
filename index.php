<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello | PHP -- 加入 Composer 囉~~</title>
</head>
<body>
<h1>Hello Composer World~~</h1>
</body>
</html>

<?php
include_once __DIR__."/vendor/autoload.php";

use Carbon\Carbon;

printf("Right now is %s", Carbon::now()->toDateTimeString());
//printf("台北現在時間：%s", Carbon::now())
?>

