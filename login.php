<?php 
	include("connection.php");
	include("login_process.php");
	
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
			<div class="top-nav">
			      <ul class="nav">
		            <li ><a href="index.php">Home</a></li>
					<li><a href="faculty.php">Faculty</a></li>
					<li><a href="">Events</a></li>
					<li><a href="admission.html">Admission</a></li>
					<li><a href="">Sports</a></li>
					<li><a href="rules.html">Rules</a></li>
					<li><a href="gallery.html">Gallery</a></li>
					<li class="active"><a href="login.php">Login</a></li>
					<li><a href="about.html">About</a></li>
					<li><a href="contact.html">Contact</a></li>
					<div class="clear"></div>
				 </ul>
				  <div class="search">
				    		<form>
				    			<input type="text" value="">
				    			<input type="submit" value="">
				    		</form>
					</div>
					<div class="clear"></div>
			</div>
	</div>
</div>
<div class="wrap">
	<div class="main">
		<form method="post" action="">
					
					<div class="login-form">
					    	<div>
								<span id="login_error"><?php echo $error; ?></span>
						    	<span><label style="color:white;">Username</label></span>
						    	<span><input id="username" type="text" name="username" placeholder="USERNAME" /></span>
						    </div>
						    <div>
						    	<span><label style="color:white;">Password</label></span>
						    	<span>
								<input id="password" type="password" name="password" placeholder="********"/></span>
						    </div>
							<div>
						   		<span><input type="submit" id="login_submit" name="login_submit" value="Login" </span>
						  </div>
					</div>	  
		</form>
			
	</div>
</div>
	<?php 
	include("footer.html");
	?>
</body>
</html>
