<?php
ob_start();

include('header.php');
include('../db.php');
?>
<?php


function chkfld($p){
  $p1 = explode("/",$p);
  @$p2 = $p1[0];
  $i=1;
  do{
    
    @$p2 =implode("/",array($p2,$p1[$i]));
    if(!file_exists($p2)){
      if(!mkdir($p2))
      $msg = "<div class='alert alert-danger' role='alert'>Failed to Create File</div>";
    }
    $i++;
  }while($i<count($p1)-1);
}
if(isset($_REQUEST['submit'])){
if($_REQUEST['dn'] != ""){
  if(!file_exists($_REQUEST['dn'])){
    chkfld($_REQUEST['dn']);
    if(!mkdir($_REQUEST['dn']))
    $msg = "<div class='alert alert-danger' role='alert'>Failed to Create File</div>";
    else
    $msg = "<div class='alert alert-success' role='alert'>Folder Created successfull</  div>";
  }
  else{
    $msg = "<div class='alert alert-warning' role='alert'>Folder Already Exist</div>";
  }
}
if($_REQUEST['fn'] != ""){
  $k=explode(".",$_REQUEST['fn']);
  if($k[1]=="txt"||$k[1]=="TXT"){
    if(!file_exists($_REQUEST['fn'])){
      chkfld($_REQUEST['fn']);

      if(!fopen($_REQUEST['fn'],"x"))
        $msg = "<div class='alert alert-danger' role='alert'>Failed to Create File</div>";
      else
        $msg = "<div class='alert alert-success' role='alert'>File Create Successful</div>";
    }
    else{
      $msg = "<div class='alert alert-warning' role='alert'>File Already Exist</div>";
    }
  }
  else{
    $msg = "<div class='alert alert-danger' role='alert'>Enter *.txt File</div>";
  }
}
}


if(isset($_REQUEST['sfile'])){
  file_put_contents($_REQUEST['path'],$_REQUEST['sfl']);
  header("location: view_file.php");  
}

?>




<!--close-left-menu-stats-sidebar-->

<div id="content">
<div id="content-header">
  <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="tip-bottom">File System</a> <a href="#" class="current"><?php if(!isset($_REQUEST['path'])) echo "Add File/Folder";else echo "Edit File";?></a> </div>
  <h1><?php if(!isset($_REQUEST['path'])) echo "Add File/Folder";else echo "Edit File";?></h1>
</div>
<div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="<?php if(!isset($_REQUEST['path'])) echo "span6";else echo "span12";?>">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5><?php if(!isset($_REQUEST['path'])) echo "Add File/Folder";else echo basename($_REQUEST['path']);?></h5>
        </div>
        <div class="control-group">

          <?php echo @$msg; ?>
        </div>


<?php if(!isset($_REQUEST['path'])){?>
        <div class="widget-content nopadding">
          <form action="#" method="post" class="form-horizontal"enctype="multipart/form-data" >
          
            <div class="control-group">
              <label class="control-label">Make Directory/Folder :</label>
              <div class="controls">
                <input type="text" class="span11"  placeholder="Enter Folder Name" name = "dn"/>
                <label style="color:red;">*enter "/" slash only</label>
                
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Make File :</label>
              <div class="controls">
                <input type="text"  class="span11"  placeholder="Enter File Name" name = "fn"/>
                <label style="color:red;">*enter "/" slash only</label>
              </div>
            </div>
        
            <div class="form-actions">
              <button type="submit" class="btn btn-success" name="submit">Create File/Folder</button>
            </div>
          </form>
        </div>

        <?php }
      else{
        ?>
          <form action="#" method="post" class="form-horizontal"enctype="multipart/form-data" >

            <div class="control-group">
                <textarea rows="12" name = "sfl" style= "margin :0px 3px; width:98%;">
                <?php
                  if(file_exists($_REQUEST['path'])){
                    $rd = file_get_contents($_REQUEST['path']);
                    echo $rd;
                  }
                ?>
                </textarea>
              </div>
                    
            <div class="form-actions">
              <button type="submit" class="btn btn-success" name="sfile">Save File</button>
            </div>
          </form>
        
<?php      }

?>      

      </div>
    </div>
  </div>
  
</div>
</div>
<!--Footer-part-->
<?php
   include('footer.php');
?>