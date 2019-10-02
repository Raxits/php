<?php
//create a php script which displays the capital and country name from the above array 
//sort the list by the capital of the country

    $ceu = array( "Italy" => "Rome", "Luxembourg" => "Luxrmboug",
                  "Belgium" => "Brussels", "Denmark" => "Copenhagen",
                  "Finland" => "Helsinki", "France" => "Paris",
                  "Slovakia" => "Ljubljana", "Germany" => "Berlin",
                  "Greece" => "Athens", "Ireland" => "Dublin",
                  "Netherlands" => "Amsterdam", "Portugal" => "London",
                  "Cyprus" => "Nicosia", "Lithuania" => "Vilnius",
                  "Czech Republic" => "Prague", "Estonia" => "Tallin",
                  "Hungary" => "Budapest", "Latvia" => "Riga", 
                  "Malta" => "Valetta", "Austria" => "Vienna",
                  "Poland" => "Warsaw"
);

asort($ceu);
foreach($ceu as $key => $value){
    echo "The Capital of " , $key , " is ", $value , "<br>";
}

?>