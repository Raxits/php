<?php
//write a program to do multiplication of two different matrix
function initialize($r, $c ){
    for($i=0;$i<$r;$i++){
        for($j=0;$j<$c;$j++)
            $a[$i][$j] = rand(0,5);
    }   
    return $a;
}

function display($g){
    foreach($g as $k => $v){
        foreach($v as $k1 => $v1)
            echo $v1 . "&nbsp;&nbsp;&nbsp;&nbsp;";
        echo "<br>";
    }

 }

    $r=3;
    $c=3;
    
    $a = initialize($r,$c);
    $b = initialize($r,$c);
    
    echo "1) : <br>";
        display($a);    
    echo "2) : <br>";

        display($b);


    for($i=0;$i<$r;$i++){
        for($j=0;$j<$c;$j++){
            $d[$i][$j] = 0;
            for($k=0; $k<$c;$k++){
                $d[$i][$j] = $d[$i][$j] + ($a[$i][$k] * $b[$k][$j]);
            }

        }
    }
    echo "<hr><b>Multiplication of above two matrix is : </b><hr><br>";
    display($d);


?>