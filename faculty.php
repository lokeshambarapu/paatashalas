<?php 
session_start();
include "paa_connection.php";
 ?>
<html>
<head>
<title>Template 1</title>
<link href="css/style1.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/slider.css" rel="stylesheet" type="text/css" media="all"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


		  
		  
<script type="text/javascript" src="js1/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="js1/jquery.nivo.slider.js"></script>
<script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
<!--light-box-->

</head>
<body>
<div class="header">
	<div class="wrap">
		<div class="header-top">
			<div class="logo">
				<a href="index.html"><img src="images/ps1.png"   alt=""/></a>
				
						<!--<font face="verdana" size="100px" color="white">Sample School</font>-->
					
				
			</div>
			
			<div class="clear"></div>
		</div>
	</div>
	<div class="menu">
		<div class="wrap">
			<div class="top-nav">
			      <ul class="nav">
		            <li><a href="index.php">Home</a></li>
					<li class="active"><a href="">Faculty</a></li>
					<li><a href="">Events</a></li>
					<li><a href="admission.html">Admission</a></li>
					<li><a href="">Sports</a></li>
					<li><a href="rules.html">Rules</a></li>
					<li><a href="gallery.html">Gallery</a></li>
					<li><a href="login.html">Login</a></li>
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
</div>
      
	
	<div id="imgdiv">
								<h2 id="heading1"><font>Faculty Details</font></h2>
									<table id="faculty_tb" align="center">
										<tr>
											<th>S.no</th><th>Name</th><th>Designation</th><th>Qualification</th><th>Experience</th>
										</tr>
										<tr>
											<?php
												$result=mysql_query("SELECT * FROM staff_info");
												$i=1;
												while($row=mysql_fetch_array($result))
												{
														
														echo "<tr>
														<td> ".$row['sno']."</td><td> <p><a id='fname['$i']' href='#' onclick='faculty_info($i)'>".$row['fname']."</a></p></td><td> ".$row['designation']."</td><td> ".$row['qualification']."</td><td> ".$row['experience']."</td>
														</tr>";	
														$i++;
												}
											?>
										</tr>	
									</table> 
								</div>
	
	
	
	
	
	
	<div class="footer">
			<div class="wrap">
			<div class="footer-grids">
				
				
				<div class="footer-grid footer-lastgrid">
					<h3>CONTACT US</h3>
					<div class="footer-grid-address">
						<p>Tel.8143697499</p>
						<p>Email:<a class="email-link" href="#">contact@paatashalas.com</a></p>
					</div>
				</div>
				<div class="clear"> </div>
			</div>
			
		</div>
	</div>
</body>
<script type="">
   
function faculty_info(v)
	{	
		window.location.href="faculty_display.php?index="+v;
	}
	
</script>
</html>
