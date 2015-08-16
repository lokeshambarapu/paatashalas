<?php
session_start();
include "connection.php";
									$classname2=$_POST['classname'];
									$section2=$_POST['section'];
									$rollno2=$_POST['rollno'];
									$remark2=$_POST['remark'];
									$date=$_POST['date'];
									$teachername=$_POST['teachername'];									
							
											
											echo "<script type='text/javascript'>alert('$teachername');</script>";
											$result=mysql_query("SELECT username,name from studetails where class='$classname2' and section='$section2' and rollno='$rollno2'") or die("cannot connect"); ;
											echo "<script type='text/javascript'>alert('$teachername $classname2 $section2 $rollno2');</script>";
											$row=mysql_fetch_array($result);
														$username=$row['username'];
														$name=$row['name'];
														
														mysql_query("INSERT INTO remarks (username, name, tname, date,remarks) VALUES ('$username', '$name', '$teachername', '$date', '$remark2')");
														header("Location:teacher_give_remarks.php");
										?>