<?php include ('header.php');?>

<?php
  @$un = $_REQUEST['un'];
  @$pd = $_REQUEST['pd'];
  @$em = $_REQUEST['em'];
  @$con = $_REQUEST['con'];
  @$gender = $_REQUEST['gender'];
  @$kl1 = implode(", ",$_REQUEST['kl']);
  @$pi = $_FILES['pimg']['name'];

  @$pilocation = $_FILES['pimg']['tmp_name'];



  //@$pflocation = __dir__.'/pic/'.$_FILES['pimg']['name'];
  //@$msg=$_REQUEST['msg'];
  @$pflocation = "pic/" . pathinfo($_FILES['pimg']['name'],PATHINFO_FILENAME);
  @$pflocation = $pflocation . uniqid() . "." . pathinfo($_FILES['pimg']['name'],PATHINFO_EXTENSION);

  if(isset($_REQUEST['submit']))
  {
    if (!(empty($un)||empty($pd)||empty($em)||empty($con)||empty($gender)||empty($kl1)||empty($pi)))
    {
      $sql = "insert into admin(name,pwd,email,country,gender,knownlang,profileimg) values  ('$un','$pd','$em','$con','$gender','$kl1','$pflocation')";
      
      if(move_uploaded_file(@$pilocation,@$pflocation))
      {
        if($conn->query($sql)){
          $msg = "<div class='alert alert-success' role='alert'>Success fully inserted</div>";
          /*header("location:add_admin.php?msg=$msg");
          exit;*/

          $un = "";
          $pd = "";
          $em = "";
          $con = "";
          $gender = "";
          $pi = "";
          $kl1="";
        }
        else
          $msg = "<div class='alert alert-danger' role='alert'>Failed to insert</div>";

      }
      else{
        $msg = "<div class='alert alert-danger' role='alert'>Failed to upload image</div>";
      }
    }
    else{
      $msg = "<div class='alert alert-danger' role='alert'>Enter All Field</div>";

    }
  }

  @$kl2 = explode(', ',@$kl1);
  for($i=0;$i<3;$i++){

    if(@$kl2[$i] == "Chinese")
      @$kl3[0] = "Checked";

    if(@$kl2[$i] == "English")
      @$kl3[1] = "Checked";
    
    if(@$kl2[$i] == "Greek")
      @$kl3[2] = "Checked";

  }
?>




<!--close-left-menu-stats-sidebar-->

<div id="content">
<div id="content-header">
  <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="tip-bottom">Admin</a> <a href="#" class="current">Add Admin</a> </div>
  <h1>Add Admin</h1>
</div>
<div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span6">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Admin</h5>
        </div>
        <?php echo @$msg; ?>
        <div class="widget-content nopadding">
          <form action="#" method="post" class="form-horizontal"enctype="multipart/form-data" >
            <div class="control-group">
              <label class="control-label">Full Name :</label>
              <div class="controls">
                <input type="text" class="span11"  placeholder="Full name" name = "un" value = "<?php echo @$un; ?>"/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Password :</label>
              <div class="controls">
                <input type="password"  class="span11"  placeholder="Enter Password" name = "pd" value = "<?php echo @$pd; ?>"/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Email :</label>
              <div class="controls">
          
                <input type="email" class="span11"  placeholder="example@xyz.com" name = "em" value = "<?php echo @$em ;?>"/>
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Country</label>
              <div class="controls">
                <select name = "con">
                  <option selected disabled>---SELECT---</option>
                  <option <?php if(@$con == "USA") echo "selected"; ?> >USA</option>
                  <option <?php if(@$con == "BRAZIL") echo "selected"; ?> >BRAZIL</option>
                  <option <?php if(@$con == "ENGLAND") echo "selected"; ?> >ENGLAND</option>
                  <option <?php if(@$con == "INDONESIA") echo "selected"; ?> >INDONESIA</option>
                  <option <?php if(@$con == "CHINA") echo "selected"; ?> >CHINA</option>
                  <option <?php if(@$con == "SRILANKA") echo "selected"; ?> >SRILANKA</option>
                  <option <?php if(@$con == "INDIA") echo "selected"; ?> >INDIA</option>
                  <option <?php if(@$con == "GREECE") echo "selected"; ?> >GREECE</option>
                </select>
              </div>
            </div>
           
            <div class="control-group">
              <label class="control-label">Gender</label>
              <div class="controls">
                <label><input type="radio" name="gender" value="Male"<?php if(@$gender == "Male")echo "checked";?>/> Male</label>
                <label><input type="radio" name="gender" value="Female"<?php if(@$gender == "Female") echo"checked"; ?>/> Female</label>
              </div>
            </div>
             
            <div class="control-group">
              <label class="control-label">Known Languages</label>
              <div class="controls">
                <label>
                  <input type="checkbox" name="kl[]" value = "Chinese" <?php echo @$kl3[0]; ?>/>
                  Chinese</label>
                <label>
                  <input type="checkbox" name="kl[]" value = "English" <?php echo @$kl3[1];   ?>/> 
                  English</label>
                <label>
                  <input type="checkbox" name="kl[]" value ="Greek" <?php echo @$kl3[2]; ?> />
                  Greek</label>
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Profile Image</label>
              <div class="controls">
                <input type="file" name="pimg" accept="image/jpeg"/>
              </div>
            </div>

            <div class="form-actions">
              <button type="submit" class="btn btn-success" name="submit">Add Admin</button>
            </div>
          </form>
        </div>
      </div>

      
    </div>
  </div>
  
</div></div>
<!--Footer-part-->
<?php
   include('footer.php');
?>