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
					<a href="student_home.php" >Home</a><a> | </a><a href="logout.php" >Logout</a>
					</div>
				</div>
	       </div>
		</div>
</div>
<br/>

<div class="wrap">
	<div class="main">
								<div class="box" id="viewinfo" style="display:;"><!--view info-->
							<center>
							<div style="width:95%;">
								
								<div class="box-header"><h2><font color="black" >General Details</h2></div>
								
								<div class="box-body"><table width="100%" align="" cellpadding="10" cellspacing=""  >
								<?php
								$result=mysql_query("SELECT * FROM studetails where username='$login_session'");
								while($row=mysql_fetch_array($result))
								{
										echo "<tr>
										<th>Student Name :</th><td> ".$row['name']."</td>
										<th>Roll No :</th><td> ".$row['rollno']."</td>
										</tr>";
										echo "<tr>
										<th>Addmission no :</th><td> ".$row['addmissionno']."</td>
										<th>Date of Birth :</th><td> ".$row['dob']."</td>
										</tr>";
										echo "<tr>
										<th>Gender :</th><td> ".$row['gender']."</td>
										<th>Father Name :</th><td> ".$row['fname']."</td>
										</tr>";
										echo "<tr>
										<th>Mother Name :</th><td> ".$row['mname']."</td>
										<th>Parent Phone No #:</th><td> ".$row['phno']."</td>
										</tr>";
										echo "<tr >
										<th>Address:</th><td colspan='3'> ".$row['address']."</td>
										</tr>";
										
								}
								?>
								</table></div>
							</div>
							</center>
						</div>
	</div>
</div>
	<?php 
	include("footer.html");
	?>
</body>
</html>
