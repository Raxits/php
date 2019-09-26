<?php
    $atemp = 0;
    $ltemp = 9999;
    $htemp = 0;
    $temp = array(78,60,62,68,93,85,76,59,74,58);

    for($i=0;$i<sizeof($temp);$i++){
        if($ltemp>=$temp[$i]){
            $ltemp = $temp[$i];
        }
        if($htemp<=$temp[$i]){
            $htemp = $temp[$i];
        }
        $atemp += $temp[$i]; 
    }
    echo "Temperature range <br>";
    for($j=0;$j<sizeof($temp);$j++){
        echo $temp[$j] . "&nbsp;&nbsp;&nbsp;&nbsp;";
    }

    echo "<br>Lowest temperature : " . $ltemp ;
    echo "<br>Highest temperature : " . $htemp ;
    echo "<br>Average temperature : " . $atemp/sizeof($temp) ;

?>