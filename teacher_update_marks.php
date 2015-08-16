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
			<div id="update_marks" style="display:">
								<h2 id="heading"><font >Update Marks</font></h2><br/>
<br/>

								<form id="myform" method="post" action="teacher_update_marks_list.php">
								<table width="%" align="center" cellpadding="5" cellspacing="5" style="background-color:;">
									<tr>
										<td>Enter Class : </td>
										<td>
											<select name="classname" id="class_name">
											<option value="default">select classname</option>
											  <option value="fifth">V th Class</option>
											  <option value="sixth">VI th Class</option>
											  <option value="seventh">VII th Class</option>
											  <option value="eighth">VIII th Class</option>
											  <option value="ninth">IX th Class</option>
											  <option value="tenth">X th Class</option>
											</select>
										</td>
									</tr>
									<tr>
										<td>Enter Section : </td>
										<td>
											<select name="section" id="section_name">
											<option value="default">select section</option>
											  <option value="A">Section A</option>
											  <option value="B">Section B</option>
											  <option value="C">Section C</option>
											  <option value="D">Section D</option>
											</select>
										</td>
									</tr>
									<tr>
										<td>Enter Subject : </td>
										<td>
											<select name="subject" id="subject_name">
											<option value="default">select subject</option>
											  <option value="language1">Language I</option>
											  <option value="language2">Language II</option>
											  <option value="language3">Language III</option>
											  <option value="maths">Mathematics</option>
											  <option value="science">Science</option>
											  <option value="social">Social</option>
											</select>
										</td>
									</tr>
									<tr>
										<td>Enter Exam Type : </td>
										<td>
											<select name="examtype" id="exam_name" onchange="checkandsubmit()">
											<option value="default">select exam type</option>
											  
											  <option value="Assignment I">Assignment I</option>
											  <option value="Unit I">Unit I</option>
											  <option value="Assignment II">Assignment II</option>
											  <option value="Unit II">Unit II</option>
											  <option value="Assignment III">Assignment III</option>
											  <option value="Unit III">Unit III</option>
											  <option value="Assignment IV">Assignment IV</option>
											  <option value="Unit IV">Unit IV</option>
											  <option value="Quarterly">Quarterly</option>
											  <option value="Half-yearly">Half-yearly</option>
											  <option value="Annual">Annual</option>
											</select>
										</td>
									</tr>	
								</table>
								</form>
								<hr color="#E0E0E0">
								<!--<center><input id="subpid" type="submit" name="teacher" value="Submit" onclick="update_marks_form()"style="background-color:lightgreen" /></center>-->
							</div>
	</div>
</div>
	<?php 
	include("footer.html");
	?>
</body>
</html>
