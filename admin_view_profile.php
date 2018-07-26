<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
  <title>Nitc Life Saver</title>
  <link rel="stylesheet" type="text/css" href="home.css">
    <style type="text/css">
	 
		
		table {
			position:absolute;
			top:300px;
			left:180px;
			font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
			font-size: 7px;
		}

		h1 {
			margin: 25px auto 0;
			text-align: center;
			text-transform: uppercase;
			font-size: 17px;
		}

		table td {
			transition: all .5s;
		}
		
		/* Table */
		.data-table {
			border-collapse: collapse;
			font-size: 14px;
			min-width: 537px;
		}

		.data-table th, 
		.data-table td {
			border: 1px solid #e1edff;
			padding: 3px 10px;
		}
		.data-table caption {
			margin: 7px;
		}

		/* Table Header */
		.data-table thead th {
			background-color:#b16f35;
			color: #FFFFFF;
			border-color: #6ea1cc !important;
			text-transform: uppercase;
		}

		/* Table Body */
		.data-table tbody td {
			color: #353535;
		}
		.data-table tbody td:first-child,
		.data-table tbody td:nth-child(4),
		.data-table tbody td:last-child {
			text-align: right;
		}

		.data-table tbody tr:nth-child(odd) td {
			background-color: #ADD8E6;
		}
		.data-table tbody tr:hover td {
			background-color: #FF6347;
			border-color: #FFDAB9;
		}

		
		
	</style>
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
  <li><a href="admin_home.php">Home</a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Profile</a>
    <div class="dropdown-content">
      <a href="admin_view_profile.php">View Profile</a>

    </div>
  </li>
  
 <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Appointment</a>
    <div class="dropdown-content1">
      <a href="view_normal_admin.php">Normal</a>
      <a href="view_quick_admin.php">Quick</a>
    </div>
  </li>
  
	
  
	<li class="dropdown">
    <a href="view_bood_request.php" class="dropbtn">View Request</a>
   
  </li>
  
	
	<li><a href="admin_view_contact.php">Contact Us</a></li>
	<li style="position:absolute;left:1200px"><a href="logout.php">Log Out</a></li>
  
</ul>
</div>
 	<table class="data-table" style="position:absolute; top:300px;left:200px;">
		
		<thead>
			<tr>
				<th>NO</th>
				<th>FIRST NAME</th>
                <th>LAST NAME</th>
				<th>AGE</th>
				<th>MOBILE</th>
				<th>BLOOD TYPE</th>
				<th>EMAIL</th>
                <th>ADDRESS</th>
				
			</tr>
		</thead>
		<tbody>
		<?php
		include "make_connection.php";

$sql= "select * from register";

$result = mysqli_query($conn,$sql);

		$no 	= 1;
		
		while ($row = mysqli_fetch_array($result))
		{
			
			echo '<tr>
					<td>'.$no.'</td>
					<td>'.$row[1].'</td>
					<td>'.$row[2].'</td>
					<td>'.$row[3].'</td>
					<td>'.$row[4].'</td>
					<td>'.$row[5].'</td>
                    <td>'.$row[6].'</td>
                    <td>'.$row[7].'</td>
								
				</tr>';
			
			$no++;
		}?>
		</tbody>
		
	</table>
	
</body>

</html>