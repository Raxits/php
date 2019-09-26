<?php
    for($i=200,$j=0;$i<=300;$i++){
        if($i%4 == 0){
            $a[$j] = $i;
            $j++;
        }
    }
    echo "between 200 to 300 that are divisible by 4 <br>";
    for($j=0;$j<sizeof($a);$j++){
        echo $a[$j] . "&nbsp;&nbsp;&nbsp;&nbsp;";
    }

?>