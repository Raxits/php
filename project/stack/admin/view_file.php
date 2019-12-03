<?php include('header.php');


include('../db.php');


?>
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Admin</a> </div>
    <h1>View Files/Folders</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="control-group">
      <label class="control-label" style="display:inline-block;">Input Path :</label>
      <div class="controls" style="display:inline-block;">
        <form action="" method="get">
        <input type="text"  class="span5"  placeholder="Enter Path"  style = "margin-top:7px"name = "in"/>
        <button type="submit" class="btn btn-success" style = "margin-top: -3px;margin-left: 100px;" name="submit">View File/Folder</button>
        </form>
      </div>
    </div>

    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
            <h5>View Files/Folders</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
              <thead>
                    <th>Name</th>
                    <th>DateModified</th>
                    <th>Type</th>
                    <th>Size</th>
                    <th colspan='2'>Modify/Delete</th>
                  </tr>
              </thead>
              <tbody>
                
              <?php
                if(isset($_REQUEST['in'])){
                    @$dir=$_REQUEST['in'];
                    $file=scandir($dir);
                    $file=array_diff($file,array(".",".."));
                    foreach($file as $f){
                        if(is_dir("$dir/$f")){
                          echo "<tr style='text-align:center;'>";
                          echo "<td>$f</td>";
                          echo "<td></td>";
                          echo "<td style='text-align:center;'>".filetype($dir."/".$f)."</td>";
                          echo "<td></td>";
                          echo "<td style='text-align:center;'><button type='submit' class='btn btn-success' name='rename'>Rename</button>
                          </td>";
                          echo "<td style='text-align:center;'><button type='submit' class='btn btn-danger' name='rename'>Delete</button></td>";

                          echo "</tr>";
                         }
                    }
                    foreach(glob("$dir/*.*") as $f){
                     {

                        $x = round(filesize($f)/1024);
                        $y = pathinfo($f,PATHINFO_EXTENSION);
                        $z = pathinfo($f,PATHINFO_FILENAME);
                        if($y=="txt"||$y=="TXT"){
                          $col="enabled ";
                        }
                        else{
                          $col="disabled ";
                        }
                        echo "<tr>";
                        echo "<td>".basename($f)."</td>";
                        echo "<td style='text-align:center;'>".date("d-m-Y",filemtime("$f"))."</td>";
                        echo "<td style='text-align:center;'>".$y."</td>";
                        echo "<td style='text-align:center;'>".$x."KB</td>";
                        echo "<td style='text-align:center;'><a class='btn btn-success' name='update' href='add_file.php?path=$f' ".$col.">Update</a>
                        </td>";

                        echo "<form action='#' method='get'>";
                    
                        echo "<td style='text-align:center;'><button type='submit' class='btn btn-danger' name='delete' value='$f' ".$col.">Delete</button></td>";
                        echo "</form>";
                        echo "</tr>";
                        
                      }
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