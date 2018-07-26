<!DOCTYPE html>
<html>
<head>
  <title>NITC LIFE SAVER</title>

  <link rel="stylesheet" type="text/css" href="add_medicine.css">
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
      <a href="#">Edit Profile</a>
      <a href="#">Change Password</a>

    </div>
  </li>
  
 <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Medical</a>
    <div class="dropdown-content1">
      <a href="doctor.html">Search Doctor</a>
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
      <a href="view_blood_request">View Request</a>
      <a href="#">Send Request</a>
    </div>
  </li>
  
	<li><a href="#">Safety</a></li>
	<li><a href="contact_us.php">Contact Us</a></li>
	<li style="position:absolute;left:1200px"><a href="#">Log Out</a></li>
  
</ul>
</div>
<img src="led.jpg" style="position:absolute;top:300px;width:700px;height:700px;left:300px;"></img>
<form action="" method="POST">
<div id="d1">
<h1>MEDICINE MAINTAIN</h1><br><br><br>
<input type="text" name="med_name"placeholder="medicine name"/><br><br>
<select name="pres"><br><br>
	<option>select notification</option>
	<option>Prescription required</option>
	<option>Prescription not required</option>
</select>

<input type="number" name="quantity" placeholder="quantity"/><br><br>
<select name="status"><br><br>
	<option>select status</option>
	<option>Available</option>
	<option>Not Available</option>
</select><br><br>
<input type="date" name="date" placeholder="Expiry date">

<input type="submit"name="submit" value="ADD MEDICINE"/>
</form>

<form action="" method="POST">
<input type="submit"name="delete" value="DELETE MEDICINE"/>
</form>

</div>
<div style="height:50px; width:100%;background:#b16f35; position:absolute;bottom:600px;left:0px;">
<p style="color:#fefbc8">&copy; 2017 Designed by NITC Calicut<p>
</div>
</body>

</html>