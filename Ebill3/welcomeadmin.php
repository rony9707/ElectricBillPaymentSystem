<?php
session_start();
require 'config/config.php';

if (!isset($_SESSION["adminusername"]))
{
    echo "<meta http-equiv=\"refresh\" content=\"0; url=admin.php\">";
}
?>
<html>
<head>
	<title>
	Welcome Admin
	</title>
	<!-- CSS -->
	<link href="css/index.css" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet"  href="css/form_login.css">
     <link rel="icon" href="img/favicon.png" type="image/png">
</head>

<body style="background-color:#34efe0">
	<!-- header -->
<div id="header">
	<table>
	<tr>
	<td> <span style="padding-left:350px"><a  href="index1.php" style="text-decoration: none" target="_parent"> <b><font id="font1">Online Electric Bill Payment</font></b></span></a></td>
	<td> <span style="padding-left:180px"><a  href="index1.php"><img id="logo"  src="img/logo.jpg" height="70px" alt="logo.png" /></span></a></td>
	</table>
	
	</tr>
	</div>
	
	<!-- main-wrapper -->
	<div id="main-wrap">
									 <a id="c" href="index1.php" style="text-decoration: none">Home  </a>
	<span style="padding-left:5px">  <a id="c" href="connectwithus.php" style="text-decoration: none">Connect with us</a>
	<span style="padding-left:5px">  <a id="c" href="#" style="text-decoration: none">Facebook</a>
	<span style="padding-left:5px">  <a id="c" href="#" style="text-decoration: none">Twitter</a>
	
	</div>
	
	
	<!-- main -->
	<div id="main">
		<div class="left-sub1"> 
				
				<!--
				<span style="padding-left:10px"><a id="d" href="viewdetails.php" style="text-decoration: none">View your details</a><br><br>
				<span style="padding-left:5px"><a id="d" href="updatedetails.php" style="text-decoration: none">Update your detals</a><br><br>
				<a id="d" href="changepassword.php" style="text-decoration: none">Change your password</a><br><br>
				<span style="padding-left:25px"><a id="d" href="billdetails.php" style="text-decoration: none">Bill Details</a><br><br>
				<span style="padding-left:20px"><a id="d" href="printbill.php" style="text-decoration: none">Print your Bill</a><br><br>
				<span style="padding-left:25px"><a id="d" href="#" style="text-decoration: none">Pay your Bill</a><br><br>
				-->	
				<span style="padding-left:35px"><a id="d" href="aboutus.php" style="text-decoration: none">About Us</a><br><br>
				<span style="padding-left:2px"><a id="d" href="download/Electric%20Bill%20Payment.jpg" style="text-decoration: none">Download our App</a><br><br>
				<span style="padding-left:25px"><a id="d" href="login.php" style="text-decoration: none">Pay your bill</a><br><br>
				<span style="padding-left:6px"><a id="d" href="report.php" style="text-decoration: none">Report Something</a><br><br>
				
			</div>
		
	<div class="middle-sub1">
			<center><h2><u>Welcome Admin</u> </h2><br><br>
			<input type="button" onclick="window.location.href='cdetails.php'" name="logout" class="logout" value="Customer Details"><br>
            <input type="button" onclick="window.location.href='cpayments.php'" name="logout" class="logout" value="Customer Payments"><br>   
			<input type="button" onclick="window.location.href='creports.php'" name="logout" class="logout" value="Customer Reports"><br>
            <input type="button" onclick="window.location.href='updatep2np.php'" name="logout" class="logout" value="Update Paid to Not Paid"><br>
            <input type="button" onclick="window.location.href='generatenewbill.php'" name="logout" class="logout" value="Generate New Bill"><br>
			
			
		<?php
		if(isset($_POST['logout']))
			{
			session_destroy();
		 
			header('location:admin.php');
			}
		?>
		
                
                
        
		
                
                
                
                
                
		</div>
		<form class="form" action="" method="post" onsubmit="return validate()" >
			<center>	<input type="submit" name="logout" class="logout" value="Logout"><br></center>
			</form>
	
	</div>
	
	</body>
	</html>
	