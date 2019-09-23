<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Area Of Rectangle</title>
</head>

<body>
    <center>
    <br>
    <br>
    <div class="rectangle"></div>
    <br>
<?php
    $length =4;
    $height =5;
    $ans = $length * $height;
    echo "Area of Rectangle <strong>$ans</strong> where length is 4 and height is 5";
    
?>
    </center>
    <style>
        .rectangle{
            width: 100px;
            height: 70px;
            background-color: yellow;
            border-left: 2px solid red;
            border-right: 2px solid red;
            border-top: 2px solid green;
            border-bottom: 2px solid green;
            position: relative;
        }

        .rectangle::before{
            content: 'length=4';
            position: absolute;
            top: -20px;
            left: 18px;
        }

        .rectangle::after{
            content: 'height=5';
            position: absolute;
            transform: rotate(90deg);
            top: 28px;
            left: 85px;
        }

    </style>
    
</body>
</html>
