<?php
ob_start();

include('header.php');
include('../db.php');
?>
<?php

if(isset($_REQUEST['id']) && $_REQUEST['submit'] != "update"){
  $sql = "select * from testimonial where id = ".$_REQUEST['id'];
  $res = $con->query($sql);
  $r = $res->fetch_assoc();
  $nm = $r['name'];
  $cn = $r['company_name'];
  $des = $r['description'];
  $testimg = $r['t_image'];
}
else{
  @$nm = $_REQUEST['nm'];
  @$cn = $_REQUEST['cn'];
  @$des = $_REQUEST['des'];
  @$nsclimg = $_FILES['testimg']['name'];
  @$tsclimg = $_FILES['testimg']['tmp_name'];
  if(isset($_REQUEST['id'])&&($_REQUEST['submit']=='update')&&(empty($nsclimg))){
    $sql = "select * from testimonial where id = ".$_REQUEST['id'];
    $res = $con->query($sql);
    $r = $res->fetch_assoc();
  
    @$ntestimg = $r['t_image'];
  }
  else{
    @$ntestimg = "testimg/".pathinfo($nsclimg,PATHINFO_FILENAME).uniqid().".".pathinfo($nsclimg,PATHINFO_EXTENSION);
  }
}


  if(isset($_REQUEST['submit'])){

    if($_REQUEST['submit']!='update'){
      if(empty($nm)||empty($cn)||empty($des)||empty($nsclimg)){
        $msg = "<div class='alert alert-success' role='alert'>Enter All Field</div>";
      }
      else{
        if(move_uploaded_file($tsclimg,$ntestimg)){
          $sql = "insert into testimonial (name,company_name,description,t_image) values('$nm','$cn','$des','$ntestimg')";
          if($con->query($sql)){
            $msg = "<div class='alert alert-success' role='alert'>Successfully Inserted</div>";
          }
          else{
            $msg = "<div class='alert alert-danger' role='alert'>Insertion Failed</div>";
          }
        }
        else{
            $msg = "<div class='alert alert-danger' role='alert'>Failed to upload image</div>";
        }
      }
    }
    else{
      if(empty($nm)||empty($cn)||empty($des)||empty($ntestimg)){
        $msg = "<div class='alert alert-danger' role='alert'>Enter All Feild</div>";
      }
      else{
        if(!file_exists($ntestimg)){
          if(!move_uploaded_file($tsclimg,$ntestimg)){
            $msg = "<div class='alert alert-danger' role='alert'>Failed to upload image</div>";
          }
        }
        
        $sql = "update testimonial set name = '$nm', company_name = '$cn', description ='$des', t_image = '$ntestimg' where id = ".$_REQUEST['id'];
        if($con->query($sql)){
          $msg = "<div class='alert alert-success' role='alert'>Successfully Updated</div>";
          header('location: view_testimonial.php');
        }
        else{
          $msg = "<div class='alert alert-danger' role='alert'>Updation Failed</div>";
        }
        
      }

    }

  }
?>



<!--close-left-menu-stats-sidebar-->

<div id="content">
<div id="content-header">
  <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="tip-bottom">Testimonial</a> <a href="#" class="current"><?php if(isset($_REQUEST['id'])){echo "Update Testimonial";}else{echo "Add Testimonial";}?></a> </div>
  <h1><?php if(isset($_REQUEST['id'])){echo "Update Testimonial";}else{echo "Add Testimonial";}?></h1>
</div>
<div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span6">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5><?php if(isset($_REQUEST['id'])){echo "Update Testimonial";}else{echo "Add Testimonial";}?></h5>
        </div>
        <div class="control-group">

          <?php echo @$msg; ?>
        </div>
        <div class="widget-content nopadding">
          <form action="#" method="post" class="form-horizontal"enctype="multipart/form-data" >
          
            <div class="control-group">
              <label class="control-label">Full Name :</label>
              <div class="controls">
                <input type="text" class="span11"  placeholder="Full name" name = "nm" value = "<?php echo @$nm; ?>"/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Company Name :</label>
              <div class="controls">
          
                <input type="text" class="span11"  placeholder="Enter Company Name" name = "cn" value = "<?php echo @$cn ;?>"/>
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Description :</label>
              <div class="controls">
          
                <input type="text" class="span11"  placeholder="Enter Description" name = "des" value = "<?php echo @$des ;?>"/>
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Image</label>
              <div class="controls">
                <input type="file" name="testimg" accept="image/jpeg" style = "width:200px;"/>
                <?php if(isset($_REQUEST['id'])){ echo "<img src='".@$testimg."' width = '120px' height = '120px' alt='$testimg'>"; }
                ?>
              </div>
              
            </div>

            <div class="form-actions">
              <button type="submit" class="btn btn-success" name="submit" value=<?php if(isset($_REQUEST['id']))echo "update";?>><?php if(isset($_REQUEST['id'])){echo "Update Testimonial";}else{echo "Add Testimonial";}?></button>
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