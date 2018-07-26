

<!DOCTYPE html>
<html>
<head>
<title>nitc</title>
		<link rel="stylesheet" type="text/css" href="home.css">
		
<style>
.main_div{text-align:center; background: #00C492; padding:20px; width:100%;height:600px;position:absolute;top:200px;}
.inner_div{background: #fff; margin-top:20px; height: 100px;}
.buttons a{font-size: 16px;}
.buttons a:hover{cursor:pointer; font-size: 16px;}
</style>
<script>
    var divs = ["Menu1", "Menu2", "Menu3", "Menu4"];
    var visibleDivId = null;
    function toggleVisibility(divId) {
      if(visibleDivId === divId) {
        visibleDivId = null;
      } else {
        visibleDivId = divId;
      }
      hideNonVisibleDivs();
    }
    function hideNonVisibleDivs() {
      var i, divId, div;
      for(i = 0; i < divs.length; i++) {
        divId = divs[i];
        div = document.getElementById(divId);
        if(visibleDivId === divId) {
          div.style.display = "block";
        } else {
          div.style.display = "none";
        }
      }
    }
</script>
</head>
<body>
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

<div class="main_div">
<div class="buttons">
<a href="#" onclick="toggleVisibility('Menu1');">Beath The Myth.</a> | <a href="#" onclick="toggleVisibility('Menu2');">Before Your Donation.</a> | <a href="#" onclick="toggleVisibility('Menu3');">During Your Donation</a>
</div>


<div id="Menu1" style="display: none;"><hr>
     <h1><u>Beath The Myth.</u></h1>
    <p>Donating blood is safe and simple. It takes approximately 10-15 minutes to complete the blood donation process. Any healthy adult between 18 years and 60 years of age can donate blood. This is what you can expect when you are ready to donate blood:</p>
 
        <li> You walk into a reputed and safe blood donation centre or a mobile camp organized by a reputed institution.</li>
        <li>A few questions will be asked to determine your health status (general questions on health, donation history etc). Usually you will be asked to fill out a short form.</li>
        <li>Then a quick physical check will be done to check temperature, blood pressure, pulse and hemoglobin content in blood to ensure you are a healthy donor.</li>
        <li>If found fit to donate, then you will be asked to lie down on a resting chair or a bed. Your arm will be thoroughly cleaned. Then using sterile equipments blood will be collected in a special plastic bag. Approximately 350 ml of blood will be collected in one donation. Those who weigh more than 60 Kg can donate 450 ml of blood.</li>
        <li>Then you must rest and relax for a few minutes with a light snack and something refreshing to drink. Some snacks and juice will be provided.</li>
        <li>Blood will be separated into components within eight hours of donation</li>
        <li>The blood will then be taken to the laboratory for testing.</li>
        <li>Once found safe, it will be kept in special storage and released when required.</li>
        <li>The blood is now ready to be taken to the hospital, to save lives.</li>
    </ul></div>
		<div id="Menu2" style="display: none;"><hr>
		<h1><u>Before Your Donation.</u></h1>
	<ul>
        <li> A healthy iron level in your diet by eating iron rich foods, such as red meat, fish, poultry, beans, spinach, iron-fortified cereals and raisins.</li>
        <li>Get a good night's sleep.</li>
        <li>Drink an extra 16 oz. of water or nonalcoholic fluids before the donation.</li>
        <li>Eat a healthy meal before your donation. Avoid fatty foods, such as hamburgers, fries or ice cream before donating. (Fatty foods can affect the tests we do on your blood. If there is too much fat in your blood, your donation cannot be tested for infectious diseases and the blood will not be used for transfusion.)</li>
        <li>If you are a platelet donor, remember that your system must be free of aspirin for two days prior to donation.</li>
        <li>Remember to bring your donor card, driver's license or two other forms of ID.</li>
    </ul></div>
<div id="Menu3" style="display: none;"><hr>
    <h1><u>During Your Donation.</u></h1>
    <ul>
        <li> Wear clothing with sleeves that can be raised above the elbow.</li>
        <li>Let the person taking your blood know if you have a preferred arm and show them any good veins that have been used successfully in the past to draw blood.</li>
        <li>Relax, listen to music, talk to other donors or read during the donation process.</li>
        <li>Take the time to enjoy a snack and a drink in the refreshments area immediately after donating.</li>
    </ul></div>
</div>


   

    
</body>
</html>
