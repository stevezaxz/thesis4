<?php
include ("connectdb.php");

foreach (array_keys($_POST) as $key) {
  $$key = mysql_real_escape_string($_POST[$key]);
}

$bdate = $month . " " . $day . "," . $year;
 
/////////kuha sa controller id 
$file = fopen("controller.txt", "r");
           while (!feof($file)){
            $quesid = trim(fgets($file));

          if(!feof($file)){
                   eval($quesid);  ////////// <----controller question ID;
          }
         }
            fclose($file);

    for($a=0;$a<$hawid;$a++){
        $arr2[$a]= $_POST['option'.$a];   /////<--- pag kuha sa dynamic value sa mga radio buttons!
    }
            
   // print_r($arr2);
            
            
            
//mysql_query("insert into test values('$option',(select now()))");
mysql_query("insert into tblyouth values(null,'$fname','$mname','$lname',(select str_to_date('$bdate','%M%d,%Y')),'$gender','$educatt','$skullast','$skills','$household')");
//mysql_query("call sp_addyouth('$fname','$mname','$lname','$bdate','$gender','$educatt','$skullast','$skills','$household')");
mysql_query("insert into tblstatus values(null,'$status','$employed','$reg')");
//mysql_query("call sp_addstatus('$status','$employed','$reg')");
mysql_query("insert into tblyouthstatus values((select max(youth_id) from tblyouth),(select max(stat_id) from tblstatus))");
//mysql_query("call sp_addyouthstatus()");
mysql_query("insert into tblparents values(null,'$fathersname','$fage','$fathersrelig')");
//mysql_query("call sp_addparents('$fathersname','$fage','$fathersrelig')");
mysql_query("insert into tbloccupation values(null,'$fathersoccu')");  // wala na na ko gi stored procedure kai 1 ra ka variable..unsa ko buang? haha
mysql_query("insert into tblparentsoccu values((select max(parent_id) from tblparents),(select max(occu_id) from tbloccupation))");
//mysql_query("call sp_addfatheroccu()");
mysql_query("insert into tblyouthparents values((select max(youth_id) from tblyouth),(select max(parent_id) from tblparents))");
//mysql_query("call sp_addfatheryp()");
mysql_query("insert into tblparents values(null,'$mothersname','$mage','$mothersrelig')");
//mysql_query("call sp_addparents('$mothersname','$mage','$mothersrelig')");
mysql_query("insert into tbloccupation values(null,'$mothersoccu')");
mysql_query("insert into tblyouthparents values((select max(youth_id) from tblyouth),(select max(parent_id) from tblparents))");
//mysql_query("call sp_addmotheryp()");
mysql_query("insert into tblparentsoccu values((select max(parent_id) from tblparents),(select max(occu_id) from tbloccupation))");
//mysql_query("call sp_addmotheroccu()");
mysql_query("insert into tblbarangay values(null,'$barangay',(select max(youth_id) from tblyouth))");
//mysql_query("call sp_addbarangay('$barangay')");
mysql_query("insert into tblsurvey values(null,(select now()))");
mysql_query("insert into tblyouthsurvey values((select max(survey_id) from tblsurvey),(select max(youth_id) from tblyouth))");
mysql_query("insert into tblsurveyquestion values('$quesid',(select max(survey_id) from tblsurvey))");
//mysql_query("insert into tblreference values(null,(select max(survey_id) from tblsurvey),)");

//echo $quesid;
// mag insert nako sa tblreference taas ang process since dynamic ang answers, radiobutton og questions.
$result = mysql_query("select ques_opt_id from tblquesoption where ques_id='$quesid'"); //// <---- gikan sa controller ang value

while($result1 = mysql_fetch_array($result)) {
        $arr[] = $result1['ques_opt_id'];
   // $c++;
}
$counter =  mysql_num_rows($result);

for($x=0;$x<$counter;$x++) {
    mysql_query("insert into tblreference values('',(select max(survey_id) from tblsurvey),'$arr[$x]',(select max(youth_id) from tblyouth),'$arr2[$x]')");
  
}



header("location:startsurvey.php");  

?>
