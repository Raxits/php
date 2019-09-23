<?php
    $a = 1111;
    $b = 23;
    $c = 16;
    $d = 10;

    echo "a = $a<br>";
    echo "b = $b<br>";
    echo "c = $c<br>";
    echo "d = $d<br>";
    if($a > $b){
        if($a > $c){
            if($a > $d){
                echo "$a is maximum";
            }
            else{
                echo "$d is maximum";
            }
        }
        else{
            if($c> $d){
                echo "$c is maximum";
            }
            else{
            echo "$d is maximum";
            }
        }
    }
    else{
        if($b > $c){
            if($b > $d){
                echo "$b is maximum";
            }
            else{
                echo "$d is maximum";
            }
        }
        else{
            if($c > $d){
                echo "$c is maximum";
            }
            else {
                echo "$d is maximum";
            }
        }
    }
?>