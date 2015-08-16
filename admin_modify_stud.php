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
			<div id="modifystudinfo" style="display:">
						<h3 id="heading"><font>Enter Username</font></h3><br/><br/>
						<form action="" method="POST">
							<table border="1" cellpadding="5" cellspacing="5" width="" style="background-color:#e0e0e0;">
								<tr><td>Username : </td><td colspan="3"><input type="text" name="uname" size="60"></td>
									<td><input type="submit" value="Submit" id="submit" name="submit"></td>
								</tr>
							</table>
						</form>
					
			</div>
			<div id="studmodifyform" style="display:">
						<center>
							<div style="width:95%;">
								
								
								
								
								<?php
									if(isset($_POST['uname']))
									{
									$modifyadmno=$_POST['uname'];
									$result=mysql_query("SELECT * FROM studetails where username='$modifyadmno'");
									while($row=mysql_fetch_array($result))
									{
										echo "<form action='admin_modify_stud_submit.php' method='POST'>
											<table border='1' cellpadding='5' cellspacing='5' width='' style='background-color:#e0e0e0;'>
												
												<tr><td>Full Name : </td><td colspan='3'><input type='text' name='name' size='60' value='".$row['name']."'></td></tr>
												<tr><td>Father's Name : </td><td colspan='3'><input type='text' name='fname' size='60' value='".$row['fname']."'></td></tr>
												<tr><td>Mother's Name : </td><td colspan='3'><input type='text' name='mname' size='60' value='".$row['mname']."'></td></tr>
												<tr><td>Admission no* : </td><td><input type='text' name='admno' value='".$row['addmissionno']."'></td>
														<td>Joining Date : </td><td><input type='date' name='doj' value='".$row['doj']."'></td></tr>
												<tr><td>Class : </td><td><select name='class'>
													<option value='default'>Select Class</option>
													<option value='fifth'>5</option>
													<option value='sixth'>6</option>
													<option value='seventh'>7</option>
													<option value='eighth'>8</option>
													<option value='ninth'>9</option>
													<option value='tenth'>10</option>
												</select></td>
												<td>Section : </td><td><select name='section'>
							 						<option value='default'>Select Section</option>
													<option value='A'>A</option>
													<option value='B'>B</option>
													<option value='C'>C</option>
												</select></td></tr>
										<tr><td>Roll No : </td><td><input type='text' name='rno' value='".$row['rollno']."'></td>
										<td>DOB : </td><td><input type='date' name='dob' value='".$row['dob']."'></td></tr>
										<tr><td>Gender : </td><td colspan='3'><input type='radio' name='gender' value='male' checked>Male  <input type='radio' name='gender' value='female'>Female</td></tr>
										<tr><td>Parent's Phone no : </td><td colspan='3'><input type='text' name='phno' size='60' value='".$row['phno']."'></td></tr>
										<tr><td>Parent's Email : </td><td colspan='3'><input type='text' name='email' size='60' value='".$row['email']."'></td></tr>
										<tr><td>Address : </td><td colspan='3'><textarea name='address' rows='2' cols='60'>".$row['address']."</textarea></td></tr>
										</table><br>
										<input type='Reset' value='Reset'>
										<input type='submit' value='Submit' id='modifysubmit' name='modifysubmit'>
										</form>";
									}
									}
								?>
							</div>
							<div>
								<?php
						if(isset($_GET['success']))
						{
							echo "<script>document.getElementById('modifystudinfo').style.display='none';</script>";
							echo "<div id='afteraddstudent' style='display:;width:;float:center;margin-top:20px;'>
							<table align='center'>
								<tr>
									<td colspan='2'><h4 id='' style='color:CC00FF; float:left'><font size='5px'>Student Modified Successfully</font></h4></td>
								
								</tr>
								
								<tr>
									<td><br/><br/><a href='admin_modify_stud.php'>Modify Another Student</a></td>
									<td><br/><br/><a href='admin_home.php'>Go Home</a></td>
								</tr>
							</table>
							</div >";
						}
					?>
							</div>
						</center>
					</div>
		</center>
	</div>
</div>
	
</body>
</html>
