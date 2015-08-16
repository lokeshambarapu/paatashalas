<?php
	include('session.php');
		$name = $_POST['name'];
		$fname = $_POST['fname'];
		$mname = $_POST['mname'];
		$admno = $_POST['admno'];
		$doj = $_POST['doj'];
		$class = $_POST['class'];
		$section = $_POST['section'];
		$rno = $_POST['rno'];
		$dob = $_POST['dob'];
		$gender = $_POST['gender'];
		$phno = $_POST['phno'];
		$email = $_POST['email'];
		$address = $_POST['address'];
		
		
		if($admno!="" || $name!="")
		{
			
			mysql_query("delete from studetails where username='$admno'") or die("query failed");
			mysql_query("delete from credentials where username='$admno'") or die("query failed");
			
			mysql_query("insert into studetails (username,name,fname,mname,addmissionno,doj,class,section,rollno,dob,gender,phno,email,address)
			values ('$admno','$name','$fname','$mname','$admno','$doj','$class','$section','$rno','$dob','$gender','$phno','$email','$address')") or die("query failed");
			mysql_query("insert into credentials (username,password,type,name) values ('$admno','school','student','$name')");
			header("Location:admin_modify_stud.php?success=1");
			
		}
		else
			header("Location:admin_modify_stud.php");
		
?>