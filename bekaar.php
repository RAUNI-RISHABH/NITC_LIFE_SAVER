
<?php

    session_start();
    $_SESSION['message'] = '';
include "make_connection.php";
if(isset($_POST["register"])) 
{
$target_dir = "images/";
$target_file = $target_dir.basename($_FILES["avatar"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image

    $check = getimagesize($_FILES["avatar"]["tmp_name"]);
    if($check !== false) {
      //  echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
       $_SESSION['message'] = "File is not an image.";
        $uploadOk = 0;
    }

// Check if file already exists
if (file_exists($target_file)) {
    $_SESSION['message']="Sorry, file already exists.";
    $uploadOk = 0;
}
//aloow certain file formats
	if($imageFileType != "jpg" && $imageFileType !="png" && $imageFileType !="jpeg" && $imageFileType !="gif"){
		$_SESSION['message']="sorry, only jpg, jpeg, Png & gif files are allowed.";
		$uploadok=0;
	}else{
		if(move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file)){
//$cn=makeconnection();
         $content_form = "Blood donation";
        $headers = array(
                
                'From: NIT Calicut',
                'content-Type:text/html'    
            );
        $msg = file_get_contents('mail.html');
        $msg = str_replace('$name',$_POST["firstname"],$msg);
        $msg = str_replace('$email',$_POST["email"],$msg);
		$msg = str_replace('$pwd',$_POST["password"],$msg);
			$s="insert into register(firstname,lastname,age,mobile,bloodtype,email,address,password,avatar) values('" . $_POST["firstname"] ."','" . $_POST["lastname"] . "','" . $_POST["age"] . "','" . $_POST["mobile"] . "','" . $_POST["bloodtype"] . "','" . $_POST["email"] . "','" . $_POST["address"] .  "','" . $_POST["password"] .  "','" . $target_file  ."')";
			
			//$s="INSERT INTO donarregistration(name,gender,age,mobile,b_id,email,pswd,pic) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9])"
	$result=mysqli_query($conn,$s);
	//mysqli_close($conn);
	if($result ===true)
	{
	 mail($email,$content_form,$msg,implode("\r\n",$headers));
	  $_SESSION['message'] = "Registration successful!";
	}
	else
	{$_SESSION['message'] = "Registration Not successful!";
	}
		} else{
			$_SESSION['message'] = "sorry there was an error uploading your file!!!.";
            
		}	
        
	
	}
    mysqli_close($conn);
}
?> 


<html>
    <head>
        <title>nitc life saver</title>
		
		
		    

    </head>
	
	 <body onload="Captcha();">
       
	<div id="st">
	<font id="st6">	Admin</font>
	<form action="" method="POST">
		<input id="input1" type="text" name="admin" placeholder="Login" />
		 <input id="input2" type="password" name="pwd" placeholder="Password"/>
				<input type="submit" style="position:absolute;top:40px;left:1290px;" name="submit" value="Go">
				<a href="#" style="color:#cc0000; position:absolute;  text-decoration:none; top:64px; left:1072px">forgotton Password?</a>
				
				</form>
		</div>
		
		<div id="st9">
		<font id="st3">Health . Blood .Medicine</font>
		<font id="st4">"Let food be thy medicine  And medicine be thy food"</font>
		
	<form action="" method="POST">
		<div id="nav">
		
		<ul>
			<li><a href="doner_registration.php" class="active">Register</a></li>
			<li  style="position:absolute;left:280px;"><a href="donor_login.php">Login</a></li><br></ul>
	
	<link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="donor_registration.css" type="text/css">
<div class="body-content">
  <div class="module">
    
    <form class="form" action="doner_registration.php" method="post" enctype="multipart/form-data" autocomplete="off"/>
      <div class="alert alert-error"><?= $_SESSION['message'] ?></div>
      <input type="text" placeholder="First Name" name="firstname" required />
        <input type="text" placeholder="Last Name" name="lastname" required />
        <input type="text" placeholder="Age" name="age" required />
        <input type="text" placeholder="Mobile" name="mobile" required />
        <select name="bloodtype">
		<option><B>Select Blood Type</option>
		<option><B>B+</option>
		<option><B>B-</option>
		<option><B>O+</option>
		<option><B>O-</option>
		<option><B>AB+</option>
		<option><B>AB-</option>
		<option><b>A+</option></select><br>
      <input type="email" placeholder="Email" name="email" required />
        <input type="text" placeholder="Address" name="address" required />
      <input type="password" placeholder="Password" name="password" autocomplete="new-password" required />
      <input type="password" placeholder="Confirm Password" name="confirmpassword" autocomplete="new-password" required />
      <div class="avatar"><label>Select your avatar: </label><input type="file" name="avatar" accept="image/*" required /></div>
	    <input type="submit" value="login" name="register" class="btn btn-block btn-primary" />
	 
    </form>
  </div>
</div>

<div style="height:50px; width:100%;background:#b16f35; position:absolute;bottom:-200px;left:0px;">
<p style="color:#fefbc8">&copy; 2017 Designed by NITC Calicut<p>
</div>
    </body>
</html>

		
		
		
