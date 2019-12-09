<?php
ob_start();

include('header.php');
include('../db.php');

if(isset($_REQUEST['id'])&&(@$_REQUEST['aplan']!="update")){
  $sql = "select * from plan where id ='".$_REQUEST['id']."'";
  $res = $con->query($sql);
  if($res->num_rows>0){
    $r1=$res->fetch_assoc();
    @$te = $r1['title'];
    @$dn = $r1['description'];
    @$ic = $r1['price'];
    
  } 
}else{
@$te = $_REQUEST['te'];
@$dn = $_REQUEST['dn'];
@$ic = $_REQUEST['ic'];
}

if(isset($_REQUEST['aplan']) &&!(isset($_REQUEST['id']))){

  if(!(empty($_REQUEST['te'])||empty($_REQUEST['dn'])||empty($_REQUEST['ic']))){
    $sql = "insert into plan (title,description,price) values ('$te','$dn','$ic')";
    if($con->query($sql)){
      $msg = "<div class='alert alert-success' role='alert'>Successfully inserted Plan</div>";
      @$te = "";
      @$dn = "";
      @$ic = "";
    }
    else{
      $msg = "<div class='alert alert-danger' role='alert'>Failed to insert Plan</div>";
    }
  }
  else{
    $msg = "<div class='alert alert-danger' role='alert'>Enter all Field</div>";

  }
}
else if(isset($_REQUEST['aplan']) && isset($_REQUEST['id'])){
  if(!(empty($_REQUEST['te'])||empty($_REQUEST['dn'])||empty($_REQUEST['ic']))){
    $sql = "update plan set title= '$te', description='$dn', price = '$ic' where id = ".$_REQUEST['id'];
    if($con->query($sql)){
      $msg = "<div class='alert alert-success' role='alert'>Successfully Updated Plan</div>";
      header("location: view_plan.php?sf=$te&submit=");      
    }
    else{
      $msg = "<div class='alert alert-danger' role='alert'>Failed to Update Plan</div>";

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
  <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="tip-bottom">Plan</a> <a href="#" class="current"><?php if(isset($_REQUEST['id'])) echo "Update Plan"; else echo "Add Plan";?></a> </div>
  <h1><?php if(isset($_REQUEST['id'])) echo "Update Plan"; else echo "Add Plan";?></h1>
</div>
<div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span6">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5><?php if(isset($_REQUEST['id']))echo "Update Plan"; else echo "Add Plan";?></h5>
        </div>
        <div class="control-group">

          <?php echo @$msg; ?>
        </div>
        <div class="widget-content nopadding">

          <form action="#" method="post" class="form-horizontal"enctype="multipart/form-data" >
          
            <div class="control-group">
              <label class="control-label">Title :</label>
              <div class="controls">
                <input type="text" class="span11"  placeholder="Enter Plan Title" name = "te" value = "<?php echo $te; ?>"/>                
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Description :</label>
              <div class="controls">
                <textarea class="span11"  placeholder="Enter Plan Description" name = "dn"> <?php echo $dn; ?> </textarea>
              </div>
            </div>
        
            <div class="control-group">
              <label class="control-label">Price :</label>
              <div class="controls">
                <input type="text"  class="span11"  placeholder="Enter Plan Price" name = "ic" value = "<?php echo $ic; ?>"/>
              </div>
            </div>
            <div class="form-actions">

              <button type="submit" class="btn btn-success" name="aplan" value="<?php echo "update"; ?>"><?php if(isset($_REQUEST['id']))echo "Update Plan"; else echo "Add Plan";?></button>
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