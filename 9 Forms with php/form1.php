<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form with PHP</title>
</head>
<body>
    <br>
    <br>
    <form method="post">
        
        Username : <input type="text" name="uname" id="">
        <br><br>
        Password : <input type="password" name="pwd" id="">
        <br><br>
        Gender   : <input type="radio" name="gender" id="" value="male"> Male
        <input type="radio" name="gender" id="" value="female"> Female
        <br><br>
        Country  :
        <select name="country" id="">
            <option value="USA">USA</option>
            <option value="BRAZIL">BRAZIL</option>
            <option value="INDIA">INDIA</option>
            <option value="PAKISTAN">PAKISTAN</option>
            <option value="CHINA">CHINA</option>
            <option value="RUSSIA">RUSSIA</option>
        </select>
        <br><br>
        Hobbies  :
        <input type="checkbox" name="hobbies[]" id=""value="Reading">Reading
        <input type="checkbox" name="hobbies[]" id=""value="Playing">Playing
        <input type="checkbox" name="hobbies[]" id=""value="Riding">Riding
        <br><br>
        File    :
        <input type="file" name="upload" id="" value="upload">
        <br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>

<?php
    @$uname=$_REQUEST['uname'];
    @$pwd=$_REQUEST['pwd'];
    @$gender=$_REQUEST['gender'];
    @$country=$_REQUEST['country'];
    @$hobbies=$_REQUEST['hobbies'];
    @$upfile=$_REQUEST['upload'];
    $i=1;
    if(isset($_REQUEST['submit'])){
        echo "<br><br><hr><pre style='font-size:18pt;'>Username : " .$uname;
        echo "<br>Password : " .$pwd;
        echo "<br>Gender   : " .$gender;
        echo "<br>Country  : " .$country;
        echo "<br>Hobbies  : ";
        foreach($hobbies as $k => $v1){
                echo $i . ")&nbsp;" . $v1 . "&nbsp;&nbsp;&nbsp;&nbsp; ";
                $i++;
        }
        echo "<br>File     : " .$upfile;
        echo "</pre><hr>";
        
    }


?>
