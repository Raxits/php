<?php

        echo "MD"
    for($j = 97,$i = 0,$k = 0; $j < 123; $j++){
        echo chr($j) . "&nbsp;&nbsp;&nbsp;&nbsp;";
        $l = chr($j);
        if($l == 'a' || $l == 'e' || $l == 'i' || $l == 'o' || $l == 'u')
        {
            $v[$i++] = chr($j);
            
        }
        else{
            $c[$k++] = chr($j);
        }
    }
    echo "<br><br>Consonants Alphabet are : ";
    for($j=0;$j<count($c);$j++){
        echo $c[$j] . "&nbsp;&nbsp;&nbsp;&nbsp;";
    }
    echo "<br><br>Vowels Alphabet are : ";
    for($j=0;$j<count($v);$j++){
        echo $v[$j] . "&nbsp;&nbsp;&nbsp;&nbsp;";
    }

?>
