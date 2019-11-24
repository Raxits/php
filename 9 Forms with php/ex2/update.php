<?php
@$g[1] = $_REQUEST['date1'];
@$g[2] = $_REQUEST['id'];
@$g[3] = $_REQUEST['uname'];
@$g[4] = $_REQUEST['pwd'];
@$g[5] = $_REQUEST['gender'];
@$g[6] = $_REQUEST['hobby'];
@$g[7] = $_REQUEST['country'];
@$g[8] = $_REQUEST['file'];


for($i=0;$i<3;$i++){
    $g1[$i] = "sd";
}

if(substr_count($g[6],"Reading")>0)
    $g1[0] = "Reading";
if(substr_count($g[6],"Playing")>0)
    $g1[1] = "Playing";
if(substr_count($g[6],"Riding")>0)
    $g1[2] = "Riding";
?>

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
    <form method="post" action="view_update.php?op=update" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $g[2]; ?>">
        Date : <input type = "date" name="dat" id="" value="<?php echo $g[1]; ?>">
        <br><br>
        Username : <input type="text" name="uname" id="" value="<?php echo $g[3]; ?>">
        <br><br>
        Password : <input type="password" name="pwd" id="" value="<?php echo $g[4]; ?>">
        <br><br>
        Gender   : <input type="radio" name="gender" id="" value="male" <?php if($g[5] == "male") echo "checked";?> > Male
        <input type="radio" name="gender" id="" value="female"<?php if($g[5]=="female") echo "checked";?>> Female
        <br><br>
        Country  :
        
        <select name="country" id="">
            <option value="USA"<?php if($g[7]=='USA')echo "selected";?>>USA</option>
            <option value="BRAZIL"<?php if($g[7]=='BRAZIL')echo "selected";?>>BRAZIL</option>
            <option value="INDIA"<?php if($g[7]=='INDIA')echo "selected";?>>INDIA</option>
            <option value="ENGLAND"<?php if($g[7]=='ENGLAND')echo "selected";?>>ENGLAND</option>
            <option value="CHINA"<?php if($g[7]=='CHINA')echo "selected";?>>CHINA</option>
            <option value="RUSSIA"<?php if($g[7]=='RUSSIA')echo "selected";?>>RUSSIA</option>
        </select>
        
        <br><br>
        Hobbies  :
        <input type="checkbox" name="hobbies[]" id=""value="Reading" <?php if($g1[0]=="Reading"){ echo"checked";}?>>Reading
        <input type="checkbox" name="hobbies[]" id=""value="Playing"<?php if($g1[1]=="Playing") {echo"checked";}?>>Playing
        <input type="checkbox" name="hobbies[]" id=""value="Riding"<?php if($g1[2]=="Riding") {echo"checked";}?>>Riding
        <br><br>
        File    :
        <input type="file" name="upload" id="" value="<?php echo $g[8];?>">
        <br><br>
        <button type="submit" name="submit" value="update">Update</button>
    </form>
</body>
</html>
