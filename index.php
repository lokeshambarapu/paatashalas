<?php
session_start();
include "connection_hm.php";
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
		            <li class="active"><a href="index.php">Home</a></li>
					<li><a href="faculty.php">Faculty</a></li>
					<li><a href="">Events</a></li>
					<li><a href="admission.html">Admission</a></li>
					<li><a href="">Sports</a></li>
					<li><a href="rules.html">Rules</a></li>
					<li><a href="gallery.html">Gallery</a></li>
					<li><a href="login.php">Login</a></li>
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
      

	<div class="slider">
		  	<div class="wrap">
	      	 <div class="slider-wrapper theme-default">
	            <div id="slider" class="nivoSlider">
	                <img src="images/10.jpg" alt="" />
	                <img src="images/1.jpg" alt="" />
	                <img src="images/3.jpg" alt="" />
	                <img src="images/4.jpg" alt="" />
	                <img src="images/5.jpg" alt="" />
					
	            </div>
				
	        </div>
			
	        </div>
			
   	</div>
	
	<div class="one-fourth">
		<div class="tab_container">
            <div style="width:100%;height:160px;">
            <center><h3 class="thought_text" style="overflow: hidden;text-overflow: ellipsis;color:blue">Thought for the Day</h3></center>
			<?php
												$day = date("d");
												$thought=$day%10;
												$result=mysql_query("select text,author from thoughtforday where seqno='$thought'");
												$row=mysql_fetch_array($result);
												echo"</br>";
													echo "<p>".$row['text']."</p>";
													echo"</br>";
													echo "<p align='right'><b>".$row['author']."</b></p></b>";
													
												?>
			</div>			
		</div>	  
	</div>
		<div class="one-fourth">
		<div class="tab_container1">
            <div style="width:;heigh:px;">
            <center><h3 style="overflow: hidden;text-overflow: ellipsis;color:blue">News & Updates </h3></center>
						<marquee color="red" onmouseover="this.stop();" onmouseout="this.start();" scrollAmount="2" direction="up" loop="true" width="" height="142">
								<?php
													
									$result=mysql_query("select * from newsandupdates;");
										while($row=mysql_fetch_array($result))
											{
												echo "<img src='images/new1.gif'><a style='color:black' href='".$row['newslink']."'>".$row['news']."</a><br></br>";
											}
								?>
						</marquee>
			</div>
		</div>		  
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
</html>
