<?php
include_once __DIR__."/../vendor/autoload.php";
include_once "read.php";

use Illuminate\Database\Capsule\Manager as Capsule;

$faker = Faker\Factory::create();

//以下測試 faker 是否安裝成功，亦即是否可產生假資料
//echo "<h3>$faker->name</h3>";
//echo "<h4>$faker->address</h4>>";
//echo $faker->text."<br>";

for($i=0; $i<5; $i++)
    Capsule::table('users')->insert(
        [
            'name' => $faker->name,
            'phone' => $faker->phoneNumber,
            "address" => $faker->address,
            "email" => $faker->email
        ]
    );