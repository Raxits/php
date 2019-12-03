<?php
ob_start();

include('header.php');
include('../db.php');

if(isset($_REQUEST['id'])&&(@$_REQUEST['afeature']!="update")){
  $sql = "select * from feature where id ='".$_REQUEST['id']."'";
  $res = $con->query($sql);
  if($res->num_rows>0){
    $r1=$res->fetch_assoc();
    @$te = $r1['title'];
    @$dn = $r1['description'];
    @$ic = $r1['icon'];
    
  } 
}else{
@$te = $_REQUEST['te'];
@$dn = $_REQUEST['dn'];
@$ic = $_REQUEST['ic'];
}

if(isset($_REQUEST['afeature']) &&!(isset($_REQUEST['id']))){

  if(!(empty($_REQUEST['te'])||empty($_REQUEST['dn'])||empty($_REQUEST['ic']))){
    $sql = "insert into feature (title,description,icon) values ('$te','$dn','$ic')";
    if($con->query($sql)){
      $msg = "<div class='alert alert-success' role='alert'>Successfully inserted feature</div>";
      @$te = "";
      @$dn = "";
      @$ic = "";
    }
    else{
      $msg = "<div class='alert alert-danger' role='alert'>Failed to insert feature</div>";
    }
  }
  else{
    $msg = "<div class='alert alert-danger' role='alert'>Enter all Field</div>";

  }
}
else if(isset($_REQUEST['afeature'])){
  if(!(empty($_REQUEST['te'])||empty($_REQUEST['dn'])||empty($_REQUEST['ic']))){
    $sql = "update feature set title= '$te', description='$dn', icon = '$ic' where id = ".$_REQUEST['id'];
    if($con->query($sql)){
      $msg = "<div class='alert alert-success' role='alert'>Successfully Updated feature</div>";
      header("location: view_feature.php?sf=$te&submit=");      
    }
    else{
      $msg = "<div class='alert alert-danger' role='alert'>Failed to Update feature</div>";

    }
  }
  else{
    $msg = "<div class='alert alert-danger' role='alert'>Enter all Field</div>";

  }
}

?>



<!--close-left-menu-stats-sidebar-->

<div id="content">
<div id="content-header">
  <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="tip-bottom">Feature</a> <a href="#" class="current"><?php if(isset($_REQUEST['id'])) echo "Update Feature"; else echo "Add Feature";?></a> </div>
  <h1><?php if(isset($_REQUEST['id'])) echo "Update Feature"; else echo "Add Feature";?></h1>
</div>
<div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span6">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5><?php if(isset($_REQUEST['id']))echo "Update Feature"; else echo "Add Feature";?></h5>
        </div>
        <div class="control-group">

          <?php echo @$msg; ?>
        </div>
        <div class="widget-content nopadding">

          <form action="#" method="post" class="form-horizontal"enctype="multipart/form-data" >
          
            <div class="control-group">
              <label class="control-label">Title :</label>
              <div class="controls">
                <input type="text" class="span11"  placeholder="Enter Feature Title" name = "te" value = "<?php echo $te; ?>"/>                
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Description :</label>
              <div class="controls">
                <input type="text"  class="span11"  placeholder="Enter Feature Description" name = "dn" value = "<?php echo $dn; ?>"/>
              </div>
            </div>
        
            <div class="control-group">
              <label class="control-label">Icons :</label>
              <div class="controls">
                <input type="text"  class="span11"  placeholder="Enter Feature Icon" name = "ic" value = "<?php echo $ic; ?>"/>
              </div>
            </div>
            <div class="form-actions">

              <button type="submit" class="btn btn-success" name="afeature" value="<?php echo "update"; ?>"><?php if(isset($_REQUEST['id']))echo "Update Feature"; else echo "Add Feature";?></button>
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