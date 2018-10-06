<?php
include('connectdb.php');
$fname = mysql_real_escape_string($_POST['fname']);
$lname= mysql_real_escape_string($_POST['lname']);
$mname = mysql_real_escape_string($_POST['mname']);
$username = mysql_real_escape_string($_POST['username']);
$privilege = mysql_real_escape_string($_POST['userpriv']);
$password = mysql_real_escape_string($_POST['password']);

$result = mysql_query("select user_name from tbluser where user_name='$username'");

if(mysql_num_rows($result)){
        echo "Username already exist!";
    }

elseif(!(mysql_num_rows($result))) {
  //  mysql_query("insert into tbluser values('','$username','$password','ACTIVE','$privilege','$fname','$mname','$lname')");
    mysql_query("call sp_adduser('$username','$password','$privilege','$fname','$mname','$lname')");
    echo "User Successfully Added!";
}














?>
