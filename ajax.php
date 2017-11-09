<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello | PHP</title>
</head>
<body>
<h1>Hello World, this is index.html</h1>
<p>測試 jQuery</p>
<p id="now">這裡會變成時間</p>
<br>
</body>
</html>

<?php
//include_once __DIR__."/vendor/autoload.php";
//
//use Carbon\Carbon;
//
//printf("Right now is %s", Carbon::now()->toDateTimeString());
////printf("台北現在時間：%s", Carbon::now())
//?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $("p").click(function(){
            $(this).hide();
        })
    });

    (function loop(){
        setTimeout(function(){
            QueryData();
            loop();
        }, 1000);
        })();

    function QueryData(){
        jQuery.getJSON("http://homestead.app/json.php", function(data){
            var tmp = data;
            document.getElementById("now").innerHTML = data.time;
            });
    }
</script>

