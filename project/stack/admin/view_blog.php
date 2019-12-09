<?php include('header.php');
include('../db.php');


if(isset($_REQUEST['del'])){
    $sql = "DELETE FROM blog where id = ".$_REQUEST['id'];
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
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Blog</a> </div>
    <h1>All Blog</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
            <h5>Blog</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
              <thead>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th colspan='2'>Modify/Delete</th>
                  </tr>
              </thead>
              <tbody>
                
              <?php
                $sql = "Select * From blog";
                $r = $con->query($sql);
                if(@$r->num_rows>0){
                  while($r1=$r->fetch_assoc()){
                    echo" <tr class='even gradeA'>";
                    echo" <td style='text-align:center;'>" . $r1['title'] . "</td>";
                    echo" <td style='text-align:center;'>" . $r1['description'] . "</td>";
                    echo" <td style='text-align:center;'> <img src='" . $r1['b_image'] ."' style='max-height : 80px; max-width : 80px;' alt ='". $r1['b_image'] ."'> </td>";
                    
                    echo "<td style='text-align:center;'> <a class='btn btn-success' name='submit' href='add_Blog.php?id=".$r1['id']."' >Modify</a> </td>";
                    
                    echo "<td style='text-align:center;'>
                      <a class='btn btn-danger' name='delete' href='del_Blog.php?id=".$r1['id']."&del=del'>Delete</a> </td>";
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