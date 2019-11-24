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
    <form method="post" action="view_update.php" enctype="multipart/form-data">
        Date : <input type = "date" name="dat" id="" value="">
        <br><br>
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
            <option value="ENGLAND">ENGLAND</option>
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
        <input type="submit" name="submit" value="insert">
    </form>
</body>
</html>
