<?php
	session_start(); // Starting Session
	$error=''; // Variable To Store Error Message
	if (isset($_POST['login_submit'])) 
	{
		if (empty($_POST['username']) || empty($_POST['password'])) 
		{
			$error = "Username or Password is invalid";
		}
		else
		{
			//echo "<script type='text/javascript'>alert('success');</script>";
			$username=$_POST['username'];
			$password=$_POST['password'];
					// Establishing Connection with Server by passing server_name, user_id and password as a parameter
			//$connection = mysql_connect("localhost", "root", "");
					// To protect MySQL injection for Security purpose
			$username = stripslashes($username);
			$password = stripslashes($password);
			$username = mysql_real_escape_string($username);
			$password = mysql_real_escape_string($password);
					// Selecting Database
			//$db = mysql_select_db("sample_school", $connection);
					// SQL query to fetch information of registerd users and finds user match.
			$query = mysql_query("select * from credentials where password='$password' AND username='$username'", $connection);
			$nrows = mysql_num_rows($query);
			$row = mysql_fetch_assoc($query); 
			if ($nrows == 1 && $row['type']=="student") 
			{
				$_SESSION['login_user']=$username; // Initializing Session
				header("location: student_home.php"); // Redirecting To Other Page
						//echo "<script type='text/javascript'>alert('$username');</script>";
			}
			else if ($nrows == 1 && $row['type']=="teacher") 
			{
				$_SESSION['login_user']=$username; // Initializing Session
				header("location: teacher_home.php"); // Redirecting To Other Page
					//	echo "<script type='text/javascript'>alert('$username');</script>";
			}
			else if ($nrows == 1 && $row['type']=="admin") {
				$_SESSION['login_user']=$username; // Initializing Session
				header("location: admin_home.php"); // Redirecting To Other Page
						//echo "<script type='text/javascript'>alert('$username');</script>";
			} 
			else 
			{
				$error = "Username or Password is invalid";
			}
			mysql_close($connection);
		}
	}
?>