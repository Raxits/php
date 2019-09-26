<?php
    $a= array(3,4,5,6,7);
    $k= 5;
    $l=0;
    
    for($i=0;$i<$k;$i++){
        $l=$l+1;
        echo 'a['. $i."] $a[$i]" . "<br>";
    }
    echo "Length of a Array is $l";
?>