<?php
	session_start();
	include "paa_connection.php";
	header("Cache-Control: no-cache, must-revalidate");
	$classname=$_SESSION['classname'];
	$section=$_SESSION['section'];
	$subject=$_SESSION['subject'];
	$examtype=$_SESSION['examtype'];
	$cnt=$_SESSION['cnt'];
	$k=1;
	while($k<=$cnt)
	{
		echo $classname;
		echo $section;
		echo $subject;
		echo $examtype;
	
		$admno=$_POST['admno'][$k];
		$sname=$_POST['sname'][$k];
		$total=$_POST['total'][$k];
		$secured=$_POST['secured'][$k];
		
		echo $admno;
		echo $secured;
		
		$query3=mysql_query("UPDATE  $classname SET $subject='$secured' where addmissionno='$admno' and examtype='$examtype'");
			$k++;
		}
		header("Location:teacher_update_marks.php");
?>