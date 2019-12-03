<?php include('header.php');

include('../db.php');

@$tile = $_REQUEST['sf'];

if(isset($_REQUEST['delid'])){
  $sql = "delete from feature where id=".$_REQUEST['delid'];
  if($con->query($sql)){
    $msg = "<div class='alert alert-danger' role='alert'>Successfully Feature Deleted</div>";
  }
  else{
    $msg = "<div class='alert alert-success' role='alert'>Failed to Delete feature</div>";

  }
}
if(isset($_REQUEST['submit'])){
  @$tile = $_REQUEST['sf'];
  if($tile == ""){
    $sql = "select * from feature";
  }
  else
    $sql = "select * from feature where title = '$tile'";
}
else{
  $sql = "select * from feature";
}

?>
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>  <a href="#" class="tip-bottom">Feature</a> <a href="#" class="current">View Feature</a> </div>
    <h1>View Feature</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="control-group">
      <label class="control-label" style="display:inline-block;">Search Feature :</label>
      <div class="controls" style="display:inline-block;">
        <form action="" method="get">
        <input type="text"  class="span5"  placeholder="Search Feature Title" value="<?php if($tile){ echo "$tile";} ?>" style = "margin-top:7px"name = "sf"/>
        <button type="submit" class="btn btn-success" style = "margin-top: -3px;margin-left: 100px;" name="submit">Search Feature</button>
        </form>
      </div>
    </div>
    <hr>
<?php echo @$msg ?>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
            <h5>View Feature</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
              <thead>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Icon</th>
                    <th colspan='2'>Modify/Delete</th>
                  </tr>
              </thead>
              <tbody>
                
              <?php
                  $res = $con->query($sql);

                  if(@$res->num_rows>0){
                    while($r1 =$res->fetch_assoc()){
                      echo" <tr class='even gradeA'>";
                      echo" <td style='text-align:center;'>" . $r1['title'] . "</td>";
                      echo" <td style='text-align:center;'>" . $r1['description'] . "</td>";
                      echo" <td style='text-align:center;'><div class='feature-item'> <div class='icon'> <i class='". $r1['icon'] . "'></i></div></div></td>";
                      echo "<td style='text-align:center;'> <a class='btn btn-success' name='submit' href='add_feature.php?id=".$r1['id']."'>Modify</a> </td>";
                      
                      echo "<td style='text-align:center;'>
                        <a class='btn btn-danger' name='delete' href='view_feature.php?delid=".$r1['id']."'>Delete</a> </td>";
                      echo " </tr>";
                    }
                  }
                  /*
                  <td></td>
                  <td>Win 98+</td>
                  <td class="center">6</td>
                  <td class="center">A</td>
                  <td class="center">A</td>
*/
              ?>

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Footer-part-->
<?php include('footer.php');