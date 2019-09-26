<?php
    $sum=0;
    $l=5;
    $a = array(2,3,4,5,6);
    for($i=0;$i<$l;$i++){
        echo 'a['. $i."] $a[$i]" . "<br>";
        
        $sum = $sum+ $a[$i];
    }
    echo "Sum of an array $sum";
?>