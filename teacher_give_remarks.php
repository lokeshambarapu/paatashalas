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
					<a href="teacher_home.php" >Home</a><a> | </a><a href="logout.php" >Logout</a>
					</div>
				</div>
	       </div>
		</div>
</div>
<br/>

<div class="wrap">
	<div class="main">
			<div id="give_remarks" style="display:">
								<h2 id="heading"><font >Give Remarks</font></h2><br/><br/>
								<form id="remarks" method="post" action="teacher_give_remarks_insert.php">
								<table width="%" align="center" cellpadding="5" cellspacing="5" style="background-color:;">
									<tr>
										<td>Enter Class : </td>
										<td>
											<select name="classname" id="class_name_view">
											<option value="default">select classname</option>
											  <option value="fifth">V th Class</option>
											  <option value="sixth">VI th Class</option>
											  <option value="seventh">VII th Class</option>
											  <option value="eighth">VIII th Class</option>
											  <option value="ninth">IX th Class</option>
											  <option value="tenth">X th Class</option>n>
											</select>
										</td>
									</tr>
									<tr>
										<td>Enter Section : </td>
										<td>
											<select name="section" id="section_name_view">
											<option value="default">select section</option>
											  <option value="A">Section A</option>
											  <option value="B">Section B</option>
											  <option value="C">Section C</option>
											  <option value="D">Section D</option>
											</select>
										</td>
									</tr>
									<tr>
										<td>Enter Roll No : </td>
										<td>
											<input type="text" name="rollno" />
										</td>
									</tr>
									<tr>
										<td>Enter Remarks : </td>
										<td>
										<textarea id="" size=" rows="1.5" cols="48" name="remark"/></textarea>
										</td>
									</tr>
									<tr>
										<td>Enter Date : </td>
										<td>
										<input type="date"  name="date"/></textarea>
										</td>
									</tr>
									<tr>

										<td>
										<?php
											$result=mysql_query("SELECT fname FROM staff_info where username='$login_session'");
											while($roww=mysql_fetch_array($result))
											{
												echo "<input name='teachername' id='teachername' type='hidden' value='".$roww['fname']."'>";
											}
										?>
										</td>
									</tr>
								</table>
								<center><input id="subpid" type="submit" name="teacher" value="Submit" onclick="update_marks_form()"style="background-color:lightgreen" /></center>
								</form>
								<hr color="#E0E0E0">
							</div>
	</div>
</div>
	<?php 
	include("footer.html");
	?>
</body>
</html>
