<?php
    
    $ex = '&id=' . $_REQUEST['id']  . "&submit" . "=yes"; 
    $ex1 = '&id=' . $_REQUEST['id']  . "&submit" . "=no"; 

    echo "<a href='index.php'><b>Back</b></a><br>";
    echo "<table border = 1 cellspacing = 0 cellpadding = 10 style = 'margin : auto;'>";
    echo "<tr> <th> ID </th>";
    echo "<th> DATE </th>";
    echo "<th> USERNAME </th>";
    echo "<th> PASSWORD </th>";
    echo "<th> GENDER </th>";
    echo "<th> HOBBY </th>";
    echo "<th> COUNTRY </th>";
    echo "<th> FILE </th>";

    echo "</tr>";
    echo "<tr>";
    echo "<td>" . $_REQUEST['id'] . "</td>";
    echo "<td>" . $_REQUEST['date1'] . "</td>";
    echo "<td>" . $_REQUEST['uname'] . "</td>";
    echo "<td>" . $_REQUEST['pwd'] . "</td>";
    echo "<td>" . $_REQUEST['gender'] ."</td>";
    echo "<td>" . $_REQUEST['hobby'] . "</td>";
    echo "<td>" . $_REQUEST['country'] . "</td>";
    echo "<td>" . $_REQUEST['file'] . "</td>";
    
?>
 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Delete</title>
</head>
<body>
<h4>Are you Sure Do you Want to delete?</h4>
    <a href="view_update.php?op=xyz<?php echo $ex; ?>">Yes</a>
    <a href="index.php?<?php echo $ex1; ?>">No</a>
    
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