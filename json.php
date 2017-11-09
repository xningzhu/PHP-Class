<?php
include_once __DIR__."/vendor/autoload.php";

use Carbon\Carbon;

$a = ["time" => Carbon::now()->toDateTimeString()];

echo json_encode($a);//{"time":"value"}

?>