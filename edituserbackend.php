<?php
//session_start();
include('connectdb.php');
    $username = $_POST['username'];
    $password = $_POST['password'];
    $userpriv = $_POST['userpriv'];
    $status = $_POST['status'];
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];

    $uid = $_POST['uid'];

// $result = mysql_query("select user_name from tbluser where user_name='$username'");

  //  if(mysql_num_rows($result)){
    //        echo "Username already exist!";
    //    }

//    elseif(!(mysql_num_rows($result))) {
        mysql_query("update tbluser set user_name='$username',password = '$password',status= '$status',user_privilege='$userpriv',fname='$fname',mname='$mname',lname='$lname' where user_id='$uid'");
        echo "User Successfully Edited!";
//}

	
?>