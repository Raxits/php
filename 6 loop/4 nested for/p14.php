<?php
    for($i=1;$i<=5;$i++){
        for($j=5;$j>$i;$j--){
            echo "&nbsp;&nbsp;";
        }
        for($k=$i;$k>0;$k--){
            echo $k;
        }
        echo "<br>";
    }
?>