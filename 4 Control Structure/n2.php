<?php
    $a =  5;
    $b =  8;
    $c = 1;

    echo "a = $a<br>";
    echo "b = $b<br>";
    echo "c = $c<br>";

    if ($a < $b){
        if($a < $c){
            echo "$a is minimum";
        }
        else{
            echo "$c is minimum";
        }
    }
    else{
        if($b<$c){
            echo "$b is minimum";
        }
        else{
            echo "$c is minimum";
        }
    }
?>