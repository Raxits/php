<?php    
    //write a program to find length of an array elements
    
    $r=3;
    $c=3;
    
    for($i=0;$i<$r;$i++){
        for($j=0;$j<$c;$j++)
            $a[$i][$j] = rand(1,10);
    }

    echo "<b>2d matrix is :</b> <br>";
    for($i=0;$i<$r;$i++){
        for($j=0;$j<$c;$j++)
            echo $a[$i][$j] . " ";
        echo "<br>";
    }


    $l=0;
    for($i=0;$i<$r;$i++){
        for($j=0;$j<$c;$j++)
            $l++;
    }
    echo "Length of an array element is : " . $l . "<br>";
?>
