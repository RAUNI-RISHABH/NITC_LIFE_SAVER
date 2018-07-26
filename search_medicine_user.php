
<html>
<head>
  <title>NITC LIFE SAVER</title>

  <link rel="stylesheet" type="text/css" href="search_medicine_user.css">
</head>

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

<div id="d1">

	
	</div>
	
	<img src="avialableshow.jpg" style="position:absolute;height:660px;width:700px;left:300px;top:240px;"></img>
 	<table id="data-table">
		
		<thead>
			<tr id="tr1">
				<th>HEALTHCARE PRODUCTS</th>
				
			</tr>
			<tr id="tr2">
			<th>Medicine Name</th>
			</tr>
			<tr id="tr7">
			<th>Prescription</th>
			</tr>
			
			<tr id="tr8">
			<th>Date of Expiry</th>
			</tr>
			
			<tr id="tr9">
			<th>(year-mm-dd)</th>
			</tr>
			
			
		</thead>
		<tbody>
		<?php
		$conn=mysqli_connect("localhost","root","","nitc_life");
		
		if(!$conn)
		{
			die("unable to connect".mysqli_connect_error());
			
		}
		$nam=$_POST['search1'];

$sql= "select name,status,date,required from medicine where name='$nam'";

$result = mysqli_query($conn,$sql);

		
		while ($row=mysqli_fetch_array($result))
		{

			echo '<tr id="tr3">
					<td>'.$row[0].'</td></tr>
					<tr id="tr4"><td>'.$row[1].'</td></tr>
				<tr id="tr5"><td>'.$row[2].'</td></tr>
					<tr id="tr6"><td>'.$row[3].'</td></tr>
				</tr>';
		}?>
		</tbody>
		
	</table>

</body>

</html>