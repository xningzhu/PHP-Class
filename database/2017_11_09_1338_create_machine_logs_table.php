<?php
include_once  __DIR__."/../vendor/autoload.php";
include_once "read.php";

use Illuminate\Database\Capsule\Manager as Capsule;

Capsule::schema()->create('machine_logs', function ($table) {
    $table->increments('id'); //
    $table->string('email')->unique();
    $table->timestamps();
});



