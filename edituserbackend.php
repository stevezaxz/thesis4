<?php
//session_start();
include('connectdb.php');
    $username = mysql_real_escape_string($_POST['username']);
    $password = mysql_real_escape_string($_POST['password']);
    $userpriv = mysql_real_escape_string($_POST['userpriv']);
    $status = mysql_real_escape_string($_POST['status']);
    $fname = mysql_real_escape_string($_POST['fname']);
    $mname = mysql_real_escape_string($_POST['mname']);
    $lname = mysql_real_escape_string($_POST['lname']);

    $uid = mysql_real_escape_string($_POST['uid']);

// $result = mysql_query("select user_name from tbluser where user_name='$username'");

  //  if(mysql_num_rows($result)){
    //        echo "Username already exist!";
    //    }

//    elseif(!(mysql_num_rows($result))) {
        mysql_query("update tbluser set user_name='$username',password = '$password',status= '$status',user_privilege='$userpriv',fname='$fname',mname='$mname',lname='$lname' where user_id='$uid'");
        echo "User Successfully Edited!";
//}

	
?>