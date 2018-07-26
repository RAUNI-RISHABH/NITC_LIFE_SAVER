<!DOCTYPE html>
<?php
include "make_connection.php";

if(isset($_POST['submit']))
{
	$name = $_POST['name'];
	$mobile = $_POST['phone'];
	$email = $_POST['email'];
	$date = $_POST['date'];
	$time = $_POST['time'];
	$specialty = $_POST['speciality'];
	
	
	$sql = "insert into quick(name,mobile,email,appointment_date,select_time,select_speciality) values('$name',$mobile,'$email','$date','$time','$specialty')";

	if(mysqli_query($conn,$sql))
	{
			echo "<script>alert('Record Save');</script>";
	}
	else{
		echo "<script>alert('Saving Record Failed');</script>";
	}
	 
		
	mysqli_close($conn);
}
	
?>




<html>
<head>
  <title>NITC LIFE SAVER</title>

  <link rel="stylesheet" type="text/css" href="doctor.css">
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
		
		<img src="book-appointment-button.png" style="width:350px;height:150px;"></img>
	
			<div id="d2">
			
			<img src="doctor4.jpg" style="width:90px;height:90px;border-radius:50%;position:absolute;left:120px;top:6px;"></img>
			
			<input type="text" name="dname" value="Dr kameshwar sah" readonly style="position:absolute;top:93px;left:100px;background:none;font-size:17px;color:#FF6347;border:0px;"></input>
			
			<input type="text" name="dname" value="Pediatrician" readonly style="position:absolute;top:119px;left:117px;background:none;font-size:15px;color:#4682B4;border:0px;"></input>
			
			<font id="f3">Experience 4 Years</font>
			<font id="f4">Health Care Nitc</font>
			<a href="appoint.php" name="book"><font style="position:absolute;left:5px;top:2px;">Book an appointment</font></a>
			
			
			</div>
			
			<div id="d3">
			
			<img src="doc1.jpg" style="width:90px;height:90px;border-radius:50%;position:absolute;left:120px;top:6px;"></img>
			
			<input type="text" value="Dr Srijan K.N" readonly style="position:absolute;top:93px;left:110px;background:none;font-size:17px;color:#FF6347;border:0px;"></input>
			
			<input type="text" value="Dermatologist" readonly style="position:absolute;top:119px;left:117px;background:none;font-size:15px;color:#4682B4;border:0px;"></input>
			
			<font id="f3">Experience 2 Years</font>
			<font id="f4">Health Care Nitc</font>
			<a href="appoint1.html" name="book"><font style="position:absolute;left:5px;top:2px;">Book an appointment</font></a>
			
			</div>
			
			<div id="d4">
			
			<img src="doctor2.jpg" style="width:90px;height:90px;border-radius:50%;position:absolute;left:120px;top:6px;"></img>
			
			
			<input type="text" value="Shri lakshmi P" readonly style="position:absolute;top:93px;left:110px;background:none;font-size:17px;color:#FF6347;border:0px;"></input>
			
			<input type="text" value="Cardiologist" readonly style="position:absolute;top:119px;left:117px;background:none;font-size:15px;color:#4682B4;border:0px;"></input>
			<font id="f3">Experience 1 Years</font>
			<font id="f4">Health Care Nitc</font>
			<a href="appoint2.html" name="book"><font style="position:absolute;left:5px;top:2px;">Book an appointment</font></a>
			
			</div>
			
			<div id="d5">
			
			<img src="doctor1.jpg" style="width:90px;height:90px;border-radius:50%;position:absolute;left:120px;top:6px;"></img>
			
				<input type="text" value="Dr Murlivijay sheety" readonly style="position:absolute;top:93px;left:100px;background:none;font-size:17px;color:#FF6347;border:0px;"></input>
			
			<input type="text" value="Hospitalist" readonly style="position:absolute;top:119px;left:120px;background:none;font-size:15px;color:#4682B4;border:0px;"></input>
			
			<font id="f3">Experience 6 Years</font>
			<font id="f4">Health Care Nitc</font>
			<a href="appoint3.html" name="book"><font style="position:absolute;left:5px;top:2px;">Book an appointment</font></a>
			
			</div>
	
		</div>
		
				<div id="d6">
				
				<font id="f1">Quick</font>
				<font id="f2">Appointment Booking</font>
				<img src="line.png"></img>
				<font id="f3" style="position:absolute;top:120px;left:20px;">Fill details below to book a quick appointment</font>
				</div>
				<form action="" method="POST">
				<div id="d7">
				<input type="text" name="name" placeholder="Name"required><br><br>
				<input type="text" readonly value="91" name="code"></input>
				<input type="bigint" name="phone" placeholder="Phone No"required><br><br>
				<input type="email" name="email" placeholder="Email"required><br><br>
				<input type="date" name="date"required><br><br>
				<select name="time"required >
					<option>Select Time</option>
					<option>08:00-08:30</option>
					<option>08:30-09:00</option>
					<option>09:00-09:30</option>
					<option>09:30-10:00</option>
					<option>10:00-10:30</option>
					<option>10:30-11:00</option>
					<option>11:00-11:30</option>
					<option>11:30-12:00</option>
					<option>12:00-12:30</option>
					<option>12:30-13:00</option>
					<option>13:00-13:30</option>
					<option>13:30-14:00</option>
					<option>14:00-14:30</option>
					<option>14:30-15:00</option>
					<option>15:00-15:30</option>
					<option>15:30-16:00</option>
					<option>16:00-16:30</option>
					<option>16:30-17:00</option>
					<option>17:00-17:30</option>
					<option>17:30-18:00</option>
					<option>18:00-18:30</option>
					<option>18:30-19:00</option>
					<option>19:00-19:30</option>
					<option>19:30-20:00</option>
				</select><br><br>
		
				
				<select name="speciality"required>
					<option>Speciality</option>
					<option>Pain</option>
					<option>ache</option>
				
				</select><br><br>
		
				<input type="submit"name="submit" value="Request appointment">
				
				</div>
				</form>
			
				
		<img src="dochealth.png" style="position:absolute; width:280px;height:250px; bottom:-300px;left:1020px;"></img>
			
			<div style="height:50px; width:100%;background:#b16f35; position:absolute;bottom:-700px;left:0px;">
<p style="color:#fefbc8">&copy; 2017 Designed by NITC Calicut<p>
</div>

</body>

</html>