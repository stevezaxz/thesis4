<?php
session_start();

if(isset($_SESSION['uid'])) {
    include_once("edituser.php");
}
elseif(!(isset($_SESSION['uid']))) {
    header('location:index.php');
}

?>
<!DOCTYPE html>
<html>
    <?php 
    include 'connectdb.php';
    include('tabs-pills.html');
  
    //include('start.html');

    ?>
    <title>Youth Development Program</title> 

    <head>
        <script type="text/javascript" src="js/jquery-1.8.2"></script>
        <script type="text/javascript" src="js/jquery.validate.js"></script>
        <script type="text/javascript" src="js/bootstrap-modal.js"></script>
       
        
    </head>   
    
    
    
<link href="css/bootstrap.css" rel="stylesheet"> 

<body style="background: url(img/retro.jpg);">

        <div class="container" style='margin-top: 60px; ' position: relative; >
             
             <div class="hero-unit">
                 
                 <form action="editaccount.php" method="POST" name="edituser1" id="edituser1">
                    <table class="table table-hover">

                            <?php	
		
                                    $res = mysql_query("select * from tbluser");

                                    $rows = mysql_num_rows($res);
		
                                        if($rows!=0) {
			
                                                echo "<tr >
                                                        <td><center>Edit</center></td>
                                                        <td>Firstname</td>
                                                         <td>Middlename</td>
                                                         <td>Lastname</td>
                                                         <td>Username</td>
                                                         <td>Status</td>
                                                         <td>Privilege</td>

                                                        </tr>";
				
				
                                                         for ($i=0; $i< $rows; $i++) {
                                                                     $row = mysql_fetch_row ($res);
                                                                    print "<tr name='edituser' id='edituser' href='#example'  >";
                                                                    print "<td><input class='btn' type='submit'  name='edit' id='edit' value=$row[0]></td>";
                                                                    print "<td>$row[5]	</td>";
                                                                    print "<td>$row[6]	</td>";
                                                                    print "<td>$row[7]	</td>";
                                                                    print "<td>$row[1]	</td>";
                                                                    print "<td>$row[3]	</td>";
                                                                    print "<td>$row[4]	</td>";
																	print "<td><input type='hidden' ></td>";
                                                                            //print "<td>$row[6]</td>";
                                                                    print "</tr>";
		   
                                                              }
      
		
                                                }
		
                                                
                                            
		
		?>

                           
                   </table>

                   <!--  <center><input type="submit" name="submit" id="submit" value="submit" class="btn btn-primary"></center> -->
                     
                 </form>
           
         
                 
                 
            </div>
             
             
             
             
             
        </div>
    
    
   
    
    
    
</body>


<hr>
      <footer>
        <center><p>&copy; 2012 &nbsp; Community Improvement Division</p></center>
      </footer>

 <!--<script type="text/javascript" src="js/userdynamic.js"></script> -->

 <script type="text/javascript" src="js/bootstrap-alert.js"></script>


</html>