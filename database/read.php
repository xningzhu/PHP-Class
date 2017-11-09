<?php
include_once __DIR__."/../vendor/autoload.php";//__DIR__是目前這支 read.php 所在的位置，只是其結尾無斜線。所以後面用點串接的字串要以斜線開頭。
                                               //需要用 .. 回到上一層才能找到 vendor/autoload.php


use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule();

$capsule->addConnection([
    'driver'    => 'mysql',
    'host'      => 'localhost', //通常都是 localhost，因為資料庫不應對主機以外的連線暴露
    'database'  => 'PHP_testDB', //資料庫名稱
    'username'  => 'homestead', //登入資料庫時用的帳號
    'password'  => 'secret', //登入資料庫時用的密碼
    'charset'   => 'utf8mb4',
    'collation' => 'utf8mb4_general_ci',
    'prefix'    => '',
]);

$capsule->setAsGlobal();

//$students = Capsule::table('students')->get();
//var_dump($students);

//$students = Capsule::select("SELECT * FROM students");//直接使用 sql 語法，得到跟上面一樣的結果
//var_dump($students);

//不要使用以下的方式，以免使用者輸入的 sql 語法造成安全性的問題（即 SQL Injection攻擊）
//$userInput = $_GET["sql"];
//$results = Capsule::select($userInput, array(1));
