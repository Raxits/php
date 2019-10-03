<?php
//write a program to find sum of row in matrix
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
    for($i=0;$i<$r;$i++){
        $sum[$i] = 0;
        for($j=0;$j<$c;$j++){
            $sum[$i] += $a[$i][$j];
            if($j<=$c-2)
                echo $a[$i][$j] . "&nbsp; + &nbsp;";
            else
                echo $a[$i][$j] . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; = &nbsp;&nbsp;";

        }
        echo  $sum[$i] . "<br>"; 
    }

?>
