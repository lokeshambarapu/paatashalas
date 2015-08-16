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
			<div id="deletestud" style="display:">
						<h3 id="heading"><font>Enter Username to Delete</font></h3><br/><br/>
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
									//echo "<script>document.getElementById('deletestud').style.display='none';</script>";
									$deleteadmno=$_POST['uname'];
									 
									$query = mysql_query("select * from studetails where username='$deleteadmno'");
									$nrows = mysql_num_rows($query);
									$row=mysql_fetch_array($query);
									$class=$row['class'];
									echo "<script>alert('$class');</script>";
									if($deleteadmno!="" && $nrows==1)
									{
										
										mysql_query("delete from studetails where username='$deleteadmno'") or die("query failed");
										mysql_query("delete from credentials where username='$deleteadmno'") or die("query failed");
										mysql_query("delete from $class where addmissionno='$deleteadmno'") or die("query failed class");
										echo "<script>document.getElementById('deletestud').style.display='none';</script>";
										echo "<div id='afterdeletestudent' style='display:;width:;float:center;margin-top:20px;'>
										<table align='center'>
											<tr>
												<td colspan='2'><h4 id='' style='color:CC00FF; float:left'><font size='5px'>Student Deleted Successfully</font></h4></td>
											
											</tr>
											
											<tr>
												<td><br/><br/><a href='admin_delete_stud.php'>Delete Another Student</a></td>
												<td><br/><br/><a href='admin_home.php'>Go Home</a></td>
											</tr>
										</table>
										</div >";
										
									}
									else {
										echo "<script>alert('Cannot delete specified user or user not found');</script>";
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
