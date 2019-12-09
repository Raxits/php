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
    }

    $s = "DESCRIBE feature";
      if(!$con->query($s)){
        $sql = "CREATE TABLE feature (id INT AUTO_INCREMENT, title varchar(30), description TEXT, icon VARCHAR(20), PRIMARY KEY(id))";

        if(!$con->query($sql)){
          echo "<p style='background-color:white;'>error creating table feature</p>";
        }
      }

    
    

    $s = "DESCRIBE service";
    if(!$con->query($s)){
        $sql = "CREATE TABLE service (id INT AUTO_INCREMENT, title varchar(30), description TEXT, icon VARCHAR(20), PRIMARY KEY(id))";

        if(!$con->query($sql)){
          echo "<p style='background-color:white;'>error creating table feature</p>";
        }
    }

    $s = "DESCRIBE team";
      if(!$con->query($s)){
        $sql = "CREATE TABLE team (id INT AUTO_INCREMENT, name varchar(30), role TEXT, efile text, PRIMARY KEY(id))";

        if(!$con->query($sql)){
          echo "<p style='background-color:white;'>error creating table team</p>";
        }
      }

      $s = "DESCRIBE plan";
      if(!$con->query($s)){
        $sql = "CREATE TABLE plan (id INT AUTO_INCREMENT, title varchar(30), description TEXT, price text, PRIMARY KEY(id))";

        if(!$con->query($sql)){
          echo "<p style='background-color:white;'>error creating table plan</p>";
        }
      }

      $s = "DESCRIBE category";
      if(!$con->query($s)){
        $sql = "CREATE TABLE category (id INT AUTO_INCREMENT, category varchar(30), PRIMARY KEY(id))";

        if(!$con->query($sql)){
          echo "<p style='background-color:white;'>error creating table category</p>";
        }
      }


      $s = "DESCRIBE subcategory";
      if(!$con->query($s)){
        $sql = "CREATE TABLE subcategory (id INT AUTO_INCREMENT, subcategory_name varchar(30), scimg text, categoryid INT, PRIMARY KEY(id))";
        if(!$con->query($sql)){
          echo "<p style='background-color:white;'>error creating table subcategory</p>";
          
        }
      }
      
      $s = "DESCRIBE testimonial";
      if(!$con->query($s)){
        $sql = "CREATE TABLE testimonial (id INT AUTO_INCREMENT, name varchar(30), company_name varchar(30),description TEXT, t_image text, PRIMARY KEY(id))";

        if(!$con->query($sql)){
          echo "<p style='background-color:white;'>error creating table testimonial</p>";
        }
      }

      
      $s = "DESCRIBE blog";
      if(!$con->query($s)){
        $sql = "CREATE TABLE blog (id INT AUTO_INCREMENT, title varchar(30), description varchar(30), b_image text, PRIMARY KEY(id))";

        if(!$con->query($sql)){
          echo "<p style='background-color:white;'>error creating table blog</p>";
        }
      }

      $s = "DESCRIBE contact";
      if(!$con->query($s)){
        $sql = "CREATE TABLE contact (id INT AUTO_INCREMENT, name VARCHAR(30), email VARCHAR(30), subject VARCHAR(30), message TEXT, PRIMARY KEY(id))";
        if(!$con->query($sql)){
          echo "<p style='background-color:white;'>error creating table admin and feature</p>";
  
        }
      }
  
  }

$dir = "pic";
if(!file_exists($dir) && !is_dir($dir)){
  mkdir($dir);
}
$dir = "timage";
if(!file_exists($dir) && !is_dir($dir)){
  mkdir($dir);
}

$dir = "scimage";
if(!file_exists($dir) && !is_dir($dir)){
  mkdir($dir);
}



$dir = "testimg";
if(!file_exists($dir) && !is_dir($dir)){
  mkdir($dir);
}

$dir = "blgimg";
if(!file_exists($dir) && !is_dir($dir)){
  mkdir($dir);
}

?>