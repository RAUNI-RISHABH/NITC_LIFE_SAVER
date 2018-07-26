<?php
include "make_connection.php";

if(isset($_POST['submit']))
{
	if(isset($_POST['select_blood']))
	{
		$blood = $_POST['select_blood'];
		if($blood != 'select')
		{
			$sql ="select firstname,lastname,age,mobile,bloodtype,email,address,avatar from register where bloodtype='$blood'";
			
			$result = mysqli_query($conn,$sql);
			 while($userrow=mysqli_fetch_array($result))
			{
			$firstname=$userrow['firstname'];
			$lastname = $userrow['lastname'];
			$age=$userrow['age'];
			$usermobile=$userrow['mobile'];
			$bloodtype=$userrow['bloodtype'];
			$email=$userrow['email'];
			$address=$userrow['address'];
			$image=$userrow['avatar'];
			}
		}
	}
}
  ?>
  
  
  <html>

	<head>
	
	

		<title>nitc</title>
		<link rel="stylesheet" type="text/css" href="user_view_profile.css">
		
 <style>
 
	#display{
	
	margin-top:0%;
	font-size:20px;
	background-color:white;
	position:absolute;
	width:100%;
	height:150px;
	}
	</style>
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



<div id="display" style="height:600px;width:500px; background-color:white; position:absolute;left:400px;top:300px;">
<img src="frame.png" style="width:100%;height:100%;"></img>
<img src="type.jpg" style="width:25%;height:25%;position:absolute;top:330px;left:170px;"></img>
<img src="circle.png" style="position:absolute;left:117px; top:-28px;height:220px;"></img>
<div style="width:400px;height:100px;position:absolute;top:160px;left:150px;">
  <font style="font-size:40px;"> <?php echo $firstname; ?>
  </font>
  <font style="font-size:40px;"><span><?php echo $lastname; ?></span>
  </font>
  </div>
   <font style="position:absolute;left:10px; top:20px;font-size:25px;"><span>Age  <?php echo $age; ?></span> 
  </font>
  <font style="position:absolute;left:190px; top:210px;font-size:25px;"><span><?php echo $usermobile; ?></span>
  </font>
   <font style="position:absolute;left:220px; top:390px;font-size:25px;color:white;"><span><?php echo $bloodtype; ?></span>
  </font>
  <font style="position:absolute;left:155px; top:275px;font-size:25px;"><span><?php echo $email; ?></span>
  </font>
  <font style="position:absolute;left:205px; top:245px;font-size:25px;"><span><?php echo $address; ?></span>
  </font>
   
    <img src="<?php echo $image ?>" height="135px" width="135px" style="position:absolute;border-radius:50%; top:17px; left:186px;" /></a></td>
  <br />
  
</div>

<div style="height:50px; width:100%;background:#b16f35; position:absolute;bottom:-600px;left:0px;">
<p style="color:#fefbc8">&copy; 2017 Designed by NITC Calicut<p>
</div>
</html>