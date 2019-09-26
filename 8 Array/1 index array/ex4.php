<?php
    $l=1;
    echo "leap Year between 2000 to 2030 <br>";
    for($i=2000;$i<=2030;$i++){
        if($i%4==0){
            $a[$l-1]=$i;
            $l++;
        }
    }
    for($i=0;$i<$l-1;$i++){
        echo $a[$i],"<br>";
    }
    
?>