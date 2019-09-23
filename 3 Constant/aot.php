<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Area Of Triangle</title>

</head>
<body>
    <center>
        <div class="triangle">
            <div class="t1"></div>
            <div class="t2"></div>
        </div>

    <?php
        $base = 3;
        $height = 8;
        $ans = ($base * $height)/2;
        echo "<br>";
        echo "Area of Triangle <strong> $ans</strong> where base is 3 and height is 8";
        
    ?>
    </center>
    <style>
        .triangle{
            width: 1px;
            border-left: 100px solid transparent;
            border-right: 100px solid transparent;
            border-bottom: 120px solid green;
            position: relative;
        }
        .t1{
            width: 3px;
            height: 119px;
            border-radius: 1.5px;
            /* border: 1px solid red; */
            position: absolute;
            top: 1px;
            background-color: red;
            left: 0px;
        }
        .t2{
            width: 199px;
            height: 2px;
            background-color: blue;
            position: absolute;
            top: 118px;
            left: -99px;
        }
        
    </style>

</body>
</html>
