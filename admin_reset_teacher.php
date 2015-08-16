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
			<div id="resetpassinfo" style="display:">
						<h3 id="heading"><font>Enter Username to Reset Password</font></h3><br/><br/>
						<form action="" method="POST">
							<table border="1" cellpadding="5" cellspacing="5" width="" style="background-color:#e0e0e0;">
								<tr><td>Username : </td><td colspan="3"><input type="text" name="uname" size="60"></td>
									<td><input type="submit" value="Submit" id="submit" name="submit"></td>
								</tr>
							</table>
						</form>
					
			</div>
			<?php
				if (isset($_POST['uname'])) 
				{
					$resetadmno = $_POST['uname'];
					
					$query = mysql_query("select * from credentials where username='$resetadmno'");
					$nrows = mysql_num_rows($query);
					if($resetadmno!="" && $nrows==1)
					{
						
						mysql_query("update credentials set password='teacher' where username='$resetadmno'");
						
						echo "<script>document.getElementById('resetpassinfo').style.display='none';</script>";
							echo "<div id='afteraddstudent' style='display:;width:;float:center;margin-top:20px;'>
							<table align='center'>
								<tr>
									<td colspan='2'><h4 id='' style='color:CC00FF; float:left'><font size='5px'>Successfully Teacher Password got Reset</font></h4></td>
								
								</tr>
								
								<tr>
									<td><br/><br/><a href='admin_reset_teacher.php'>Reset Another Teacher</a></td>
									<td><br/><br/><a href='admin_home.php'>Go Home</a></td>
								</tr>
							</table>
							</div >";
					}
					else
					{			
						
						echo "<script type='text/javascript'>alert('username incorrect');</script>";
						
					}
				}
				?>	
		</center>
	</div>
</div>
	
</body>
</html>
