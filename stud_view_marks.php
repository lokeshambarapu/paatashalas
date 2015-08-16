  <?php 
include('session.php');

if(isset($_GET['examtype']))
{ 
	$examtypep = $_GET['examtype'];
}  
	
 ?>
  <!DOCTYPE HTML>
<html>
<head>
<title>template1</title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<script type="text/javascript">
	function studentmarks(value)
	{
		location.href='stud_view_marks.php?examtype='+value;
	}
	</script>
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
		<div class="markstype" id="markslistdiv">
			
			<ul >
				<li id="Assignment I"><a href="#" onclick="studentmarks('Assignment I')">Assignment I</a></li>
				
				<li id="Assignment II"><a href="#" onclick="studentmarks('Assignment II')">Assignment II</a></li>
				
				<li id="Assignment III"><a href="#" onclick="studentmarks('Assignment III')">Assignment III</a></li>
				
				<li id="Assignment IV"><a href="#" onclick="studentmarks('Assignment IV')">Assignment IV</a></li>
				
				<li id="Quarterly" style="width:200%"><a href="#" onclick="studentmarks('Quarterly')">Quarterly</a></li>
				<li id="Half-yearly" style="width:200%"><a href="#" onclick="studentmarks('Half-yearly')">Half-yearly</a></li>
				<li id="Annual" style="width:200%"><a href="#" onclick="studentmarks('Annual')">Annual</a></li>
			</ul>
			
		</div>
		<div class="markstype">
			<ul class="">

				<li id="Unit I"><a href="#" onclick="studentmarks('Unit I')">Unit I</a></li>
				
				<li id="Unit II"><a href="#" onclick="studentmarks('Unit II')">Unit II</a></li>
				
				<li id="Unit III"><a href="#" onclick="studentmarks('Unit III')">Unit III</a></li>
				
				<li id="Unit IV"><a href="#" onclick="studentmarks('Unit IV')">Unit IV</a></li>
				
			</ul>
			
		</div>
		<div id="marksinfo" >
					<?php
								if(isset($_GET['examtype']))
								{ 
									$examtypep = $_GET['examtype'];
									echo "<script>document.getElementById('$examtypep').style.background='#f90'</script>";
								
								$result=mysql_query("SELECT * FROM studetails where username='$login_session'");
								$row=mysql_fetch_array($result);
								$admno=$row['addmissionno'];
								$name=$row['name'];
								$section=$row['section'];
								$class=$row['class'];
								$result1=mysql_query("SELECT * FROM $class where addmissionno='$admno' and examtype='$examtypep'");
								$row1=mysql_fetch_array($result1);
								$totalsec=$row1['language1']+$row1['language2']+$row1['language3']+$row1['maths']+$row1['science']+$row1['social']; 
								
								echo "<center><h4 id='gen-color'><font  id='marksheader' size='5px'>$examtypep Marks</font></h4></center>
									<hr color='#E0E0E0'>
									<table width='100%' id='markstable' align='center' cellpadding='5' cellspacing='5' stlye='background-color:red;' border='5'>
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
								}
								
							?>
				
						</center>
		</div>
	</div>
</div>




	<br/>
	
</body>
</html>
