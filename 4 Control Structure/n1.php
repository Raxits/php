<?php
    $a = 5;
    $b = 17;
    $c = 9;


    echo "a = $a<br>";
    echo "b = $b<br>";
    echo "c = $c<br>";

    if($a<$b){
        if($b<$c){
            echo "$c is Maximum";
        }
        else{
            echo "$b is Maximum";
        }
    }
    else{
        if($a<$c){
            echo "$c is maximum";
        }
        else{
            echo "$a is maximum";
        }
    }
?>