<?php
    for($i=1;$i<=5;$i++){
        for($j=1;$j<$i;$j++){
            echo "&nbsp;&nbsp;";
        }
        for($k=$i;$k<=5;$k++){
            echo $k;
        }
        echo "<br>";
    }
?>