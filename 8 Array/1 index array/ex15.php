<?php
    $len = 10;
    for($i = 0;$i < $len;$i++){
        $a[$i] = rand(0,10);
    }
    for($j=0;$j<count($a);$j++){
        echo  $a[$j] . "&nbsp;&nbsp;&nbsp;&nbsp;";
    }
    echo "<br>";

    for($i = 0;$i < sizeof($a); $i++){
        $c[$a[$i]]=0;
        $f[$a[$i]]=0;
        
        for($j = 0;$j < sizeof($a); $j++){
            if($a[$i] == $a[$j]){
                $c[$a[$i]]++;
                $f[$a[$i]]=1;
            }
        }
//        echo $a[$i] . "=" . $c[$a[$i]] . "<br>";
    }


    echo "Find repetitive element of an array : <br>";
    for($j = 0;$j < sizeof($a);$j++){
        if($f[$a[$j]] != 0){
            echo "<strong>" . $a[$j] . "</strong> is repeating <strong>" . $c[$a[$j]] . "</strong>   times<br>";
            $f[$a[$j]] = 0;
        }
    }

?>