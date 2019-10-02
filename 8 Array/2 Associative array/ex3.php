<?php
    /*write a php script to sort the following associative array
    a) Ascending order sort by value
    b) Ascending order sort by key
    c) Descending order sort by value
    d) Descending order sort by key*/


    function asedn_value($a){
        echo "<br><b>Ascending order sort by value</b><br>";
        asort($a);
        print_r($a);
    }
    function asedn_key($a){
        echo "<br><b>Ascending order sort by Key</b><br>";
        ksort($a);
        
        print_r($a);
    }
    function dsedn_value($a){
        echo "<br><b>Descending order sort by value</b><br>";
        arsort($a);
        print_r($a);
    }

    function dsedn_key($a){
        echo "<br><b>Descending order sort by key</b><br>";
        krsort($a);
        print_r($a);
    }

    $a = array("Sophia" => "31", "Jacob" => "41", "William" => "39", "Ramesh" => "40");
    print_r($a);
    echo "<br><pre>";
    asedn_value($a);
    asedn_key($a);

    dsedn_value($a);
    dsedn_key($a);
    echo "</pre>";

?>