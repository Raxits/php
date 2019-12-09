<?php include('header.php');
include('../db.php');


if(isset($_REQUEST['del'])){
  $sql = "DELETE FROM subcategory where id = ".$_REQUEST['id'];
  if($con->query($sql)){
      $msg = "<div class='alert alert-success' role='alert'>Delete Successfully";
  }
  else{
      $msg = "<div class='alert alert-danger' role='alert'>Failed to Delete</div>";
  }
}


?>
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Subcategory</a> </div>
    <h1>All Subcategory</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
            <h5>Subcategory</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
              <thead>
                    <th>Title</th>
                    <th>CategoryID</th>
                    <th>Image</th>
                    <th colspan='2'>Modify/Delete</th>
                  </tr>
              </thead>
              <tbody>
                
              <?php
                $sql = "Select * From subcategory";
                $r = $con->query($sql);
                if(@$r->num_rows>0){
                  while($r1=$r->fetch_assoc()){
                    echo" <tr class='even gradeA'>";
                    echo" <td style='text-align:center;'>" . $r1['subcategory_name'] . "</td>";
                    echo" <td style='text-align:center;'>" . $r1['categoryid'] . "</td>";
                    echo" <td style='text-align:center;'> <img src='" . $r1['scimg'] ."' style='max-height : 80px; max-width : 80px;' alt ='". $r1['scimg'] ."'> </td>";
                    
                    echo "<td style='text-align:center;'> <a class='btn btn-success' name='submit' href='add_subcategory.php?id=".$r1['id']."'>Modify</a> </td>";
                    
                    echo "<td style='text-align:center;'>
                      <a class='btn btn-danger' name='delete' href='del_subcategory.php?id=".$r1['id']."&del=del'>Delete</a> </td>";
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