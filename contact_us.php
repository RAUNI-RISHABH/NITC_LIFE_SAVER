
<?php
include "make_connection.php";

if(isset($_POST['send']))
{
	$name = $_POST['name1'];
	$email = $_POST['email1'];
	$mobile = $_POST['phone1'];
	$subject = $_POST['msg'];
	
	$sql = "insert into contact_us(name,email,mobile_number,subject) values ('$name','$email','$mobile','$subject')";
	
	if(mysqli_query($conn,$sql))
	{
	echo "<script>alert('Record Save');</script>";
	}
	else{
	echo "<script>alert('Record not Saved');</script>";
	}
mysqli_close($conn);
}
?>









<html>
<head>
  <title>NITC LIFE SAVER</title>

  <link rel="stylesheet" type="text/css" href="contact_us.css">
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




<form action="" method="POST">

<div id="d1">

<font id="fo1">LANDMARKIT</font>
<font id="fo2">Health care,nitc</font>
<font id="fo3">Mavoor road,calicut</font>
<font id="fo4">Kerala 673601</font>
<font id="fo5">+91 8434530153</font>
<font id="fo6">+91 8714370451</font>
<font id="fo7">nitchealthcare@gmail.com</font>
<img src="map.png" id="img2"></img>
</div>
<img src="Contact_us.jpg" id="img3"></img>
<img src="contact_us1.png" id="img4"></img>
	<div id="d2">
	<input type="text" name="name1" placeholder="NAME" required/>
	<input type="text" name="college" value="NIT Calicut" readonly></input>
	<input type="email" name="email1" placeholder="EMAIL" required/>
	<input type="text" name="phone1" placeholder="MOBILE" required/>
	<textarea name="msg" placeholder="MESSAGE"></textarea>
	
	<input type="submit" name="send" value="Send Message"/>
	</div>
	
	

</form>

</body>

</html>