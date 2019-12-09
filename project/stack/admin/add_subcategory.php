<?php
ob_start();

include('header.php');
include('../db.php');
?>
<?php

if(isset($_REQUEST['id']) && $_REQUEST['submit'] != "update"){
  $sql = "select * from subcategory where id = ".$_REQUEST['id'];
  $res = $con->query($sql);
  $r = $res->fetch_assoc();
  $scn = $r['subcategory_name'];
  $cn = $r['categoryid'];
  $scimg = $r['scimg'];
}
else{
  @$scn = $_REQUEST['scn'];
  @$cn = $_REQUEST['cn'];
  @$nsclimg = $_FILES['scimg']['name'];
  @$tsclimg = $_FILES['scimg']['tmp_name'];
  if(isset($_REQUEST['id'])&&($_REQUEST['submit']=='update')&&(empty($nsclimg))){
    $sql = "select * from subcategory where id = ".$_REQUEST['id'];
    $res = $con->query($sql);
    $r = $res->fetch_assoc();
  
    @$nscimg = $r['scimg'];
  }
  else{
    @$nscimg = "scimage/".pathinfo($nsclimg,PATHINFO_FILENAME).uniqid().".".pathinfo($nsclimg,PATHINFO_EXTENSION);
  }
}


  if(isset($_REQUEST['submit'])){

    if($_REQUEST['submit']!='update'){
      if(empty($scn)||empty($cn)||empty($nsclimg)){
        $msg = "<div class='alert alert-success' role='alert'>Enter All Field</div>";
      }
      else{
        if(move_uploaded_file($tsclimg,$nscimg)){
          $sql = "insert into subcategory (subcategory_name,categoryid,scimg) values('$scn','$cn','$nscimg')";
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
      if(empty($scn)||empty($cn)||empty($nscimg)){
        $msg = "<div class='alert alert-danger' role='alert'>Enter All Feild</div>";
      }
      else{
        if(!file_exists($nscimg)){
          if(!move_uploaded_file($tsclimg,$nscimg)){
            $msg = "<div class='alert alert-danger' role='alert'>Failed to upload image</div>";
          }
        }
        
        $sql = "update subcategory set subcategory_name = '$scn', categoryid = '$cn', scimg = '$nscimg' where id = ".$_REQUEST['id'];
        if($con->query($sql)){
          $msg = "<div class='alert alert-success' role='alert'>Successfully Updated</div>";
          header('location: view_subcategory.php');
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
  <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="tip-bottom">Subcategory</a> <a href="#" class="current"><?php if(isset($_REQUEST['id'])){echo "Update Subcategory";}else{echo "Add Subcategory";}?></a> </div>
  <h1><?php if(isset($_REQUEST['id'])){echo "Update Subcategory";}else{echo "Add Subcategory";}?></h1>
</div>
<div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span6">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5><?php if(isset($_REQUEST['id'])){echo "Update Subcategory";}else{echo "Add Subcategory";}?></h5>
        </div>
        <div class="control-group">

          <?php echo @$msg; ?>
        </div>
        <div class="widget-content nopadding">
          <form action="#" method="post" class="form-horizontal"enctype="multipart/form-data" >
          
            <div class="control-group">
              <label class="control-label">Subcategory Name:</label>
              <div class="controls">
                <input type="text" class="span11"  placeholder="Enter Subcategory Name" name = "scn" value = "<?php echo @$scn; ?>"/>
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Category :</label>
              <div class="controls">
                <select name = "cn">
                  <option selected disabled>---SELECT---</option>
                  <?php
                    $sql = "select * from category";
                    $res = $con->query($sql);
                    if($res->num_rows>0){
                      while($r = $res->fetch_assoc()){
                        $r1 = $r['id'];
                        if(@$cn == "$r1") 
                          $s1 = "selected";
                        else
                          $s1 =""; 
                        echo "<option $s1 value='$r1'>".$r['category']."</option>"; 
                      }
                    } 

                  ?>
                </select>
              </div>
            </div>
           
            <div class="control-group">
              <label class="control-label">Subcategory Image :</label>
              <div class="controls">
                <input type="file" name="scimg" accept="image/jpeg" style = "width:200px;"/>
                <?php if(isset($_REQUEST['id'])){ echo "<img src='".@$scimg."' width = '120px' height = '120px' alt='scimg.jpeg'>"; }
                ?>
              </div>
              
            </div>

            <div class="form-actions">
              <button type="submit" class="btn btn-success" name="submit" value=<?php if(isset($_REQUEST['id']))echo "update";?>><?php if(isset($_REQUEST['id'])){echo "Update";}else{echo "Add Subcategory";}?></button>
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