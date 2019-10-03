<?php
//write a program to find sum of column in matrix

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
    echo "<hr>";
    for($i=0;$i<$c;$i++){
        $sum[$i] = 0;
        for($j=0;$j<$r;$j++){
            $sum[$i] += $a[$j][$i];
        }
    }
    for($i=1;$i<=$c;$i++)
        echo "sum of $i colomn is : <b>". $sum[$i-1]."</b><br>";
?>
