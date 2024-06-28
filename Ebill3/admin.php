<?php
session_start();
require 'config/config.php';


?>
<html>
<head>
	<title>
	Admin 
	</title>
	<!-- CSS -->
	<link href="css/index.css" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet"  href="css/form_login.css">
</head>

<body style="background-color:#34efe0">
	<!-- header -->
<div id="header">
	<table>
	<tr>
	<td> <span style="padding-left:350px"><a  href="index.php" style="text-decoration: none" target="_parent"> <b><font id="font1">Online Electric Bill Payment</font></b></span></a></td>
	<td> <span style="padding-left:180px"><a  href="index.php"><img id="logo"  src="img/logo.jpg" height="70px" alt="logo.png" /></span></a></td>
	</table>
	
	</tr>
	</div>
	
	<!-- main-wrapper -->
	<div id="main-wrap">
									 <a id="c" href="index.php" style="text-decoration: none">Home  </a>
	<span style="padding-left:5px">  <a id="c" href="#" style="text-decoration: none">Connect with us</a>
	<span style="padding-left:5px">  <a id="c" href="#" style="text-decoration: none">Facebook</a>
	<span style="padding-left:5px">  <a id="c" href="#" style="text-decoration: none">Twitter</a>
	
	</div>
	
	
	<!-- main -->
	<div id="main">
		<div class="left-sub1"> 
				<span style="padding-left:35px"><a id="d" href="admin.php" style="text-decoration: none">ADMIN</a><br><br>
				<!--
				<span style="padding-left:10px"><a id="d" href="viewdetails.php" style="text-decoration: none">View your details</a><br><br>
				<span style="padding-left:5px"><a id="d" href="updatedetails.php" style="text-decoration: none">Update your detals</a><br><br>
				<a id="d" href="changepassword.php" style="text-decoration: none">Change your password</a><br><br>
				<span style="padding-left:25px"><a id="d" href="billdetails.php" style="text-decoration: none">Bill Details</a><br><br>
				<span style="padding-left:20px"><a id="d" href="printbill.php" style="text-decoration: none">Print your Bill</a><br><br>
				<span style="padding-left:25px"><a id="d" href="#" style="text-decoration: none">Pay your Bill</a><br><br>
				-->	
				<span style="padding-left:35px"><a id="d" href="aboutus.php" style="text-decoration: none">About Us</a><br><br>
				<span style="padding-left:2px"><a id="d" href="img/Electric Bill Payment.jpg " download style="text-decoration: none">Download our App</a><br><br>
				<span style="padding-left:25px"><a id="d" href="login.php" style="text-decoration: none">Pay your bill</a><br><br>
				<span style="padding-left:6px"><a id="d" href="report.php" style="text-decoration: none">Report Something</a><br><br>
				
			</div>
		
	<div class="middle-sub1">
			<center><h2><u>Admin Login</u></h2>
			<img src="img/avatar.png" class="avatar">
			<form class="form" action="admin.php" method="post" onsubmit="return validate()" >
			<label><b> Username:</label><br>
			<input type="text" class="u_id" name="uname" id="Uname" placeholder="Enter your username" required><br>
			<label> Password:</b></label><br>
			<input type="password" class="u_id" name="pass" id="Pass" placeholder="Enter your password" required><br>
			
			<input type="submit" name="login" class="login" value="Login"><br>

			</form>
			</center>
		<?php
		if(isset($_POST['login']))
		{
			$username = $_POST['uname'];
			$password = $_POST['pass'];
			$enctyped_password = md5($password);
			
			
			$query= "select * from admin where username='$username' AND password='$enctyped_password';   ";
			
			
			$query_run=mysqli_query($con,$query);
			if(mysqli_num_rows($query_run)>0)
			{
				$row = mysqli_fetch_assoc($query_run);
				
				//valid
				$_SESSION['adminusername']=$row['username'];
				
			
			
			header('location:welcomeadmin.php'); 
			}
			
			else
			{
				//invalid
				echo '<script type="text/javascript"> alert("You are not a admin") </script>';
			}
		}
		?>
		
		
		</div>
		
	
	</div>
	
	</body>
	</html>
	