<?php
include "make_connection.php";

if(isset($_POST['submit']))
{
	if(isset($_POST['select_blood']))
	{
		$blood = $_POST['select_blood'];
		if($blood != 'select')
		{
			$sql ="select firstname,lastname,age,mobile,bloodtype,email,address from register where bloodtype='$blood'";
			
			$result = mysqli_query($conn,$sql);
			 
			if(mysqli_fetch_row($result)>0)
			{
			echo "<div style='overflow-x:auto;'>
			<table border='1'>
			<tr>
			
			<th><h2> NAME</h2></th>
			<th><h2> LASTNAME </h2></th>
			<th><h2> AGE </h2></th>
			<th><h2> MOBILE </h2></th>
			<th><h2> BLOOD GROUP</h2></th>
			<th><h2> EMAIL</h2></th>
			<th><h2> ADDRESS</h2></th>
			
			</tr>";
			while($row = mysqli_fetch_array($result))
			{
				echo "<tr>";
				echo "<td>".$row[0]."</td>";
				echo "<td>".$row[1]."</td>";
				echo "<td>".$row[2]."</td>";
				echo "<td>".$row[3]."</td>";
				echo "<td>".$row[4]."</td>";
				echo "<td>".$row[5]."</td>";
				echo "<td>".$row[6]."</td>";
				echo "</tr>";
			}
			echo "</table>";
			echo "</div>";
			}
			else
			{
				echo "<script>alert('Record does not exist..');</script>";
			}
		}
	}
	mysqli_close($conn);
}
?>
<html>



<head>

<title>NITC LIFE SAVER</title>

 <link rel="stylesheet" type="text/css" href="search_blood.css">

<style>
table {
    border-collapse: collapse;
    width: 100%;
	position:absolute;
	top:500px;
	color:blue;
}

th{
    padding: 8px;
    text-align: center;
    border-bottom: 1px solid #ddd;
	color:red;
}
td{
	padding: 8px;
    text-align: center;
    border-bottom: 1px solid #ddd;
	color:;blue
	
	
}

tr:hover{background-color:#f5f5f5}
</style>
</head>
<body>
<div id="nav2">
<div id="lx8">
<img src="nit_logo.jpg"></img>
<font id="lx9">NIT Calicut</font>
<font id="lx10">Life Saver</font>
<font id="lx11">because you need a healthy future...</font>
</div>
 <img src="mainlogo.png" style="height:150px; width:200px;position:absolute;top:0px;">
<font>EMERGENCY AMBULANCE SERVICE</font>
<font id="f1">CALL : (0651)3011222</font>
<img id="i1" src="mail1.jpg">
<font id="f2">info@nitchealthcare.com</font>
<font id="f3">+91 8434530153</font>
<img id="i2" src="call.jpg">

</div>
<div id="nav1">
<ul>
  <li><a href="home.php">Home</a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Profile</a>
    <div class="dropdown-content">
      <a href="user_view_profile.php">View Profile</a>
     

    </div>
  </li>
  
 <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Medical</a>
    <div class="dropdown-content1">
      <a href="doctor.php">Search Doctor</a>
      <a href="checkmedicine.html">Search Medicine</a>
    </div>
  </li>
  
	<li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Blood</a>
    <div class="dropdown-content2">
      <a href="search_blood.php">Search Blood</a>
      <a href="index.html">Camps</a>
    </div>
  </li>
  
	<li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Request</a>
    <div class="dropdown-content3">
      <a href="view_blood_request.php">View Request</a>
      <a href="send_request.php">Send Request</a>
    </div>
  </li>
  
	<li><a href="safety.php">Safety</a></li>
	<li><a href="contact_us.php">Contact Us</a></li>
	<li style="position:absolute;left:1200px"><a href="logout.php">Log Out</a></li>
  
</ul>
</div>








<form action="" method="POST">
<div id="d1">
	<font id="f1">Find Blood Online</font>
	<font id="f2">Find every blood. On time. Everytime.</font>
	<select name="select_blood" required><option value="">Required Blood type</option>
<option >O+</option>
<option >O-</option>
<option >B+</option>
<option >B-</option>
<option >AB+</option>
<option >AB-</option>
<option >A+</option>
<option >A-</option>
</select>
	<img src="magnifying-glass.svg"></img>
	<input type="submit" name="submit" value="Search"></input>
	</div>
	
	
</form>
<div style="height:50px; width:100%;background:#b16f35; position:absolute;bottom:-600px;left:0px;">
<p style="color:#fefbc8">&copy; 2017 Designed by NITC Calicut<p>
</div>
</body>
</html>
