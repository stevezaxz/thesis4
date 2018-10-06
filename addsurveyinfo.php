<?php
include('connectdb.php');

$question = mysql_real_escape_string($_POST['question']);
$counter = mysql_real_escape_string($_POST['counter']);
//$option1 = mysql_real_escape_string($_POST['option1']);
    for($x=0;$x<$counter;++$x) {
        $s[] = mysql_real_escape_string($_POST['option'.$x]);
        
    }

  if(mysql_query("insert into tblquestion values(null,'$question')")) 
      echo "Question Successfuly Added";
 
  else echo "Something went wrong";
  //mysql_query("insert into test values('$s[1]')");
  
  for($y=0;$y<$counter;$y++) {
      mysql_query("insert into tbloption values(null,'$s[$y]')");
      mysql_query("insert into tblquesoption values(null,(select max(ques_id) from tblquestion),(select max(option_id) from tbloption))");
  }
  
  // mysql_query("insert into test values('$counter')");
?>
