<?php
    for($i=5;$i>=1;$i--){
        for($j=5;$j>$i;$j--){
            echo "&nbsp;&nbsp;";
        }
        for($k=5;$k>=6-$i;$k--){
            echo $k;
        }
        echo "<br>";
    }
?>