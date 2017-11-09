<?php
include_once  __DIR__."/../vendor/autoload.php";
include_once "read.php";

use Illuminate\Database\Capsule\Manager as Capsule;

Capsule::schema()->create('books', function ($table) {
    $table->increments('id');
    $table->string('ISBN')->unique();
    $table->string('name');
    $table->string('author');
    $table->string('publisher');
    $table->integer('unit_price');
    $table->timestamps();
});