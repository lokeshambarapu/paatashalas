 <?php 
include('session.php');
	
 ?>
 <!DOCTYPE HTML>
<html>
<head>
<title>template1</title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<script>
function checkandsubmit()
		{
			if(document.getElementById('class_name').value != "default")
			{
				if(document.getElementById('section_name').value != "default")
				{
					if(document.getElementById('subject_name').value != "default")
					{
						if(document.getElementById('exam_name').value != "default")
						{
							document.forms["myform"].submit();
						}
						else
						{
							alert("Select exam type correctly");
						}
						
					}
					else
					{
						alert("Select subject name correctly");
					}
				}
				else
				{
					alert("Select section name correctly");
				}
			}
			else
			{
				alert("Select class name correctly");
			}
		}
</script>
</head>
<body>

<div class="header">
		<?php 
			include("head_logo.html");
		?>
		<div class="menu">
			<div class="wrap">
				<div class="user_head">
					<div>
					<label>Welcome : <?php	echo $login_session_name;?> </label>
					<a href="teacher_home.php" >Home</a><a> | </a><a href="logout.php" >Logout</a>
					</div>
				</div>
	       </div>
		</div>
</div>
<br/>

<div class="wrap">
	<div class="main">
			<div id="update_marks_form" style="display:">
								<h2 id="heading"><font >Update Marks</font></h2><br/><br/>
								<?php
									$_SESSION['classname']=$_POST['classname'];
									$_SESSION['section']=$_POST['section'];
									$_SESSION['subject']=$_POST['subject'];
									$_SESSION['examtype']=$_POST['examtype'];
									
								?>
								<center>
								<table width="30%" cellpadding="5" cellspacing="5" border="1" ><tr>
								<td id="radio_box">Class name : <?php echo $_SESSION['classname']?></td>
								<td id="radio_box">Section : <?php echo $_SESSION['section'];?></td></tr>
								<tr><td id="radio_box">Subject  :<?php echo $_SESSION['subject'];?></td>
								<td id="radio_box">Exam type  : <?php echo $_SESSION['examtype'];?>	</td></tr></table></br></br>							
								
										<?php
											$classname2=$_SESSION['classname'];
											$section2=$_SESSION['section'];
											$subject2=$_SESSION['subject'];
											$examtype2=$_SESSION['examtype'];
											$i=1;
											$query="SELECT * from studetails where class='$classname2' && section='$section2'";
											$result1=mysql_query($query);
											
											echo "<form action='updatemarks.php' method='post'>";
											echo "<table id='add_individual' width='80%' class='imagetable' cellpadding=10 cellspacing=5 border='1' background-color:white>
											<tr>
												<th style='background-color:#E8E8E8'>S.No</th>
												<th style='background-color:#E8E8E8'>Roll no</th>
												<th style='background-color:#E8E8E8'>Names</th>
												<th style='background-color:#E8E8E8'>Total</th>
												<th style='background-color:#E8E8E8' width='20%'>Secured</th>
												
											</tr>";
											while($row=mysql_fetch_array($result1))
												{
													echo"
														<tr>
														<td>".$i."</td>
														<td id='textfield'>".$row['addmissionno']."<input type='hidden' name='admno[$i]' value=".$row['addmissionno']." > </td>
														<td id='textfield'>".$row['name']."<input type='hidden' name='sname[$i]' value=".$row['name']." ></td>
														<td id='textfield'>100<input type='hidden' name='total[$i]' value='100' />  </td>
														<td id='textfield'><input type='text' name='secured[$i]' />  </td>
														
														
														</tr>";
														$i++;
												}
												echo "<td colspan='6' style='text-align:center'><input id='subpid' type='submit' name='submit' value='Update' style='background-color:lightgreen' /></td>
												</table> </center>";
											
											//else
											{
											
											}
											$_SESSION['cnt']=--$i;
									
											echo "</div></form>";
										?>
									
								
								</center>
							</div>
							
	</div>
</div>
	<?php 
	include("footer.html");
	?>
</body>
</html>
