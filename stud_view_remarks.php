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
		<div id="view_remarks" style="display:"><!--view info-->
							<center>
							<div style="width:95%;">
										<h2><font color="black" >Remarks Info</h2>
									<table width="80%" align="center" cellpadding="10" cellspacing="" style="background-color:;" border="">
									<tr>
											<th id='radio_box'> Teacher Name</th>
											<th id='radio_box'>Date</th>
											<th id='radio_box'>Remarks</th>
									</tr>
									<?php
									$result=mysql_query("SELECT * FROM remarks where username='$login_session'");
									while($row=mysql_fetch_array($result))
									{
											echo "<tr>
											<td>".$row['tname']."</td>
											<td>".$row['date']."</td>
											<td>".$row['remarks']."</td>
											</tr>";
									}
									?>
									</table>
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
