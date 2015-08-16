<?php
//session_start();
//include "connection.php";
?>
<html>
<head>
<title>Template 1</title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
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
				<!--<a href="index.html"><img src="images/" width="100px" height="90px" alt=""/></a>-->
				
						<font face="verdana" size="100px" color="white">Sample School</font>
					
				
			</div>
			
			<div class="clear"></div>
		</div>
	</div>
	<div class="menu">
		<div class="wrap">
			<div class="top-nav">
			      <ul class="nav">
		            <li class="active"><a href="index.php">Home</a></li>
					<li><a href="login.html">Login</a></li>
					<li><a href="">Gallery</a></li>
					<li><a href="">Faculty</a></li>
					<li><a href="">About</a></li>
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
	                <img src="images/2.jpg" alt="" />
	                <img src="images/1.jpg" alt="" />
	                <img src="images/3.jpg" alt="" />
	                <img src="images/4.jpg" alt="" />
	                <img src="images/5.jpg" alt="" />
	            </div>
	        </div>
	        </div>
   	</div>
	
	<!--<div class="thought">
		<center><h3 class="thhead">Thought for the day</h3></center>									
			<?php
				$day = date("d");
				$thought=$day%10;
				$result=mysql_query("select text,author from thoughtforday where seqno='$thought'");
				$row=mysql_fetch_array($result);
				echo "<p>".$row['text']."</p>";
				echo "<p align='right'><strong>".$row['author']."</strong></p>";	
			?>
	</div>-->
	
	
	
	
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
