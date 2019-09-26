<?php
    $l = 5;
    $a = array(2,3,4,5,6);
    $b = array(2,3,4,5,6);
    for($i=0;$i<$l;$i++){
        $c[$i]=$a[$i]+$b[$i];
    }
    
    for($i=0;$i<$l;$i++){
        echo 'a['. $i."] $a[$i]" . "&nbsp;&nbsp;&nbsp;&nbsp;";
        echo 'b['. $i."] $b[$i]" . "&nbsp;&nbsp;&nbsp;&nbsp;";
        
        echo 'c['. $i."] $c[$i]" . "<br>";
    }
?>