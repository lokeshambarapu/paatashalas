<?php
session_start();
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysql_connect("localhost", "root", "");
// Selecting Database
$db = mysql_select_db("sample_school", $connection);
// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
//echo "<script type='text/javascript'>alert('$user_check');</script>";
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysql_query("select username,name from credentials where username='$user_check'", $connection);
$row = mysql_fetch_assoc($ses_sql);
$login_session =$row['username'];
$login_session_name =$row['name'];
//echo "<script type='text/javascript'>alert('$login_session');</script>";
$error='';
if(!isset($login_session)){
	mysql_close($connection); // Closing Connection
	//echo "<script type='text/javascript'>alert('$login_session');</script>";
	header('Location: login.php'); // Redirecting To Home Page
}
?>