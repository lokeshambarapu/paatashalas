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
			<div id="viewstudinfo" style="display:">
						<h3 id="heading"><font>Enter Username</font></h3><br/><br/>
						<form action="" method="POST">
							<table border="1" cellpadding="5" cellspacing="5" width="" style="background-color:#e0e0e0;">
								<tr><td>Username : </td><td colspan="3"><input type="text" name="uname" size="60"></td>
									<td><input type="submit" value="Submit" id="submit" name="submit"></td>
								</tr>
							</table>
						</form>
					
					</div>
			<div id="viewstudinfodetails" style="display:">
							
							<div style='width:95%;>
							<?php	
								$count=0;
								if(isset($_POST['submit']))
								{ 
									$username=$_POST['uname'];
									
									$result=mysql_query("SELECT * FROM studetails where username='$username'") or die("not found");
									echo "<script>alert('$result')</script>";
									while($row=mysql_fetch_array($result))
									{
										echo "<h2><font color='black'></h2><br/><br/>";
								
										echo "<table width='100%' align='center' cellpadding='5' cellspacing='5' border='5'>";
										$test=$row['name'];
										//echo "<script>alert('$test')</script>";
										echo "<tr>
										<th id='radio_box'>Name :</th><td> ".$row['name']."</td>
										<th id='radio_box'>Roll No :</th><td> ".$row['rollno']."</td>
										</tr>";
										echo "<tr>
										<th id='radio_box'>Addmission no :</th><td> ".$row['addmissionno']."</td>
										<th id='radio_box'>Date of Birth :</th><td> ".$row['dob']."</td>
										</tr>";
										echo "<tr>
										<th id='radio_box'>Gender :</th><td> ".$row['gender']."</td>
										<th id='radio_box'>Father Name :</th><td> ".$row['fname']."</td>
										</tr>";
										echo "<tr>
										<th id='radio_box'>Mother Name #:</th><td> ".$row['mname']."</td>
										<th id='radio_box'>Parent Phone No #:</th><td> ".$row['phno']."</td>
										</tr>";
										echo "<tr>
										<th id='radio_box'>Address:</th><td colspan='3'> ".$row['address']."</td>
										</tr>";
										$count++;
										echo "</table>";
										
									}
									//echo "<script>alert('$count')</script>";
									if($count==0)
									{
										echo "<script>alert('Enter a valid username')</script>";
									}
								}
								
								?>
								
							</div>
						
					</div>
					</center>
	</div>
</div>
	
</body>
</html>
