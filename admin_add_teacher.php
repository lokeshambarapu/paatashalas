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
					<a href="admin_home.php" >Home</a><a> | </a><a href="logout.php" >Logout</a>
					</div>
				</div>
	       </div>
		</div>
</div>
<br/>
<div class="wrap">
	<div class="main">
		<center>
			<div id="addteacher" style="display:">
						<h2 id="heading"><font>Add Teacher</font></h2><br/>
<br/>

						<form action="admin_add_teacher_submit.php" method="POST">
							<table border="1" cellpadding="5" cellspacing="5" width="" style="background-color:#e0e0e0;">
								
								<tr><td>Full Name : </td><td colspan="3"><input type="text" name="name" size="60"></td></tr>
								<tr><td>User ID : </td><td colspan="3"><input type="text" name="uname" size="60"></td></tr>
								<tr><td>Designation : </td><td><input type="text" name="desig"></td></tr>
								<tr><td>Qualification : </td><td><input type="text" name="qual"></td>
										<td>Joining Date : </td><td><input type="date" name="doj"></td></tr>
								<tr><td>Experience : </td><td><input type="text" name="exp"></td>
										<td>DOB : </td><td><input type="date" name="dob"></td></tr>
								<tr><td>Subjects: </td><td colspan="3"><input type="text" name="subs" size="60"></td></tr>
								<tr><td>Gender : </td><td colspan="3"><input type="radio" name="gender" value="male" checked>Male  <input type="radio" name="gender" value="female">Female</td></tr>
								<tr><td>Phone no : </td><td colspan="3"><input type="text" name="phno" size="60"></td></tr>
								<tr><td>Email : </td><td colspan="3"><input type="text" name="email" size="60"></td></tr>
								<tr><td>Achievements : </td><td colspan="3"><textarea name="achievements" rows="2" cols="60"></textarea></td></tr>
						</table><br>
						<input type="Reset" value="Reset">
						<input type="submit" value="Submit" id="addstaffsubmit" name="addstaffsubmit">
						</form>
									
					</div>
					
						<?php
						if(isset($_GET['success']))
						{
							echo "<script>document.getElementById('addteacher').style.display='none';</script>";
							echo "<div id='afteraddstudent' style='display:;width:;float:center;margin-top:20px;'>
							<table align='center'>
								<tr>
									<td colspan='2'><h4 id='' style='color:CC00FF; float:left'><font size='5px'>Teacher Added Successfully</font></h4></td>
								
								</tr>
								
								<tr>
									<td><br/><br/><a href='admin_add_teacher.php'>Add Another Teacher</a></td>
									<td><br/><br/><a href='admin_home.php'>Go Home</a></td>
								</tr>
							</table>
							</div >";
						}
					?>
					
		</center>
	</div>
</div>
	
</body>
</html>
