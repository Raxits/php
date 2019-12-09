<?php
ob_start();

include('header.php');
include('../db.php');
?>
<?php

if(isset($_REQUEST['id']) && $_REQUEST['submit'] != "update"){
  $sql = "select * from blog where id = ".$_REQUEST['id'];
  $res = $con->query($sql);
  $r = $res->fetch_assoc();
  $nm = $r['title'];
  $des = $r['description'];
  $blgimg = $r['b_image'];
}
else{
  @$nm = $_REQUEST['nm'];
  @$des = $_REQUEST['des'];
  @$nsclimg = $_FILES['blgimg']['name'];
  @$tblgimg = $_FILES['blgimg']['tmp_name'];
  if(isset($_REQUEST['id'])&&($_REQUEST['submit']=='update')&&(empty($nsclimg))){
    $sql = "select * from subcategory where id = ".$_REQUEST['id'];
    $res = $con->query($sql);
    $r = $res->fetch_assoc();
  
    @$nblgimg = $r['b_image'];
  }
  else{
    @$nblgimg = "blgimg/".pathinfo($nsclimg,PATHINFO_FILENAME).uniqid().".".pathinfo($nsclimg,PATHINFO_EXTENSION);
  }
}


  if(isset($_REQUEST['submit'])){

    if($_REQUEST['submit']!='update'){
      if(empty($nm)||empty($des)||empty($nsclimg)){
        $msg = "<div class='alert alert-success' role='alert'>Enter All Field</div>";
      }
      else{
        if(move_uploaded_file($tblgimg,$nblgimg)){
          $sql = "insert into blog (title, description, b_image) values('$nm', '$des', '$nblgimg')";
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
      if(empty($nm)||empty($des)||empty($nblgimg)){
        $msg = "<div class='alert alert-danger' role='alert'>Enter All Feild</div>";
      }
      else{
        if(!file_exists($nblgimg)){
          if(!move_uploaded_file($tblgimg,$nblgimg)){
            $msg = "<div class='alert alert-danger' role='alert'>Failed to upload image</div>";
          }
        }
        
        $sql = "update blog set name = '$nm', description ='$des', b_image = '$nblgimg' where id = ".$_REQUEST['id'];
        if($con->query($sql)){
          $msg = "<div class='alert alert-success' role='alert'>Successfully Updated</div>";
          header('location: view_blog.php');
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
  <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="tip-bottom">Blog</a> <a href="#" class="current"><?php if(isset($_REQUEST['id'])){echo "Update Blog";}else{echo "Add Blog";}?></a> </div>
  <h1><?php if(isset($_REQUEST['id'])){echo "Update Blog";}else{echo "Add Blog";}?></h1>
</div>
<div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span6">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5><?php if(isset($_REQUEST['id'])){echo "Update Blog";}else{echo "Add Blog";}?></h5>
        </div>
        <div class="control-group">

          <?php echo @$msg; ?>
        </div>
        <div class="widget-content nopadding">
          <form action="#" method="post" class="form-horizontal"enctype="multipart/form-data" >
          
            <div class="control-group">
              <label class="control-label">Title :</label>
              <div class="controls">
                <input type="text" class="span11"  placeholder="Enter Blog Title" name = "nm" value = "<?php echo @$nm; ?>"/>
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Description :</label>
              <div class="controls">
          
                <input type="text" class="span11"  placeholder="Enter Short Description" name = "des" value = "<?php echo @$des ;?>"/>
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Image</label>
              <div class="controls">
                <input type="file" name="blgimg" accept="image/jpeg" style = "width:200px;"/>
                <?php if(isset($_REQUEST['id'])){ echo "<img src='".@$blgimg."' width = '120px' height = '120px' alt='$blgimg'>"; }
                ?>
              </div>
              
            </div>

            <div class="form-actions">
              <button type="submit" class="btn btn-success" name="submit" value=<?php if(isset($_REQUEST['id']))echo "update";?>><?php if(isset($_REQUEST['id'])){echo "Update Blog";}else{echo "Add Blog";}?></button>
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