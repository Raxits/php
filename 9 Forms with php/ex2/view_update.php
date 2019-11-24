<?php
    @$uname1=$_REQUEST['uname'];
    @$pwd=$_REQUEST['pwd'];
    @$gender=$_REQUEST['gender'];
    @$country=$_REQUEST['country'];
    @$hobbies=$_REQUEST['hobbies'];
    @$upfile=$_FILES['upload']['name'];
    @$hb=implode(", ",$hobbies);
    @$dat=$_REQUEST['dat'];

    class sqloperation{
        public $con1;
        public function connect($sn, $un, $pw, $db){
            $this->con1 = new mysqli($sn,$un, $pw, $db);
            if($this->con1->connect_error){
                echo "<br>connection fail<br>";
            }
            else{
                //echo "<br>connection successful<br>";
            }
        }
        public function insert($dt,$un1,$pd,$gn,$hb,$cn,$uf){
            $sql1 = "insert into f1(date1,uname,pwd,gender,hobby,country,file) values('$dt','$un1','$pd','$gn','$hb','$cn','$uf');";
            if($this->con1->query($sql1)){
                echo "<br>Data Inserted Successfully<br>";
            }
            else{
                echo "<br>Data Insertion Failed<br>";
            }
            
        }
        public function update($id1,$dt,$un1,$pd,$gn,$hb,$cn,$uf){
            $sql1 = "update f1 set date1='$dt', uname='$un1', pwd='$pd', gender='$gn',country='$cn',hobby='$hb',file='$uf' where id=" . $id1; 
            if ($this->con1->query($sql1)) {
                echo "<br>updated successfully<br>";
            }
            else{
                echo "<br>Failed to Update Record<br>";
            }
        }

        public function allselect(){
            $sql1 = "SELECT * FROM f1";
            return ($this->con1->query($sql1));
        }
        
        public function del($id1){
            $sql= "delete from f1 where id=". $id1;
            if ($this->con1->query($sql)){
                echo "<br>Delete Successfully<br>";
            }
            else{
                echo "<br>Failed to delete<br>";
            }
        }
    }




    $sname = "localhost";
    $uname = "root";
    $pass = "";
    $db = "form3";
    $sql = new sqloperation();
    $sql->connect($sname, $uname, $pass, $db);

    if(isset($_REQUEST['submit']) && $_REQUEST['submit'] == "insert" ){
        $sql->insert($dat,$uname1,$pwd,$gender,$hb,$country,$upfile);
    }

    if(isset($_REQUEST['submit']) && $_REQUEST['submit'] == "update"){
        $id1 = $_REQUEST['id'];
        $sql->update($id1,$dat,$uname1,$pwd,$gender,$hb,$country,$upfile);
    }

    if(isset($_REQUEST['id']) && $_REQUEST['submit'] == "yes"){
        $id1 = $_REQUEST['id'];
        $sql->del($_REQUEST['id']);
    }
    echo "<a href='index.php'><b>Back</b></a><br>";
    echo "<table border = 1 cellspacing = 0 cellpadding = 10 style = 'margin : auto;'>";
    echo "<tr> <th> ID </th>";
    echo "<th> DATE </th>";
    echo "<th> USERNAME </th>";
    echo "<th> PASSWORD </th>";
    echo "<th> GENDER </th>";
    echo "<th> HOBBY </th>";
    echo "<th> COUNTRY </th>";
    echo "<th> FILE </th>";
    if($_REQUEST['op']=="update")
        echo "<th> UPDATE </th>";
    if($_REQUEST['op']=="del")
        echo "<th> DELETE </th>";

    echo "</tr>";
    $res = $sql->allselect();
    if($res->num_rows > 0){
        while($r1 = $res->fetch_assoc()){
            echo "<tr>";
            echo "<td>" . $r1['id'] . "</td>";
            echo "<td>" . $r1['date1'] . "</td>";
            echo "<td>" . $r1['uname'] . "</td>";
            echo "<td>" . $r1['pwd'] . "</td>";
            echo "<td>" . $r1['gender'] ."</td>";
            echo "<td>" . $r1['hobby'] . "</td>";
            echo "<td>" . $r1['country'] . "</td>";
            echo "<td>" . $r1['file'] . "</td>";
            if($_REQUEST['op']=="update"){
            echo "<td><a href='update.php?id=".$r1['id'] . "&date1=" . $r1['date1'] . "&uname=" . $r1['uname'] . "&pwd=" . $r1['pwd'] . "&gender=" . $r1['gender'] . "&hobby=" . $r1['hobby']."&country=" . $r1['country'] . "&file=" . $r1['file'] ."'>Update</a></td>";
            }
            if($_REQUEST['op']=="del"){
                echo "<td><a href='delete1.php?id=" . $r1['id'] . "&date1=" . $r1['date1'] . "&uname=" . $r1['uname'] . "&pwd=" . $r1['pwd'] . "&gender=" . $r1['gender'] . "&hobby=" . $r1['hobby']."&country=" . $r1['country'] . "&file=" . $r1['file']."'>Delete</a></td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }

?>