<?php
    for($i=1;$i<=5;$i++){
        for($j=1;$j<$i;$j++){
            echo "&nbsp;&nbsp;";
        }
        for($k=1;$k<=6-$i;$k++){
            echo $k;
        }
        echo "<br>";
    }
?>