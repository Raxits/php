<?php
//write a php function to change the following array's all values to upper or lower case.
    

    function tolower($c)
    {
        foreach($c as &$value){
            $value = strtolower($value);
        }
        print_r($c);
    }
    
    function toupper($c)
    {
        foreach($c as &$value){
            $value = strtoupper($value);
        }
        print_r($c);
    }
    $color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');

    print_r($color);
    echo "<br> Values are in lower case <br>";
    tolower($color);
    echo "<br> Values are in upper case <br>";
    toupper($color);
?>