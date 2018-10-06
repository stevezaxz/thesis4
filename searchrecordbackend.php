<?php
include 'connectdb.php';

//$barangay = mysql_real_escape_string($_POST['barangaylist']);
//$fname = mysql_real_escape_string($_POST['fname']);
//$lname = mysql_real_escape_string($_POST['lname']);
//$flag = mysql_real_escape_string($_POST['flag']);
//echo $barangay . $fname . $lname . $flag;
$flag = mysql_real_escape_string($_POST['flag']);

evaluateflag($flag);


  function display($result1){
            echo "<table>";
            while($res = mysql_fetch_array($result1)) {
                echo "<tr>";
                echo "<td>".$res['fname']."</td>";
                echo "<td>".$res['mname']."</td>";
                echo "<td>".$res['lname']."</td>";
                echo "<td>".$res['bdate']."</td>";
                echo "<td>".$res['gender']."</td>";
                echo "<td>".$res['educatt']."</td>";
                echo "<td>".$res['skul_last']."</td>";
                echo "<td>".$res['skills']."</td>";
                echo "<td>".$res['householdno']."</td>";
                echo "<td>".$res['barangay_name']."</td>";
                echo "</tr>";
                 }
        echo"</table>";
    }


function evaluateflag($flag) {
    $result='';
      
  
    
    
        
    if($flag==1) {
        $fname = mysql_real_escape_string($_POST['fname']);
        $barangay = mysql_real_escape_string($_POST['barangaylist']);
       // echo $fname . $barangay . $flag;
            $result = mysql_query("select a.fname,a.mname,a.lname,a.bdate,a.gender,a.educatt,a.skul_last,a.skills,a.householdno,b.barangay_name from tblyouth as a,tblbarangay as b where a.youth_id = b.youth_id and b.barangay_name='$barangay' and a.fname like '%$fname%' ");
            display($result);
          
    }
    
    
    else if($flag==2) {
        $lname = mysql_real_escape_string($_POST['lname']);
        $barangay = mysql_real_escape_string($_POST['barangaylist']);
        
        $result = mysql_query("select a.fname,a.mname,a.lname,a.bdate,a.gender,a.educatt,a.skul_last,a.skills,a.householdno,b.barangay_name from tblyouth as a,tblbarangay as b where a.youth_id = b.youth_id and b.barangay_name='$barangay' and a.lname like '%$lname%' ");
        display($result);
        
        
    }
    
    
    else if($flag==3) {
        $fname = mysql_real_escape_string($_POST['fname']);
        $lname = mysql_real_escape_string($_POST['lname']);
        $barangay = mysql_real_escape_string($_POST['barangaylist']);
        
        $result = mysql_query("select a.fname,a.mname,a.lname,a.bdate,a.gender,a.educatt,a.skul_last,a.skills,a.householdno,b.barangay_name from tblyouth as a,tblbarangay as b where a.youth_id = b.youth_id and b.barangay_name='$barangay' and a.fname like '%$fname%' and a.lname like '%$lname%'");
        display($result);
        
    }
    
    
    else if($flag==4) {
        $fname = mysql_real_escape_string($_POST['fname']);
        $lname = mysql_real_escape_string($_POST['lname']);
        $barangay = mysql_real_escape_string($_POST['barangaylist']);
        
        $result = mysql_query("select a.fname,a.mname,a.lname,a.bdate,a.gender,a.educatt,a.skul_last,a.skills,a.householdno,b.barangay_name from tblyouth as a,tblbarangay as b where a.youth_id = b.youth_id and b.barangay_name='$barangay' and a.fname like '%$fname%' and a.lname like '%$lname%'");
        display($result);
        
    }
    
  
    
    
    
    
    
    
    
    
}





?>
