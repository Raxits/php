<?php
    //write a php script to get the first element of the above array

    $color = array( 4 => 'white', 6 => 'green', 11 => 'red');
    print_r($color);
    $a = array_Shift($color);
    print_r("<br>First element of above array is : ");
    print_r($a);
?>