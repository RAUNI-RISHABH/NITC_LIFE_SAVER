<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
        <title>nitc life saver</title>
         <script type="text/javascript">
                 function Captcha(){
                     var alpha = new Array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z');
                     var i;
                     for (i=0;i<6;i++){
                       var a = alpha[Math.floor(Math.random() * alpha.length)];
                       var b = alpha[Math.floor(Math.random() * alpha.length)];
                       var c = alpha[Math.floor(Math.random() * alpha.length)];
                       var d = alpha[Math.floor(Math.random() * alpha.length)];
                       var e = alpha[Math.floor(Math.random() * alpha.length)];
                       var f = alpha[Math.floor(Math.random() * alpha.length)];
                       var g = alpha[Math.floor(Math.random() * alpha.length)];
                      }
                    var code = a + ' ' + b + ' ' + ' ' + c + ' ' + d + ' ' + e + ' '+ f + ' ' + g;
                    document.getElementById("mainCaptcha").value = code
                  }
                  function ValidCaptcha(){
                      var string1 = removeSpaces(document.getElementById('mainCaptcha').value);
                      var string2 = removeSpaces(document.getElementById('txtInput').value);
                      if (string1 == string2){
                        return true;
                      }
                      else{        
                        return false;
                      }
                  }
				   function removeSpaces(string){
                    return string.split(' ').join('');
                  }
             </script>
    
    </head>
    <body>
	
	<div id="st">
	<font id="st6">	Admin</font>
	<form action="admin.php" method="POST">
		<input id="input1" type="text" name="admin" placeholder="Login" />
		 <input id="input2" type="password" name="pwd" placeholder="Password"/>
				<input type="submit" style="position:absolute;top:40px;left:1290px;" name="submit" value="Go">
				<a href="forget1.php" style="color:#cc0000; position:absolute; top:70px; text-decoration:none; left:1072px"><center>Forgotten Account?</center></a>
				
				</form>
		</div>
		
		<div id="st1">
		<font id="st3" style="position:absolute;top:-20px;">Health . Blood .Medicine</font>
		<font id="st4" style="position:absolute;top:50px;">"Let food be thy medicine  And medicine be thy food"</font>
		<div id="nav1">
		
		<ul style="position:absolute; top:-90px;">
		
			<li><a href="doner_registration.php">Register</a></li>
			<li style="position:absolute;left:300px;"><a href="donor_login.php" class="active1">Login</a></li><br></ul>

	<link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="donor_registration.css" type="text/css">
<div class="body-content">
  <div class="module" style="position:absolute;top:-80px;">
      	

    <form class="form" action="server_donor_login.php" method="post" >
 
      
      <input type="email" placeholder="username" name="username" title="please enter your registered email id" required />
    
      <input type="password" placeholder="Password" name="password" autocomplete="new-password" required />
        <input type="text" name="text1" id="mainCaptcha" style="border:none;" readonly/>
              <input type="button" id="refresh" value="Refresh" onclick="Captcha();" />
			  <input type="text" name="text2" id="txtInput"/> 
			  <!--- <input id="Button1" type="button" value="Check" onclick="alert(ValidCaptcha());"/>-->
	  	  
      <input type="submit" value="login" name="submit" class="btn btn-block btn-primary" />
    </form>
  </div>
</div>

<div style="height:20px; width:100%;background:#b16f35; position:absolute;bottom:-20px;left:0px;">
<p style="color:#fefbc8">&copy; 2017 Designed by NITC Calicut<p>
</div>



    </body>
</html>