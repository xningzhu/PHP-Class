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
<?php include 'menu.php'?>
<h1>Welcome to Books 4 Kids</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
<?php include 'footer.php'?>
<?php include 'footer.php'?> <!--為何 footer.php 被 include 兩次沒事？-->
<?php include 'API.php'?>
<?php include 'API.php'?>    <!--為何 API.php 被 include 兩次會傳回錯誤？-->
</html>
