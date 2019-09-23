<?php
    for($i=1;$i<=5;$i++){
        for($j=5;$j>$i;$j--){
            echo "&nbsp;&nbsp;";
        }
        for($k=1;$k<=$i;$k++){
            echo $i;
        }
        echo "<br>";
    }
?>