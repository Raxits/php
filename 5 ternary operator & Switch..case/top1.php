<?php
    $a = 2;
    $b = 5;
    $c = 4;
    $d = ($a > $b) ? (($a > $c)? $a : $c) : (($b>$c)? $b : $c);
    echo "a = $a <br> b = $b <br> c = $c <br> maximum Number is $d "; 
?>