<?php
//write a program to find sum of diagonal in matrix
function initialize($r, $c ){
    for($i=0;$i<$r;$i++){
        for($j=0;$j<$c;$j++)
            $a[$i][$j] = rand(0,9);
    }   
    return $a;
}

function display($g){
    foreach($g as $k => $v){
        foreach($v as $k1 => $v1)
            echo $v1 . " ";
        echo "<br>";
    }

}

    $r = 3;
    $c = 3;
    $a=initialize($r,$c);
    echo "Matrix is : <br>";
    display($a);
    $sum = 0;
    for($i=0;$i<$r;$i++){
        for($j=0;$j<$c;$j++){
            if($i == $j){
                $sum += $a[$i][$j];
            }
        }
    }

    echo "Sum of diagonal : <b> " . $sum . "<b>"; 
?>
