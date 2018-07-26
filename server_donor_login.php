<?php
session_start();
include "make_connection.php";

if(isset($_POST['submit']))
{
	
$text1=$_POST['text1'];	
$text2=$_POST['text2'];
	$user=$_POST['username'];
$pwd=$_POST['password'];
$sql1="select password from register where email='$user'";

$result=mysqli_query($conn,$sql1);

	if($row=mysqli_fetch_array($result))
	{
		if($pwd==$row[0] && $text1 == $text2)
		{
			$_SESSION['user']=$user;
		header("location:home.php");
		}	
		
			else
			{
			   header("location:start.php");
				$_SESSION['message'] = "Invalid Username or Password or captcha did'nt match";
				
			}
	
	}
	
		else
		{
			$_SESSION['message'] = "unsuccessfull.plz try again!!";
		}
	mysqli_close($conn);
}	
?>
