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
	<center>
		<div id="feedback" style="display:">
						   <h2><font color="black" >Feedback Form</h2>
						   <table width="%" align="center" cellpadding="5" cellspacing="" style="background-color:;" border="">
								<tr class="top bottom row">		
									<th width="150px" height="30px"></th>
									<th width="100px" height="50px">Very Good</th>
									<th width="100px" height="30px">Good</th>
									<th width="100px" height="30px">Fair</th>
									<th width="100px" height="30px">Poor</th>
									<th width="100px" height="30px">Very Poor</th>
									
								</tr>
								<tr class="top bottom row">
									<td>Level of effort you</br> put into</br> the course</td>
									<td id="radio_box" ><input type="radio" name="radio1" value="male"><br></td>
									<td align="center"><input type="radio" name="radio1" value="male"><br></td>
									<td id="radio_box"><input type="radio" name="radio1" value="male"><br></td>
									<td align="center"><input type="radio" name="radio1" value="male"><br></td>
									<td id="radio_box"><input type="radio" name="radio1" value="male"><br></td>
								</tr>
								<tr class="top bottom row">
									<td>Level of effort teachers </br> put into</br> the course</td>
									<td id="radio_box" ><input type="radio" name="radio2" value="male"><br></td>
									<td align="center"><input type="radio" name="radio2" value="male"><br></td>
									<td id="radio_box"><input type="radio" name="radio2" value="male"><br></td>
									<td align="center"><input type="radio" name="radio2" value="male"><br></td>
									<td id="radio_box"><input type="radio" name="radio2" value="male"><br></td>
								</tr>
								<tr class="top bottom row">
									<td>Extra curricular</br> activities</td>
									<td id="radio_box" ><input type="radio" name="radio3" value="male"><br></td>
									<td align="center"><input type="radio" name="radio3" value="male"><br></td>
									<td id="radio_box"><input type="radio" name="radio3" value="male"><br></td>
									<td align="center"><input type="radio" name="radio3" value="male"><br></td>
									<td id="radio_box"><input type="radio" name="radio3" value="male"><br></td>
								</tr>
								<tr class="top bottom row">
									<td>materials and</br> examples</br> provided</br> </br></td>
									<td id="radio_box" ><input type="radio" name="radio4" value="male"><br></td>
									<td align="center"><input type="radio" name="radio4" value="male"><br></td>
									<td id="radio_box"><input type="radio" name="radio4" value="male"><br></td>
									<td align="center"><input type="radio" name="radio4" value="male"><br></td>
									<td id="radio_box"><input type="radio" name="radio4" value="male"><br></td>
								</tr>
								<tr class="top bottom row">
									<td>Overall </br>satisfaction</td>
									<td id="radio_box" ><input type="radio" name="radio5" value="male"><br></td>
									<td align="center"><input type="radio" name="radio5" value="male"><br></td>
									<td id="radio_box"><input type="radio" name="radio5" value="male"><br></td>
									<td align="center"><input type="radio" name="radio5" value="male"><br></td>
									<td id="radio_box"><input type="radio" name="radio5" value="male"><br></td>
								</tr>
							</table> 
						</div>	
				</center>
	</div>
</div>
	<?php 
	include("footer.html");
	?>
</body>
</html>
