<?php

$sname = "localhost";
$uname = "root";
$pass = "";

$con = new mysqli($sname,$uname,$pass);

if($con->connect_error){
    echo "Connection Fail<br>";
}
else{
    $sql = "CREATE DATABASE if not exists stack1";

    if(!$con->query($sql) == TRUE){
       echo "Database Created unSuccessfull<br>";
    }
    $con->close();

    $db = "stack1";
    $con = new mysqli($sname, $uname, $pass, $db);

    if($con->connect_error){
        echo "Database Connection Fail<br>";
    }
    $s = "DESCRIBE admin";
    if(!$con->query($s)){
      $sql = "CREATE TABLE admin (id INT AUTO_INCREMENT, name VARCHAR(30), pwd VARCHAR(30), email VARCHAR(30), country VARCHAR(20), gender VARCHAR(10), knownlang TEXT, profileimg TEXT, PRIMARY KEY(id))";
      if(!$con->query($sql)){
        echo "<p style='background-color:white;'>error creating table admin and feature</p>";

    }

    $con->close();  

    $db = "stack1";
    $con = new mysqli($sname, $uname, $pass, $db);

    if($con->connect_error){
        echo "Database Connection Fail<br>";
    }


    $s = "DESCRIBE feature";
      if(!$con->query($s)){
        $sql = "CREATE TABLE feature (id INT AUTO_INCREMENT, title varchar(30), description TEXT, icon VARCHAR(20), PRIMARY KEY(id))";

        if(!$con->query($sql)){
          echo "<p style='background-color:white;'>error creating table feature</p>";
        }
      }

    }
    
}


?>