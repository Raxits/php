<?php
    $len = 10;
    for($i=0;$i<$len;$i++)
        $a[$i] = rand(0,10);

    for($j=0;$j<count($a);$j++){
        echo  $a[$j] . "&nbsp;&nbsp;&nbsp;&nbsp;";
    }
    
    for($i = 0;$i < count($a)-1; $i++){
        for($j = $i+1;$j < count($a); $j++){
            if($a[$j] < $a[$i]){
                $c = $a[$j];
                $a[$j]=$a[$i];
                $a[$i]=$c;
                
            }

        }
    }
    echo "<br><br><h4 style='margin:0px;padding:0px;'>Ascending Order of an array is : <br> ";
    for($j=0;$j<count($a);$j++){
        echo $a[$j] . "&nbsp;&nbsp;&nbsp;&nbsp;";
    }
    echo "</h4>";

?>