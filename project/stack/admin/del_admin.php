<?php include('header.php');

@$un = $_REQUEST['un'];
@$pd = $_REQUEST['pd'];
@$em = $_REQUEST['em'];
@$con = $_REQUEST['con'];
@$gender = $_REQUEST['gender'];
@$kl1 = $_REQUEST['kl'];
@$id = $_REQUEST['id'];
@$pf= $_REQUEST['pf'];


if(isset($_REQUEST['submit'])){
    if($_REQUEST['submit']=='yes'){
        $q = "delete from admin where id='$id'";
        if($conn->query($q)){
            header('location:view_admin.php');
        }
    }
    else{
        header('location:view_admin.php');
    }
}

?>
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="view_admin.php" class="current">View Admin</a> </div>
    <h1>Delete Admin</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
            <h5>Admins</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
              <thead>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Country</th>
                    <th>Gender</th>
                    <th>Known Languages</th>
                    <th>Profile Image</th>
                  </tr>
              </thead>
              <tbody>
                
              <?php
                   echo" <tr class='even gradeA'>";
                    echo" <td>" . $un . "</td>";
                    echo" <td>" . $em . "</td>";
                    echo" <td>" . $con . "</td>";
                    echo" <td>" . $gender . "</td>";
                    echo" <td>" . $kl1 . "</td>";
                    echo" <td> <img src='" . $pf."' width = 50px height = 50px alt ='". $pf ."'> </td>";                    
                    echo " </tr>";
  
                ?>
              </tbody>
            </table>
            <form action="#" method="post" class="form-horizontal">
          
            <div class="control-group">   
                <label class="control-label" style="width:100%;text-align:center;font-weight:900;">ARE YOU SURE DO YOU WANT TO DELETE A RECORD?</label>
                
            <div class="form-actions"style="width:100%;text-align:center;">
                <button type="submit" class="btn btn-success" name="submit" value="yes">YES</button>
                <button type="submit" class="btn btn-danger" name="submit" value="no">NO</button>

            </div>

            

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Footer-part-->
<?php include('footer.php');