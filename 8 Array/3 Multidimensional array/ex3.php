<?php
    //write a program to find addition of all array elements
    $r=3;
    $c=3;
    
    for($i=0;$i<$r;$i++){
        for($j=0;$j<$c;$j++)
            $a[$i][$j] = rand(0,9);
    }

    echo "<b>2d matrix is :</b> <br>";
    foreach($a as $k => $v){
        foreach($v as $k1 => $v1)
            echo $v1 . " ";
        echo "<br>";
    }

    $add = 0;
    foreach($a as $k => $v){
        foreach($v as $k1 => $v1)
            $add+=$v1;
    }

    echo "Addition of all array element is : <b>" . $add . "</b>";


?>