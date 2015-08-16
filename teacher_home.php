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
					<a href="logout.php" >Logout</a>
					</div>
				</div>
	       </div>
		</div>
</div>
<br/>
<div id="table"> 
		<table style="width:100%" cellspacing=20>
			<tr>
				<td width="20%"><div style="background-color: #00d4d6;" class="tiles"><span class="nspan"><a href="teacher_view_details.php">View Details</a></span></div></td>
				<td width="20%"><div style="background-color: #014d60" class="tiles"><span class="nspan"><a href="teacher_update_marks.php">Update Marks</a></span></div></td>
				<td width="30%"><div style="background-color: #337da5" class="tiles1"><span class="nspan"><a href="#">Upload class Material</a></span></div></td>
			</tr>
			<tr>
				<td width="20%" ><div style="background-color: #ff88a9" class="tiles"><span class="nspan"><a href="teacher_give_remarks.php">Give Remarks</a></span></div></td>
				<td width="20%"><div style="background-color: #83ba3a" class="tiles"><span class="nspan"><a href="teacher_view_marks.php">View Marks</a></span></td>
				<td width="30%"><div style="background-color: #9e0e0e" class="tiles1"><span class="nspan"><a href="#">Notifications</a></span></div></td>
			</tr>
		</table>
</div>	
<div class="wrap">
	<div class="main">
			
	</div>
</div>
	<?php 
	include("footer.html");
	?>
</body>
</html>
 