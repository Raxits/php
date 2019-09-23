<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Area Of Circle</title>

</head>
<body>
    <center>
    <div class="circle">
    <div class="r1"></div>
    <div class="r2"><p>Radius=5</p></div>
    </div>
    <br>
<?php

    define("PI","3.14");

    $radius=5;
    $ans=PI * $radius * $radius;
    echo "Area of Circle <strong>$ans</strong> Where radius is 5 <br>";
    
?>
</center>
<style>
        .circle{
            width: 120px;
            height: 120px;
            border-radius: 50%;
            background-color: yellow;
            position: relative;
        }
        .r1{
            width:60px;
            border:solid 2px red;
            position: absolute;
            top: 59px;
            left:56px;
        }
        .r2{
            position: absolute;
            top: 25px;
            left: 56px;
        }

    </style>
</body>
</html>
