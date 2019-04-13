<?php
include ("connectdb.php");

foreach (array_keys($_POST) as $to_check) {
    $$to_check = mysql_real_escape_string($_POST[$to_check])
}
