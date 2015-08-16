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
				<div id="faculty_info" style="align:;width:%;">
								<h2 id="heading">Details</h2>
									<table width="80%" align="center">
										<tr>
											<td align="left">
												<table cellpadding=10 cellspacing=1>
													<?php
														//session_start();
														//echo "index value is";
														
														$result=mysql_query("SELECT * FROM staff_info where username='$login_session'" );
														
														$row=mysql_fetch_array($result);
														echo "<tr>
																	<th id='radio_box'>Name </th><td> ".$row['fname']."</td>
																	</tr>";
																	echo "<tr>
																	<th id='radio_box'>Designation </th><td> ".$row['designation']."</td>
																	</tr>";
																	echo "<tr>
																	<th id='radio_box'>Qualification </th><td> ".$row['qualification']."</td>
																	</tr>";
																	echo "<tr>
																	<th id='radio_box'>Experience </th><td> ".$row['experience']."</td>
																	</tr>";
																	echo "<tr>
																	<th id='radio_box'>Subjects </th><td> ".$row['subjects']."</td>
																	</tr>";
																	echo "<tr>
																	<th id='radio_box'>Email </th><td> ".$row['email']."</td>
																	</tr>";
																	echo "<tr>
																	<th id='radio_box'>Phone no</th><td> ".$row['phno']."</td>
																	</tr>";
																	echo "<tr>
																	<th id='radio_box'>Achievements :</th><td> ".$row['achievements']."</td>
																	</tr>";
													?>
												</table>
											</td>
											<td>
												<img id="staffimage" src="images/msd.jpg" alt=""></img>
											</td>
										</tr>
									
									
									
									</table>
							</div>
	</div>
</div>
	<?php 
	include("footer.html");
	?>
</body>
</html>
