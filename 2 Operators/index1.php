
<?php
    $a=4;
    $b=5.2;
    $c=$a+$b;
    $d=$a-$b;
    $e=$a*$b;
    $f=$a/$b;
    $g=$a%$b;
    
    $h="of $a and $b is";
    echo "a = " . $a;
    echo "<br>b = " . $b;
    echo "<br>Addition $h <b>$c </b>";

    echo "<br>Datatype of <b> '$c' </b> is &nbsp;<b>" . gettype($c) . "</b>";
    echo "<br>Subtraction $h <b> $d </b>";
    echo "<br>Datatype of <b>'$d'</b> is &nbsp;<b>" . gettype($d) . "</b>";
    echo "<br>Multiplication $h <b>$e </b>";
    echo "<br>Datatype of <b>'$e' </b>is &nbsp;<b>" . gettype($e) . "</b>";

    echo "<br>Division $h <b>$f </b>";
    echo "<br>Datatype of <b>'$f' </b>is &nbsp;<b>" . gettype($f) . "</b>";
    echo "<br>Modulo $h <b>$g </b>";
    echo "<br>Datatype of <b>'$g' </b>is &nbsp; <b>" . gettype($g) . "</b>";

    echo "<br>Datatype of <b>'$h'</b> is &nbsp; <b>" . gettype($h) . "</b>";

?>
