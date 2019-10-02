<?php
/*write a php script which will display the colors in the following way
whit,green,red,
green
red
white
*/
    $color = array('white','green','red');
    foreach($color as $key){
        echo "$key, ";
    }
    echo "<ul>";
    foreach($color as $key){
        echo "<li>" . $key . "</li>";
    }
    echo "</ul>";
?>