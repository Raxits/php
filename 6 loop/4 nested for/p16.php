<?php
    for($i=5;$i>=1;$i--){
        for($j=5;$j>6-$i;$j--){
            echo "&nbsp;&nbsp;";
        }
        for($k=$i;$k<=5;$k++){
            echo "+";
        }
        echo "<br>";
    }
?>