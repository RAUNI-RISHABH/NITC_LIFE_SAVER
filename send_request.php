<!DOCTYPE html>
<?php
include "make_connection.php";

if(isset($_POST['submit1']))
{
	$name = $_POST['name'];
	$gender = $_POST['gender'];
	$age = $_POST['age'];
	$mobile = $_POST['mobile'];
	$blood_group = $_POST['select_blood'];
	$email = $_POST['email'];
	$date = $_POST['date'];
	$detail = $_POST['detail'];
	
	$sql = "insert into send_request(name,gender,age,mobile_number,blood_group,email,till_date,detail) values('$name','$gender',$age,'$mobile','$blood_group','$email','$date','$detail')";

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
  <title>Nitc Life Saver</title>

  <link rel="stylesheet" type="text/css" href="home.css">
  <style>
  
  #na1{
	padding-top:30px;
	padding-left:20px;
	padding-right:40px;
	font-size:20px;
	background:black;
	margin:auto;
	width:500px;
	height:900px;
	border-radius:10px;
	opacity:.8;
	position:absolute;
	top:230px;
	left:370px;
	
}

#na1 input{
	margin-top:20px;
	width:200px;
	height:20px;
	font-size:20px;
	border-radius:10px;
}



#na1 input[name="submit1"]{
	margin-top:14px;
	width:300px;
	
	
	height:50px;
	background:#b16f35;
	color:white;
	font-weight:bold;
}

#na1  input[name="gender"]{
	margin-top:20px;
	width:100px;
	height:20px;
	font-size:20px;
	border-radius:10px;	
	
}
#na1 input[name="submit1"]:hover{
	background:white;
	color:#b16f35;
}




#na1 input[name="username"]{
	margin-top:12px;
	width:300px;
	
}

#na1 input[name="password"]{
	margin-top:12px;
	width:300px;
	
}

#na1 ul li a:hover{
	background-color:#b16f35;
	color:white;
	
}

#na1 ul li a.active1{
	background-color:#b16f35;
	color:white;
	
}

#na1 h3{
	font-style: oblique;
	color:white;
	
}

#na1 a{
	font-size:20px;
	 color:blue;
	 line-height:42px;
	 
	 
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
	<li style="position:absolute;left:1200px"><a href="#">Log Out</a></li>
  
</ul>
</div>

	<form action="" method="POST">
		<div id="na1">
		
		
			
	<h3 align="center">Send Request<h3>
	Name <input type="text" name="name" placeholder ="Name" required="required" pattern="[a-zA-Z _]{5,15}" title="please enter only character  between 5 to 15 for donor name" /><br><br />
	Gender  <input name="gender" type="radio" value="male" checked="checked"/>Male<input name="gender" type="radio" value="female"/>Female<br><br>
	Age<input type="number" name="age" placeholder ="Age" required="required" pattern="[0-9]{2,2}" title="please enter only  numbers between 2 to 2 for age" /><br><br>
	Mobile No<input type="varchar" name="mobile" placeholder="Mobile Number"  required="required" pattern="[0-9]{10,12}" title="please enter only numbers between 10 to 12 for mobile no." /><br><br>
	Select Blood Group <select name="select_blood" required><option value="">Select</option>
	<option >O+</option>
	<option >O-</option>
	<option >B+</option>
	<option >B-</option>
	<option >AB+</option>
	<option >AB-</option>
	<option >A+</option>
	<option >A-</option>
	</select><br><br>
	E-Mail <input type="email" name="email" placeholder="E-mail "required="required" /><br><br>
	Till Required Date
<input type="date" name="date"required>

<input type="text" name="year" style=" width:50px"  /><br><br>
Detail <textarea placeholder="enter details" name="detail"></textarea>
			<input type="submit" value="Login" name="submit1"/><br>
			
			</div>	
			
			
	</form>
	
	
	



</body>

</html>
