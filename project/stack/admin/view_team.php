<?php include('header.php');
include('../db.php');


if(isset($_REQUEST['id'])){
  $sql = "delete from team where id=".$_REQUEST['id'];
  if($con->query($sql)){
    $msg = "<div class='alert alert-danger' role='alert'>Successfully service Deleted</div>";
  }
  else{
    $msg = "<div class='alert alert-success' role='alert'>Failed to Delete service</div>";

  }
}


?>
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Team</a> </div>
    <h1>Team Members</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
            <h5>Team Members</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
              <thead>
                    <th>Name</th>
                    <th>Role</th>
                    <th>Image</th>
                    <th colspan='2'>Modify/Delete</th>
                  </tr>
              </thead>
              <tbody>
                
              <?php
                $sql = "Select * From team";
                $r = $con->query($sql);
                if(@$r->num_rows>0){
                  while($r1=$r->fetch_assoc()){
                    echo" <tr class='even gradeA'>";
                    echo" <td style='text-align:center;'>" . $r1['name'] . "</td>";
                    echo" <td style='text-align:center;'>" . $r1['role'] . "</td>";
                    echo" <td style='text-align:center;'> <img src='" . $r1['efile'] ."' style='max-height : 80px; max-width : 80px;' alt ='". $r1['efile'] ."'> </td>";
                    
                    echo "<td style='text-align:center;'> <a class='btn btn-success' name='submit' href='add_team.php?id=".$r1['id']."' >Modify</a> </td>";
                    
                    echo "<td style='text-align:center;'>
                      <a class='btn btn-danger' name='delete' href='view_team.php?id=".$r1['id']."'>Delete</a> </td>";
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