<?php
ob_start();

include('header.php');
include('../db.php');

if(isset($_REQUEST['id'])&&(@$_REQUEST['acategory']!="update")){
  $sql = "select * from category where id ='".$_REQUEST['id']."'";
  $res = $con->query($sql);
  if($res->num_rows>0){
    $r1=$res->fetch_assoc();
    @$te = $r1['category'];
    @$dn = $r1['description'];
    @$ic = $r1['price'];
    
  } 
}else{
@$te = $_REQUEST['te'];
@$dn = $_REQUEST['dn'];
@$ic = $_REQUEST['ic'];
}

if(isset($_REQUEST['acategory']) &&!(isset($_REQUEST['id']))){

  if(!(empty($_REQUEST['te']))){
    $sql = "insert into category (category) values ('$te')";
    if($con->query($sql)){
      $msg = "<div class='alert alert-success' role='alert'>Successfully inserted Category</div>";
      @$te = "";
      @$dn = "";
      @$ic = "";
    }
    else{
      $msg = "<div class='alert alert-danger' role='alert'>Failed to insert Category</div>";
    }
  }
  else{
    $msg = "<div class='alert alert-danger' role='alert'>Enter all Field</div>";

  }
}
else if(isset($_REQUEST['acategory']) && isset($_REQUEST['id'])){
  if(!(empty($_REQUEST['te']))){
    $sql = "update category set category= '$te' where id = ".$_REQUEST['id'];
    if($con->query($sql)){
      $msg = "<div class='alert alert-success' role='alert'>Successfully Updated Category</div>";
      header("location: view_category.php?sf=$te&submit=");      
    }
    else{
      $msg = "<div class='alert alert-danger' role='alert'>Failed to Update Category</div>";

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
  <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="tip-bottom">Category</a> <a href="#" class="current"><?php if(isset($_REQUEST['id'])) echo "Update Category"; else echo "Add Category";?></a> </div>
  <h1><?php if(isset($_REQUEST['id'])) echo "Update Category"; else echo "Add Category";?></h1>
</div>
<div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span6">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5><?php if(isset($_REQUEST['id']))echo "Update Category"; else echo "Add Category";?></h5>
        </div>
        <div class="control-group">

          <?php echo @$msg; ?>
        </div>
        <div class="widget-content nopadding">

          <form action="#" method="post" class="form-horizontal"enctype="multipart/form-data" >
          
            <div class="control-group">
              <label class="control-label">Category :</label>
              <div class="controls">
                <input type="text" class="span11"  placeholder="Enter Category" name = "te" value = "<?php echo $te; ?>"/>                
              </div>
            </div>
            <div class="form-actions">

              <button type="submit" class="btn btn-success" name="acategory" value="<?php echo "update"; ?>"><?php if(isset($_REQUEST['id']))echo "Update Category"; else echo "Add Category";?></button>
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