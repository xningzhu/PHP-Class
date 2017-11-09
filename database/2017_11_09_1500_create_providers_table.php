<?php
include_once  __DIR__."/../vendor/autoload.php";
include_once "read.php";

use Illuminate\Database\Capsule\Manager as Capsule;

Capsule::schema()->create('providers', function ($table) {
    $table->increments('id');
    $table->string('name')->unique();
    $table->integer('company_id')->unique();
    $table->string('phone')->unique();
    $table->string('address')->unique();
    $table->timestamps();
});