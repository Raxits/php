<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Area Of Square</title>
</head>
<body>
    <center>
    <div class="square">
    </div>
    <br>

    <?php
        $length=4;
        $ans=$length * $length;
        echo "Area of Square <strong>$ans</strong> where Length is 4";

    ?>    
    </center>
    <style>
            .square{
                width: 120px;
                height: 120px;
                background-color: yellow;
                border: 2px solid red;
                position: relative;
            }
            .square::before{
                content:'length=4';
                transform: rotate(90deg);
                position: absolute;
                top: 50px;
                left: 103px;
            }

    </style>

</body>
</html>
