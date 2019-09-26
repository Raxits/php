<?php
    $newitem = 4;
    $pos = 5; 
    $a = array(2,4,5,6,7,8,9,11,0,1);
    $flag = 0;
    echo "Insert 4 at position 5 in an array";
    echo "array", count($a) ,"<br>";
    for($j=0;$j<count($a);$j++)
        echo  $a[$j] . "&nbsp;&nbsp;&nbsp;&nbsp;";
    echo "<br>";
    $l=sizeof($a);
    if($pos == $l){
        $a[$pos]=$newitem;
    }
    else{
        for($i=0;$i<$l;$i++){
            if($i==$pos-1||$flag==1){
                
                $a[$l]=$a[$i];
                $a[$i]=$newitem;

                $newitem=$a[$l];

                $flag = 1;
                
            }
            else
                $flag = 0;
        }
        
    }
    for($j=0;$j<count($a);$j++){
        echo  $a[$j] . "&nbsp;&nbsp;&nbsp;&nbsp;";
    }
?>