<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php

        $a=4;
        $b=5;
        $c=$a+$b;
        $d=$a-$b;
        $e=$a*$b;
        $f=$a/$b;
        $g=$a%$b;
        echo "<center>";
        echo '<pre><div class="d0">  -----Addition-------</div>';
        echo '<div class="d1">  |                  |' . '</div>';
        echo '<div class="d2">  |                  |' . '</div>';
        echo '<div class="d3">'."  |    $a + $b = $c     |" . '</div>';
        echo '<div class="d4">  |                  |' . '</div>';
        echo '<div class="d5">  |                  |' . '</div>'; 
        echo '<div class="d6">   -------------------- </div></pre>';
    ?>
    <br>
    <br>
    
    <?php
        echo '<pre><div class="d1">  ----Subtraction-----</div>';
        echo '<div class="d2">  |                  |' . '</div>';
        echo '<div class="d3">  |                  |' . '</div>';
        echo '<div class="d4">'."  |    $a - $b = $d    |" . '</div>';
        echo '<div class="d5">  |                  |' . '</div>';
        echo '<div class="d6">  |                  |' . '</div>';
        echo '<div class="d0">  --------------------</div></pre>';

    ?>
    <br>
    <br>

    <?php
        echo '<pre><div class="d2">  ---Multiplication---</div>';
        echo '<div class="d3">  |                  |' . '</div>';
        echo '<div class="d4">  |                  |' . '</div>';
        echo '<div class="d5">' . "  |    $a * $b = $e    |" . '</div>';
        echo '<div class="d6">  |                  |' . '</div>';
        echo '<div class="d0">  |                  |' . '</div>';
        echo '<div class="d1">  --------------------</div></pre>';

    ?>
    <br>
    <br>
    <?php
        echo '<pre><div class="d3">  ------Division------</div>';
        echo '<div class="d4">  |                  |' . '</div>';
        echo '<div class="d5">  |                  |' . '</div>';
        echo '<div class="d6">' . "  |    $a / $b = $f   |" . '</div>';
        echo '<div class="d0">  |                  |' . '</div>';
        echo '<div class="d1">  |                  |' . '</div>';
        echo '<div class="d2">  --------------------</div></pre>';

    ?>
    <br>
    <br>
    <?php
        echo '<pre><div class="d4">  ------Modulus-------</div>';
        echo '<div class="d5">  |                  |' . '</div>';
        echo '<div class="d6">  |                  |' . '</div>';
        echo '<div class="d0">' . "  |    $a % $b = $g     |" . '</div>';
        echo '<div class="d1">  |                  |' . '</div>';
        echo '<div class="d2">  |                  |' . '</div>';
        echo '<div class="d3">  --------------------</div></pre>';
        echo "</center>";
    ?>
    <style>
        pre{
            margin: 0px;
            font-size: 20px;
        }
        .d0{
            color: red;
        }

        .d1{
            color: yellow;
        }
        .d2{
            color: blue;
        }
        .d3{
            color: chartreuse;
        }
        .d4{
            color: tomato;
        }
        .d5{
            color: gold;
        }
        .d6{
            color: brown;
        }
    </style>


</body>
</html>
