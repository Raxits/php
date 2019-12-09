<?php
ob_start();

include('header.php');
include('../db.php');
?>
<?php

if(isset($_REQUEST['id'])&&!(@isset($_REQUEST['team']))){
    $sql = "select * from team where id = '".$_REQUEST['id']."'";
    $res = $con->query($sql);
    $r = $res->fetch_assoc();
    @$en = $r['name'];
    @$rol = $r['role'];
    @$pl1 = $r['efile'];

}
else{

@$en=$_REQUEST['name'];
@$rol=$_REQUEST['role'];
@$eimg=$_FILES['eimg']['name'];
@$eimgpath=$_FILES['eimg']['tmp_name'];

}

@$epath="timage/".pathinfo($_FILES['eimg']['name'],PATHINFO_FILENAME).uniqid().".".pathinfo($_FILES['eimg']['name'],PATHINFO_EXTENSION);


if(isset($_REQUEST['team']) &&!(isset($_REQUEST['id']))){
    if((empty($_REQUEST['en'])||empty($_REQUEST['role'])||empty($_FILES['eimg']['name']))){
        $sql = "insert into team (name,role,efile) values ('$en','$rol','$epath')";
        if($con->query($sql)){
            $msg = "<div class='alert alert-success' role='alert'>Success fully inserted</div>";
            if(!move_uploaded_file($eimgpath,$epath)){
                $msg = "<div class='alert alert-danger' role='alert'>Failed to upload image</div>";
            }
        }
        else{
            $msg = "<div class='alert alert-danger' role='alert'>Failed to insert</div>";
        }
        @$en = "";
        @$rol = "";
        @$pl1 = "";
    
    
    }
    else{
        $msg = "<div class='alert alert-danger' role='alert'>Enter All Field</div>";
        
    }
}
else if(isset($_REQUEST['team']) && isset($_REQUEST['id'])){
        @$id = $_REQUEST['id'];
        $msg = $id;
        $sql = "update team set name = '$en', role = '$rol', efile = '$epath' where id = $id";
        if($con->query($sql)){
            $msg = "<div class='alert alert-success' role='alert'>Successfully updated</div>";
            if(!move_uploaded_file($eimgpath,$epath)){
                $msg = "<div class='alert alert-danger' role='alert'>Failed to upload image</div>";
            }

        }
        header('location: view_team.php');
        exit;
    }


?>

<!--close-left-menu-stats-sidebar-->

<div id="content">
<div id="content-header">
  <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="tip-bottom">Team Member</a> <a href="#" class="current"><?php if(isset($_REQUEST['id'])){echo "Update Team Member";}else{echo "Add Team Member";}?></a> </div>
  <h1><?php if(isset($_REQUEST['id'])){echo "Update Team Member";}else{echo "Add Team Member";}?></h1>
</div>
<div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span8">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5><?php if(isset($_REQUEST['id'])){echo "Update Team Member";}else{echo "Add Team Member";}?></h5>
        </div>
        <div class="control-group">

          <?php echo @$msg; ?>
        </div>
        <div class="widget-content nopadding">
          <form action="#" method="post" class="form-horizontal"enctype="multipart/form-data" >
          
            <div class="control-group">
              <label class="control-label">Name :</label>
              <div class="controls">
                <input type="text" class="span11"  placeholder="Enter Full name" name = "name" value = "<?php echo @$en; ?>"/>
              </div>
            </div>

          
            <div class="control-group">
              <label class="control-label">Role :</label>
              <div class="controls">
                <input type="text" class="span11"  placeholder="Enter Role" name = "role" value = "<?php echo @$rol; ?>"/>
              </div>
            </div>


            <div class="control-group">
              <label class="control-label">Employee Image :</label>
              <div class="controls">
                <input type="file" name="eimg" accept="image/jpeg" style = "width:200px;"/>
                <?php if(isset($_REQUEST['id'])){ echo "<img src='".@$pl1."' width = '120px' height = '120px' alt='pimg.jpeg'>"; }
                ?>
              </div>
              
            </div>

            <div class="form-actions">
              <button type="submit" class="btn btn-success" name="team" value="<?php if(isset($_REQUEST['id']))echo "update";?> "><?php if(isset($_REQUEST['id'])){echo "Update";}else{echo "Add Team Member";}?></button>
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