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
					<li class="active"><a href="faculty.php">Faculty</a></li>
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
      
	
	<div id="faculty_info" style="align:;width:%;">
								<h2 id="heading">Faculty Details</h2>
									<table width="80%" align="center">
										<tr>
											<td align="left">
												<table cellpadding=10 cellspacing=1>
													<?php
														//session_start();
														//echo "index value is";
														$index=$_GET['index'];
														$cnt=1;
														$result=mysql_query("SELECT * FROM staff_info " );
														while($cnt<$index)
														{
															$row=mysql_fetch_array($result);
															$cnt++;
														}
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
