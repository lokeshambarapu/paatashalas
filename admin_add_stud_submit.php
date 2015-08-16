<?php
include('session.php');
		$name = $_POST['name'];
		$fname = $_POST['fname'];
		$mname = $_POST['mname'];
		$admno = $_POST['admno'];
		$username = $_POST['username'];
		$doj = $_POST['doj'];
		$class = $_POST['class'];
		$section = $_POST['section'];
		$rno = $_POST['rno'];
		$dob = $_POST['dob'];
		$gender = $_POST['gender'];
		$phno = $_POST['phno'];
		$email = $_POST['email'];
		$address = $_POST['address'];
		
		if($admno!="" && $name!="" && $username!="")
		{
			echo "<script type='text/javascript'>alert('$admno');</script>";
			mysql_query("insert into studetails (username,name,fname,mname,addmissionno,doj,class,section,rollno,dob,gender,phno,email,address)
			values ('$username','$name','$fname','$mname','$admno','$doj','$class','$section','$rno','$dob','$gender','$phno','$email','$address')") or die("query failed");
			mysql_query("insert into credentials (username,password,type,name) values ('$admno','school','student','$name')") or die("query failed");
			
			mysql_query("insert into $class (addmissionno,name,section,examtype) values ('$admno','$name','$section','Assignment I')") or die("query failed");
			mysql_query("insert into $class (addmissionno,name,section,examtype) values ('$admno','$name','$section','Unit I')") or die("query failed");
			mysql_query("insert into $class (addmissionno,name,section,examtype) values ('$admno','$name','$section','Assignment II')") or die("query failed");
			mysql_query("insert into $class (addmissionno,name,section,examtype) values ('$admno','$name','$section','Unit II')") or die("query failed");
			mysql_query("insert into $class (addmissionno,name,section,examtype) values ('$admno','$name','$section','Assignment III')") or die("query failed");
			mysql_query("insert into $class (addmissionno,name,section,examtype) values ('$admno','$name','$section','Unit III')") or die("query failed");
			mysql_query("insert into $class (addmissionno,name,section,examtype) values ('$admno','$name','$section','Assignment IV')") or die("query failed");
			mysql_query("insert into $class (addmissionno,name,section,examtype) values ('$admno','$name','$section','Unit IV')") or die("query failed");
			mysql_query("insert into $class (addmissionno,name,section,examtype) values ('$admno','$name','$section','Quarterly')") or die("query failed");
			mysql_query("insert into $class (addmissionno,name,section,examtype) values ('$admno','$name','$section','Half-yearly')") or die("query failed");
			mysql_query("insert into $class (addmissionno,name,section,examtype) values ('$admno','$name','$section','Annual')") or die("query failed");
			header("Location:admin_add_stud.php?success=1");
		}
		header("Location:admin_add_stud.php");
		
?>