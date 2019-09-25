<?php
    function addition(){
        $a= 4;
        $b= 5;
        echo "Addition of $a and $b is ", $a+$b ,"<br>";
    }
    function subtraction(){
        $a = 4;
        $b = 5;
        echo "Subtraction of $a and $b is ", $a-$b , "<br>";
    }
    function multiplication($a,$b){
        echo "Multiplication of $a and $b is ", $a*$b , "<br>";
    }
    function division(){
        $a = 4;
        $b = 5;
        return "Division of $a and $b is " . $a/$b . "<br>";
    }
    function modulo($a,$b){
        return $a%$b;

    }
    $a = 4;
    $b = 5;
    echo '$a = '.$a."<br>";
    echo '$b = '.$b."<br>";
    for($i=1;$i<=5;$i++){
        echo "choice = " . $i . "<br>";
        switch($i){
            case 1: addition();
                break;
            case 2: subtraction();
                break;
            case 3: multiplication($a,$b);
                break;
            case 4: echo division();
                break;
            case 5: echo "modulus of $a and $b is " . modulo($a,$b) . "<br>";
            break;
        }
    }
?>