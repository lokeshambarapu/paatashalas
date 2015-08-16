<?php 
//session_start();
//include "paa_connection.php";
include('session.php');
	
 ?>
<html>
	<head>
		<style type="text/css">
		
		#homeback{
			//position: absolute;
			left: 0px;
			top: 0px;
			width: 100%;
			height: 100%;
			background-image: url("images/background1.jpg");
		}
		
		#homeheader{
			position: relative;
			top: 0px;
			left: 40px; 
			width: 1000px;
			height: 120px;
			//background-image: url("images/greenback2.jpg");
			//border-radius: 15px;
		}
		#homefront{
			//position: relative;
			top: 0px;
			left: 0px; 
			width: 1000px;
			height: auto;
			background-color: white;
			border-radius: 15px;
			display:inline-block;
			//float:left;
			margin-bottom: 2cm;
			//overflow:auto;
		}
		#logoimg{
			position: relative;
			top: 20px;
			left: -470px;
			//align: left;
		}
		#logodiv{
			position: relative;
			top: -50px;
			left: -220px;
			align: left;
		}
		
		#searchtxt{
			border: 2px solid #a1a1a1;
			position: relative;
			top: -150px;
			left: 170px;
			padding: 5px 10px; 
			background: #0000;
			width: 250px;
			border-radius: 5px;
		}
		#searchbut{
			background: url('images/searchimg.jpeg');
			background-position:center;
			background-repeat:no-repeat;
			width: 50px;
			height: 27px;
			position: relative;
			left: 112px;
			top: -144px;
			border: 2px solid #a1a1a1;
			border-radius: 5px;
		}
		#tabs { 
			font-size:0.75em; 
			width:150px; 
			float:left;
		}
		#tabs ul {
			margin:0px; 
			padding:0px; 
			background: #efefef; 
		background: linear-gradient(top, #222325 0%, #222325 );  
		background: -moz-linear-gradient(top, #222325 0%, #222325 50%); 
		background: -webkit-linear-gradient(top, #222325 0%,#222325 50%); 
		box-shadow: 0px 0px 9px rgba(0,0,0,0.15);
		padding: 10px 20px;
		border-radius: 5px;  
		list-style: none;
		
		horizontal-align: middle;
		
		}
		#tabs li { 
			list-style: none; 
			height:50px
		} 
		 
		ul.top-level { background:#666; }
		ul.top-level li {
		 border-bottom: #fff dotted;
		 // border-top: #fff dotted;
		 border-width: 1px;
		}
		 
		#tabs a {
		 color: #fff;
		 cursor: pointer;
		 display:block;
		 height:50px;
		 line-height: 50px;
		 text-indent: 10px;
		 text-decoration:none;
		 width:100%;
		 font-size:18px;
		}
		 
		#tabs a:hover{
		// text-decoration:underline;
		}
		 
		#tabs li:hover {
		 background: #f90;
		 position: relative;
		}
		ul.sub-level {
			display: none;
		}
		 
		li:hover .sub-level {
			background: #999;
			border: #fff solid;
			border-width: 1px;
			display: block;
			position: absolute;
			left: 75px;
			top: 5px;
		}
		 
		ul.sub-level li {
			border: none;
			float:left;
			width:150px;
		}
		#welcome
		{
			width:400px;
			height:120px;
			//position:relative;
			top:20px;
		//	left:50px;
		//	align:center;
			border: 3px solid #a1a1a1;
			border-radius:10px;
			border-color:cyan;
			//display:inline-block;
			//float:left;
		}
		#studentname{
			position:relative;
			top:20px;
			left:20px;
		}
		#studentimage{
			position:relative;
			top:10px;
			right:20px;
		}
		#marksinfo{
		//	position: absolute;
			font-size:15px;
			padding:3px;
			font-family:scan-serif;	
		//	top:5px;
		//	left:80px;
			//right:0px;
			width:600px;
			height:auto;
			color:black;
			//background-color:#606060;
			border-radius:20px;
		}
		#edu-tr {
			border:3px solid #a1a1a1;
			background-color:;
		}
		#pid {
			border: 1px solid #a1a1a1;
			border-radius:5px;
			width:120px ;
			height:25px;
			
		}
		#radio_box{
			background-color:#E8E8E8 ;
			text-align:center;
		}
		#markstable tr td{
			align:center;
		}
		#table-data {
			color:white;
			text-align:center;
		}
		#viewinfo{
			//background-color:#606060;
			display:;
		//	position:relative;
			//	top:100px;
		//	left:20px;
			width:800px;
			//	height:px;
			height:auto;
			float:left;
			//border: 1px solid #a1a1a1;
			border-radius:25px;
			}
		#view_remarks{
			//	background-color:#606060;
			display:;
		//	position:absolute;
		//	top:260px;
		//	left:200px;
			width:1005px;
			height:auto;
			border-radius:25px;
		}
		#feedback{
			//background-color:#606060;
			display:;
			//position:relative;
			//top:250px;
			//left:20px;
			width:800px;
			
			height:auto;
			//border-radius:25px;
		}
		tr.top td { border-top: 1px dashed black; }
		tr.bottom td { border-bottom: 1px dashed black; }

		
		#contact{
			//position: relative;
			top: 0px;
			//left: 200px;
			width: 100%;
			height: 200px;
			background-color: #202020  ;
		//	border-radius: 15px;
		}
		#contacttable{
			//position: relative;
			top: 0px;
			//left: 200px;
			//align: center;
		}
	#contact-us{
			//position: relative;
			//top: 1150px;
			//left: 200px;
			//width: 150px;
			color:white;
			//height: 150px;
			background-color:  ;
			//border-radius: 15px;
		}
		#contact-with-us{
			//position: relative;
			//top: 1150px;
			//left: 500px;
			color:white;
			//width: 150px;
			//height: 150px;
			background-color:  ;
			//border-radius: 15px;
		}
		#contact-text{
			//color:#787878 ;
			color: white;
		}
		
		#visitor{
			position:relative;
			//top: 1150px;
			//left: 900px;
			color:white;
		}
		</style>
		<script type="text/javascript">
		/*	var string = window.location.href;
			var getit = new Array();
			getit=string.split("?");
			var examtype = unescape(getit[1]);
			//alert(examtype);
		*/	
			function studenthome(value)
			{
				document.getElementById('welcome').style.display="block";
				document.getElementById('marksinfo').style.display="none";
				document.getElementById('viewinfo').style.display="none";
				document.getElementById('view_remarks').style.display="none";
				document.getElementById('feedback').style.display="none";
				
				
			}
			
			
			function studentmarks(value)
			{
				
				
			/*	document.getElementById('welcome').style.display="none";
				document.getElementById('marksheader').innerHTML=value+" Marks";
				document.getElementById('marksinfo').style.display="block";
				document.getElementById('viewinfo').style.display="none";
				document.getElementById('view_remarks').style.display="none";
				document.getElementById('feedback').style.display="none";
				
			*/	
				location.href='studentmarks.php?examtype='+value;
			}
			function viewdetails()
			{
				
				document.getElementById('welcome').style.display="none";
				document.getElementById('viewinfo').style.display="block";
				document.getElementById('marksinfo').style.display="none";
				document.getElementById('view_remarks').style.display="none";
				document.getElementById('feedback').style.display="none";
				
			}
			function viewremarks()
			{
				
				document.getElementById('welcome').style.display="none";
				document.getElementById('viewinfo').style.display="none";
				document.getElementById('marksinfo').style.display="none";
				document.getElementById('view_remarks').style.display="block";
				document.getElementById('feedback').style.display="none";
				
			}
			function feedback()
			{
				
				document.getElementById('welcome').style.display="none";
				document.getElementById('viewinfo').style.display="none";
				document.getElementById('marksinfo').style.display="none";
				document.getElementById('view_remarks').style.display="none";
				document.getElementById('feedback').style.display="block";
				
			}
			

		</script>
	</head>
	
	<body>
		
		<table border=0 width="100%" height="100%"><tr><td align="center" valign="center"> 
			<div id="homeback">
			
				<div id="homeheader">
					
					<div id="logoimg" >
						<img src="images/logo.gif" width="80px" height="80px" alt=""></img>
					</div>
					<div id="logodiv" >
						<font face="verdana" size="100px" color="white">Student Module</font>
					</div>
					<div id="searchdiv" style='margin-left: 350px;'>
						<h1>
							<input type="text" id="searchtxt" width="50px" name="search" title="Search" style="color:#888;" 
									value="Search..." onfocus="inputFocus(this)" onblur="inputBlur(this)" />
							<input type="submit" id="searchbut" name="submit" value=""/>
						</h1>
					</div>
					<script>
						function inputFocus(i)
						{
							if(i.value==i.defaultValue){ i.value=""; i.style.color="#000"; }
						}
						function inputBlur(i)
						{
							if(i.value==""){ i.value=i.defaultValue; i.style.color="#888"; }
						}
					</script>
				</div>
				<div id="homefront">
					<div id="tabs">
						<ul class="top-level">
							<li><a href="#" onclick="studenthome()">Home</a></li>
							<li><a href="#" onclick="viewdetails()">Details</a></li>
							<li ><a href="#">Marks</a>
								<ul class="sub-level">
									<li><a href="#" onclick="studentmarks('Assignment I')">Assignment I</a></li>
									<li><a href="#" onclick="studentmarks('Unit I')">Unit I</a></li>
									<li><a href="#" onclick="studentmarks('Assignment II')">Assignment II</a></li>
									<li><a href="#" onclick="studentmarks('Unit II')">Unit II</a></li>
									<li><a href="#" onclick="studentmarks('Assignment III')">Assignment III</a></li>
									<li><a href="#" onclick="studentmarks('Unit III')">Unit III</a></li>
									<li><a href="#" onclick="studentmarks('Assignment IV')">Assignment IV</a></li>
									<li><a href="#" onclick="studentmarks('Unit IV')">Unit IV</a></li>
									<li><a href="#" onclick="studentmarks('Quarterly')">Quarterly</a></li>
									<li><a href="#" onclick="studentmarks('Half-yearly')">Half-yearly</a></li>
									<li><a href="#" onclick="studentmarks('Annual')">Annual</a></li>
								</ul>
							</li>
							<li><a href="#" onclick="">Timetable</a></li>
							<li><a href="#" onclick="viewremarks()">Remarks</a></li>
							<li><a href="#" onclick="feedback()">Feedback</a></li>
							<li><a href="logout.php" >Logout</a></li>
 						</ul>
						
					</div>
					
					<div id="marksinfo" style="display:;margin-right:-150px;margin-top:10px;width:px">
						
						

							<?php
								if(isset($_GET['examtype']))
								{ 
									$examtypep = $_GET['examtype'];
								}  
								
								$result=mysql_query("SELECT * FROM studetails where username='$login_session'");
								$row=mysql_fetch_array($result);
								$admno=$row['addmissionno'];
								$name=$row['name'];
								$section=$row['section'];
								$class=$row['class'];
								$result1=mysql_query("SELECT * FROM $class where addmissionno='$admno' and examtype='$examtypep'");
								$row1=mysql_fetch_array($result1);
								$totalsec=$row1['language1']+$row1['language2']+$row1['language3']+$row1['maths']+$row1['science']+$row1['social']; 
								echo "<script type='text/javascript'>alert('$examtypep');</script>";
								echo "<h4 id='gen-color'><font  id='marksheader' size='5px'>$examtypep Marks</font></h4>
									<hr color='#E0E0E0'>
									<table width='100%' id='markstable' align='center' cellpadding='5' cellspacing='5' border='5'>
									<tr>
										<th id='radio_box'>Subject</th>
										<th  id='radio_box'>Total</th>
										<th  id='radio_box'>Secured</th>
									</tr>
									<tr>
										<th  id='radio_box'>I language</td>
										<td align='center'><input type='text' id='pid' name='tboard' ></td>
										<td align='center'><input id='pid' type='text' name='tyear' style='text-align:center;' readonly value='".$row1['language1']."'></td>
									</tr>
									<tr>
										<th  id='radio_box' >II language</td>
										<td align='center'><input type='text' id='pid' name='tboard' ></td>
										<td align='center'><input id='pid' type='text' name='tyear' style='text-align:center;' readonly value='".$row1['language2']."'></td>
									</tr>
									<tr>
										<th  id='radio_box' >III language</td>
										<td align='center'><input type='text' id='pid' name='tboard' ></td>
										<td align='center'><input id='pid' type='text' name='tyear' style='text-align:center;' readonly value='".$row1['language3']."'></td>
									</tr>
									<tr>
										<th  id='radio_box' >Mathematics</td>
										<td align='center'><input type='text' id='pid' name='tboard' ></td>
										<td align='center'><input id='pid' type='text' name='tyear' style='text-align:center;' readonly value='".$row1['maths']."'></td>
									</tr>
									<tr>
										<th  id='radio_box' >Science</td>
										<td align='center'><input type='text' id='pid' name='tboard' ></td>
										<td align='center'><input id='pid' type='text' name='tyear' style='text-align:center;' readonly value='".$row1['science']."'></td>
									</tr>
									<tr>
										<th  id='radio_box' >Social</td>
										<td align='center'><input type='text' id='pid' name='tboard' ></td>
										<td align='center'><input id='pid' type='text' name='tyear' style='text-align:center;' readonly value='".$row1['social']."'></td>
									</tr>
									
									<tr>
										<th  id='radio_box' >Total</td>
										<td align='center' id='radio_box'><input type='text' id='pid' name='tboard' ></td>
										<td align='center' id='radio_box'><input id='pid' type='text' name='tyear' style='text-align:center;' readonly value='".$totalsec."'></td>
									</tr>
								</table>";
								
								
							?>
							
							

						</center>
					</div>
						
						
									
				</div>
				
			</div>
			
		</td></tr></table>
		
	</body>

</html>	
		
	