<?php
//associative array print using for loop
    $arr=array("apple"=>211,"mango"=>1000,"banana"=>2500);
    $key=array_keys($arr);
    $value=array_values($arr);
    for($i=0;$i<count($key);$i++)
        echo $key[$i] . "=>" . $value[$i] . "rs/kg<br>";

?>