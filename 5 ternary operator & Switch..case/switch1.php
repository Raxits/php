<?php
  $a = 4;
  $b = 8;
  $ch = 3;
  
  echo "a = $a <br> b= $b <br>";
  echo "1. Addition <br>2. Subtraction <br>3. Multiplication <br>4. Division <br>5. Modulo";
  echo "<br>Choice is $ch<br>";
  switch ($ch){
        case 1 : 
            echo "Addition is" , $a + $b;
            break;
        case 2 :
            echo "Subtraction is" , $a - $b;
            break;
        case 3: 
            echo "Multiplication is" , $a * $b;
            break;
        case 4:
            echo "Division is", $a/$b;
            break;
        case 5:
            echo "Modulo is", $a%$b;
            break;
        default:
            echo "Invalid choice";
            break;
  }
?>