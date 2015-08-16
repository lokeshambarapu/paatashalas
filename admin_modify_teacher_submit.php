<?php
	include('session.php');
		$name = $_POST['name'];
		$uname = $_POST['uname'];
		$qual = $_POST['qual'];
		$desig = $_POST['desig'];
		$doj = $_POST['doj'];
		$exp = $_POST['exp'];
		$dob = $_POST['dob'];
		$subs = $_POST['subs'];
		$gender = $_POST['gender'];
		$phno = $_POST['phno'];
		$email = $_POST['email'];
		$achievements = $_POST['achievements'];
		
	
		if($uname!="" || $name!="")
		{
			echo "<script type='text/javascript'>alert('$uname');</script>";
			mysql_query("delete from staff_info where username='$uname'") or die("query failed");
			mysql_query("delete from credentials where username='$uname'") or die("query failed");
			
			mysql_query("insert into staff_info (username,fname,designation,qualification,experience,doj,dob,subjects,gender,email,phno,achievements)
			values ('$uname','$name','$desig','$qual','$exp','$doj','$dob','$subs','$gender','$email','$phno','$achievements')") or die("query failed");
			mysql_query("insert into credentials (username,password,type,name) values ('$uname','staffpass','teacher','$name')") or die("query failed");
			//echo "<script type='text/javascript'>alert('$error');</script>";
			header("Location:admin_modify_teacher.php?success=1");
		}
		else
			header("Location:admin_modify_teacher.php");
		

?>