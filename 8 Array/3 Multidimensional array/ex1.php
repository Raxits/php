<?php
    //write a program to print 2d array using for loop and foreach loop
    
    $r=3;
    $c=3;
    for($i=0;$i<$r;$i++){

        for($j=0;$j<$c;$j++)
            $a[$i][$j] = rand(1,10);
    }

    echo "<b>2d matrix print using for loop</b> <br>";
    for($i=0;$i<$r;$i++){
        for($j=0;$j<$c;$j++)
            echo $a[$i][$j] . " ";
        echo "<br>";
    }
    echo "<b>2d matrix print using foreach loop</b><br>";
    foreach($a as $k => $v){
        foreach($v as $k1 => $v1)
            echo $v1 . " ";

        echo "<br>";
    }

    


?>