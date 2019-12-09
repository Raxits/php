<?php
ob_start();

include('header.php');
include('../db.php');
?>
<?php



  @$un = $_REQUEST['un'];
  @$pd = $_REQUEST['pd'];
  @$em = $_REQUEST['em'];
  @$con2 = $_REQUEST['con'];
  @$gender = $_REQUEST['gender'];
  @$kl1 = implode(", ",$_REQUEST['kl']);
  @$pi = $_FILES['pimg']['name'];
  @$id = $_REQUEST['id'];
  @$pilocation = $_FILES['pimg']['tmp_name'];

  if(isset($_REQUEST['id'])&&isset($_REQUEST['id1'])){
    $q = "select * from admin where id=$id";
    if($res=$con->query($q)){
      $r1=$res->fetch_assoc();
      $un1=$r1['name'];
      $pd1  = $r1['pwd'];
      $em1 = $r1['email'];
      $con1 = $r1['country'];
      $gender1 = $r1['gender'];
      $kl11 = $r1['knownlang'];
      $pl1 = $r1['profileimg'];

    }  
  }


  //@$pflocation = __dir__.'/pic/'.$_FILES['pimg']['name'];
  //@$msg=$_REQUEST['msg'];
  @$pflocation = "pic/" . pathinfo($_FILES['pimg']['name'],PATHINFO_FILENAME);
  @$pflocation = $pflocation . uniqid() . "." . pathinfo($_FILES['pimg']['name'],PATHINFO_EXTENSION);

  if(isset($_REQUEST['submit']))
  {
    if (!(empty($un)||empty($pd)||empty($em)||empty($con2)||empty($gender)||empty($kl1)||empty($pi)))
    {
      if(!(isset($_REQUEST['id']))){
      $sql = "insert into admin(name,pwd,email,country,gender,knownlang,profileimg) values  ('$un','$pd','$em','$con2','$gender','$kl1','$pflocation')";
      
        if(move_uploaded_file(@$pilocation,@$pflocation)){
          if($con->query($sql)){
            $msg = "<div class='alert alert-success' role='alert'>Success fully inserted</  div>";
            /*header("location:add_admin.php?msg=$msg");
            exit;*/
          
            $un = "";
            $pd = "";
            $em = "";
            $con2 = "";
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
        if(isset($_REQUEST['id'])){
          $sql = "update admin set name='$un',pwd='$pd',email='$em',country='$con', gender='$gender',knownlang='$kl1',profileimg='$pflocation' where id= $id";
          if(move_uploaded_file(@$pilocation,@$pflocation))
          {
            if($con->query($sql)){
              $msg = "<div class='alert alert-success' role='alert'>Success fully Updated</  div>";
              $un = "";
              $pd = "";
              $em = "";
              $con2 = "";
              $gender = "";
              $pi = "";
              $kl1="";
            
              header('location:view_admin.php');
              exit;
            
            }
            else
              $msg = "<div class='alert alert-danger' role='alert'>Failed to update</div>";
          
          }
          else{
            $msg = "<div class='alert alert-danger' role='alert'>Failed to upload image</ div>";
          }
          
        }
      }
    } 
    else{
      $msg = "<div class='alert alert-danger' role='alert'>Enter All Field</div>";

    }
  }

  @$kl2 = explode(', ',@$kl1);//in_array(subsetword,string)
  @$kl4 = explode(', ',$kl11);
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
  <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="tip-bottom">Admin</a> <a href="#" class="current"><?php if(isset($_REQUEST['id'])){echo "Update Admin";}else{echo "Add Admin";}?></a> </div>
  <h1><?php if(isset($_REQUEST['id'])){echo "Update Admin";}else{echo "Add Admin";}?></h1>
</div>
<div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span6">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5><?php if(isset($_REQUEST['id'])){echo "Update Admin";}else{echo "Add Admin";}?></h5>
        </div>
        <div class="control-group">

          <?php echo @$msg; ?>
        </div>
        <div class="widget-content nopadding">
          <form action="#" method="post" class="form-horizontal"enctype="multipart/form-data" >
          
            <div class="control-group">
              <label class="control-label">Full Name :</label>
              <div class="controls">
                <input type="text" class="span11"  placeholder="Full name" name = "un" value = "<?php echo @$un1; ?>"/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Password :</label>
              <div class="controls">
                <input type="password"  class="span11"  placeholder="Enter Password" name = "pd" value = "<?php echo @$pd1; ?>"/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Email :</label>
              <div class="controls">
          
                <input type="email" class="span11"  placeholder="example@xyz.com" name = "em" value = "<?php echo @$em1 ;?>"/>
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Country</label>
              <div class="controls">
                <select name = "con">
                  <option selected disabled>---SELECT---</option>
                  <option <?php if(@$con1 == "USA") echo "selected"; ?> >USA</option>
                  <option <?php if(@$con1 == "BRAZIL") echo "selected"; ?> >BRAZIL</option>
                  <option <?php if(@$con1 == "ENGLAND") echo "selected"; ?> >ENGLAND</option>
                  <option <?php if(@$con1 == "INDONESIA") echo "selected"; ?> >INDONESIA</option>
                  <option <?php if(@$con1 == "CHINA") echo "selected"; ?> >CHINA</option>
                  <option <?php if(@$con1 == "SRILANKA") echo "selected"; ?> >SRILANKA</option>
                  <option <?php if(@$con1 == "INDIA") echo "selected"; ?> >INDIA</option>
                  <option <?php if(@$con1 == "GREECE") echo "selected"; ?> >GREECE</option>
                </select>
              </div>
            </div>
           
            <div class="control-group">
              <label class="control-label">Gender</label>
              <div class="controls">
                <label><input type="radio" name="gender" value="Male"<?php if(@$gender1 == "Male")echo "checked";?>/> Male</label>
                <label><input type="radio" name="gender" value="Female"<?php if(@$gender1 == "Female") echo"checked"; ?>/> Female</label>
              </div>
            </div>
             
            <div class="control-group">
              <label class="control-label">Known Languages</label>
              <div class="controls">
                <label>
                  <input type="checkbox" name="kl[]" value = "Chinese" <?php if(in_array("Chinese",$kl4)){echo "checked";}else echo @$kl3[0];?>/>
                  Chinese</label>
                <label>
                  <input type="checkbox" name="kl[]" value = "English" <?php  if(in_array("English",$kl4)){echo "checked";}else echo @$kl3[1];   ?>/> 
                  English</label>
                <label>
                  <input type="checkbox" name="kl[]" value ="Greek" <?php  if(in_array("Greek",$kl4)){echo "checked";}else echo @$kl3[2]; ?> />
                  Greek</label>
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Profile Image</label>
              <div class="controls">
                <input type="file" name="pimg" accept="image/jpeg" style = "width:200px;"/>
                <?php if(isset($_REQUEST['id'])){ echo "<img src='".@$pl1."' width = '120px' height = '120px' alt='pimg.jpeg'>"; }
                ?>
              </div>
              
            </div>

            <div class="form-actions">
              <button type="submit" class="btn btn-success" name="submit" value="<?php echo $id;?> "><?php if(isset($_REQUEST['id'])){echo "Update";}else{echo "Add Admin";}?></button>
            </div>
          </form>
        </div>
      </div>

      
    </div>
  </div>
  
</div>
</div>
<!--Footer-part-->
<?php
   include('footer.php');
?>