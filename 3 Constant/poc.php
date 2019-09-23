<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perimeter of Circle</title>
</head>
<body>
    <center>
    <div class="poc"></div>

<?php
    define ("PI", "3.14");
    $radius=5;
    $ans= PI * $radius * 2;
    echo "<br> ";
    echo "Perimeter of Circle <strong>$ans</strong> where radius is 5";
    
?>
    </center>
    <style>
        .poc{
            width: 100px;
            height: 100px;
            background-color: yellow;
            border-radius: 50%;
            position: relative;
        }
        
        .poc::before{
            content: '';
            width: 4px;
            height: 4px;
            border-radius: 50%;
            background-color: red;
            transform-origin: 50px;
            position: absolute;
            top: 48px;
            left: 0px;
            animation-name: poc1;
            animation-duration: 1s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }
        @keyframes poc1{
            0%{
                transform: rotate(0deg);
            }
            100%{
                transform: rotate(359deg);
            }
        }
    </style>
    
</body>
</html>
