<?php

$conn=mysqli_connect("localhost","root","","nitc_life");

if(!$conn)
{
	die("unable to connect".mysqli_connect_error());
}



if(isset($_POST['submit']))
{
	$user=$_POST['admin'];
$pwd=$_POST['pwd'];
$sql1="select password from admin where username='$user'";

$result=mysqli_query($conn,$sql1);

	if($row=mysqli_fetch_array($result))
	{
		if($pwd==$row[0])
		{
		header("location:home.php");
		}	
		
			else
			{
				//header("location:start.php");
				echo "<script>alert('Invalid Username or Password.please try again..');</script>";
				
			}
	
	}
	
		else
		{
			echo "<script>alert('unsuccesfull');</script>";
		}
	mysqli_close($conn);
}	



?>