<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<P style="font-size: 16pt">Hello</P>

<?php
$begin = 16;
$end = 22;
$url=["https://tw.yahoo.com/","https://udn.com/news/index"];
for ($m=0; $m<2;$m++)
{
    echo "<a target='_blank' href=$url[$m]><P style=\"font-size: ".$i."pt\">PHP Example: For 迴圈</P></a>";
}

?>
</body>
</html>