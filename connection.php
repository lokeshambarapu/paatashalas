<?php
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "sample_school";
$connection = mysql_connect($mysql_hostname,$mysql_user,$mysql_password) or die("Could not connect database");
$db = mysql_select_db($mysql_database, $connection) or die("Could not select database");
?>
