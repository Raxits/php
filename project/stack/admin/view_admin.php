<?php include('header.php');



?>
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Admin</a> </div>
    <h1>All Admins</h1>
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
                $sql = "Select * From admin";
                $r = $conn->query($sql);
                if($r->num_rows>0){
                  while($r1=$r->fetch_assoc()){
                    echo" <tr class='even gradeA'>";
                    echo" <td>" . $r1['name'] . "</td>";
                    echo" <td>" . $r1['email'] . "</td>";
                    echo" <td>" . $r1['country'] . "</td>";
                    echo" <td>" . $r1['gender'] . "</td>";
                    echo" <td>" . $r1['knownlang'] . "</td>";
                    echo" <td> <img src='" . $r1['profileimg'] ."' width = 50px height = 50px alt ='". $r1['profileimg'] ."'> </td>";
                    echo" </tr>";
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