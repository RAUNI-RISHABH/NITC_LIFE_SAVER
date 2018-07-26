<?php
include "make_connection.php";

if(isset($_POST['submit']))
{
	  $fname=$mob=$date =$time =$name ="";
	  $date = $_POST['adate'];
	$time = $_POST['time'];
    $name = $_POST['dname'];
	echo $date;
    session_start();
	$user = $_SESSION['user'];
  $sel="SELECT * FROM register where email='$user'" ;
  $result= mysqli_query($conn,$sel);
  if(mysqli_num_rows($result)>0){
  while($row=mysqli_fetch_array($result))
  {
  $fname=$row[1];
	$mob=$row[4];
  }}
  else{
	  
	  echo "user not found please register....";
  }
	$sql = "INSERT INTO `appointment`(`name`, `mobile`, `doctor`, `date`, `time`) VALUES ('$fname',$mob,'$name','$date','$time')";

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

<title>doctor appointment</title>

<link rel="stylesheet" type="text/css" href="appoint.css">

</head>

<body>

<div id="d1">


</div>


<div id="d2">
<form action="" method="POST">
<font id="f1">Select Your Appointment Date And Time</font>
<font id="f2">Doctor Name</font>
<font id="f3">Specialty</font>
<font id="f4">Hospital</font>
<font id="f5">City</font>
<font id="f6">Country</font>
<font id="f7">Appointment Date</font>
<font id="f8">Preferred Time(24 hrs)</font>
<input type="text" name="dname" value="Dr Murlivijay sheety" readonly style="position:absolute;top:93px;left:420px;background:none;font-size:20px;color:white;border:0px;"></input>

<input type="text" name="special1" value="Hospitalist" readonly style="position:absolute;top:146px;left:420px;background:none;font-size:20px;color:white;border:0px;"></input>

<font style="position:absolute; font-size:20px;left:420px;top:194px;color:white;">Nitc Health Care</font>

<font style="position:absolute; font-size:20px;left:420px;top:245px;color:white;">Calicut</font>

<font style="position:absolute; font-size:20px;left:420px;top:294px;color:white;">India</font>

<input type="date"name="adate" >
<input type="time"name="time" >

<input type="submit" name="submit"value="submit"/>
<input type="reset" name="reset"value="Clear"/>
<a href="doctor.php" name="x"><font style="position:absolute;left:5px;top:2px;">X</font></a>
</form>
</div>



</body>







</html>