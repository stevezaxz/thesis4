<?php

$a = mysql_real_escape_string($_POST['survey']);
   

$file=  fopen("controller.txt","w") or exit("Unable to open file");
    fwrite($file,$a);
   /* while(!feof($file)) {
        echo fgetc($file);
    }*/

    fclose($file);
    header("location: home.php");
?>
