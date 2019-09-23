<?php
    for($l=5;$l>=1;$l--){
        for($m=1;$m<=$l;$m++){
            echo $m;
        }
        for($n=$m;$n<5;$n++){
            echo "&nbsp;&nbsp;";
        }
        
        for($p=$n;$p<=10-$l;$p++){
            echo "&nbsp;&nbsp;";            
            
        }
        for($o=$l;$o>=1;$o--){
            echo $o;
        }

        echo "<br>";
    }
    for($l=2;$l<=5;$l++){
        for($m=1;$m<=$l;$m++){
            echo $m;
        }
        for($n=$m;$n<=5;$n++){
            echo "&nbsp;&nbsp;";            
        }
        for($o=$n;$o<=10-$l;$o++){
            echo "&nbsp;&nbsp;";            
            
        }
        for($p=$l;$p>=1;$p--){
            echo $p;
        }
        
        echo "<br>";
    }

?>