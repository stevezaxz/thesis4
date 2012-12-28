<?php
include('connectdb.php');
$fname = $_POST['fname'];
$lname= $_POST['lname'];
$mname = $_POST['mname'];
$username = $_POST['username'];
$privilege = $_POST['userpriv'];
$password = $_POST['password'];

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
