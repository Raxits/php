<?php
    $sname = "localhost";
    $uname = "root";
    $pass = "";
    
    $con = new mysqli($sname,$uname,$pass);

    if($con->connect_error){
        echo "Connection Fail<br>";
    }
    else{
        $sql = "CREATE DATABASE form3";

        if($con->query($sql) == TRUE){
            echo "Database Created Successfull<br>";
        }
        $con->close();

        $db = "form3";
        $con = new mysqli($sname, $uname, $pass, $db);

        if($con->connect_error){
            echo "Database Connection Fail<br>";
        }
        $sql = "CREATE TABLE f1 (id INT AUTO_INCREMENT, date1 DATE, uname VARCHAR(20), pwd VARCHAR(20), gender VARCHAR(6),hobby VARCHAR(40), country VARCHAR(10), file TEXT, PRIMARY KEY(id))";

        if($con->query($sql) == True){
            echo "Table Created Successfull<br>";
        }
        $con->close();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Operation</title>
</head>
<body>
    <h4>Which operation do you want to do in database?</h4>
    <a href="insert.php">Insert</a>
    <a href="view_update.php?op=xyz">View All</a>
    <a href="view_update.php?op=update">Update</a>
    <a href="view_update.php?op=del">Delete</a>
    
    <style>
        a{
            text-decoration : none;
            padding : 10px;
            margin : 20px;
            color : Black;
            font-weight : 800;
            border : 1px solid black;
            border-radius :10px;
            background-color : lightGrey;
        }
        a:hover{
            background-color : white;
            border : 1px solid red;
        }
    </style>
</body>
</html>