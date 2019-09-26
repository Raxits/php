<?php
    $len = 10;
    for($i=0;$i<$len;$i++)
        $a[$i] = rand(0,10);
    $count = 0;
    for($i=0;$i<sizeof($a);$i++){
        if($a[$i] != 0){
            $count++;
        }
    }
    for($j=0;$j<count($a);$j++){
        echo 'a['. $j."] = $a[$j]" . "<br>";
    }

    echo "<br><br><br>Length of non-zero element is : " . $count;
?>