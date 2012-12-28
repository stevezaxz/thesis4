<?php
include 'connectdb.php';
$edit = $_POST['edit'];
echo $edit;

echo "asd";
if(mysql_query("insert into test values('$edit',(select now()))"))
        echo "sakses";
else echo "waa";



?>
