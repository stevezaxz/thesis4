<?php
include ('connectdb.php');
$barangay = $_GET['barangay'];

	$res = mysql_query("select a.fname,a.mname,a.lname,a.bdate,a.gender,c.status,c.employed,c.registered,d.barangay_name from tblyouth as a, tblyouthstatus as b, tblstatus as c ,tblbarangay as d where a.youth_id=b.youth_id and c.stat_id=b.stat_id and a.youth_id = d.youth_id and d.barangay_name='$barangay';");

	echo "<table>";
	echo "<th>Firstname</th>";
	echo "<th>Middlename</th>";
	echo "<th>Lastname</th>";
	echo "<th>Birthdate</th>";
	echo "<th>Gender</th>";
	echo "<th>Status</th>";
	echo "<th>Employed</th>";
	echo "<th>Registered</th>";
	echo "<th>Barangay</th>";
	
	
	
	
	while($result = mysql_fetch_array($res)) {
		echo "<tr>";
		echo "<td>".$result['fname']."</td>";
		echo "<td>".$result['mname']."</td>";
		echo "<td>".$result['lname']."</td>";
		echo "<td>".$result['bdate']."</td>";
		echo "<td>".$result['gender']."</td>";
		echo "<td>".$result['status']."</td>";
		echo "<td>".$result['employed']."</td>";
		echo "<td>".$result['registered']."</td>";
		echo "<td>".$result['barangay_name']."</td>";
		echo "<tr>";
	}
	echo "</table>";

?>