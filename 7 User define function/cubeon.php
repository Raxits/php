<?php
    function cube ($a){
        return $a * $a * $a;
    }
    for($i=0;$i<=10;$i++){
        echo "$i ^ 3 =" . cube($i) . "<br>";
    }

?>