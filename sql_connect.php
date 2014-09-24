<?php
$db_host="localhost" ; //Database hostname
$db_dbname="maya-notes" ; //Database name
$db_user="root" ; //SQL Username
$db_pass="root" ; //SQL Password
$con = @mysql_connect($db_host, $db_user, $db_pass, $db_pass) or die("Cannot connect to $db_host!");
@mysql_select_db($db_dbname) or die("Cannot select database!");
?>
