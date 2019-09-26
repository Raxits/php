<?php

    $l1=5;
    $l2=3;
    $a = array(2,4,5,6,7);
    $b = array(3,4,5);
    echo "merge two array into one array<br>";
    for($i=0;$i<$l1;$i++)
        $c[$i]=$a[$i];
    
    for($j=0;$j<$l2;$j++){
        $c[$i+$j]=$b[$j];
        
    }
    for($j=0;$j<$l1;$j++){
        echo 'a['. $j."] $a[$j]" . "&nbsp;&nbsp;&nbsp;&nbsp;";
    }
    echo "<br>";
    for($j=0;$j<$l2;$j++){
        echo 'b['. $j."] $b[$j]" . "&nbsp;&nbsp;&nbsp;&nbsp;";
    }
    echo "<br>";

    for($j=0;$j<($l1+$l2);$j++)
        echo 'c['. $j."] $c[$j]" . "&nbsp;&nbsp;&nbsp;&nbsp;";
        
    
?>