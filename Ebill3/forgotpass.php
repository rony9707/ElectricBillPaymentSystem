<?php
session_start();

require 'config/config.php';


//$pass = isset($_POST['email']);
//echo '<td><input class="text" type="text" id="txtLogin" name="txtLogin" value="'. $pass .'"></td>';

?>
<html>
<head>
	<title>
	Forgot Password
	</title>
	<!-- CSS -->
	<link href="css/index.css" rel="stylesheet" type="text/css"/>
     <link rel="icon" href="img/favicon.png" type="image/png">
	<link rel="stylesheet"  href="css/form_login.css">
	
	<!-- JavaScript -->
	
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
			<!--	<span style="padding-left:35px"><a id="d" href="admin.php" style="text-decoration: none">ADMIN</a><br><br>
				
				<span style="padding-left:10px"><a id="d" href="viewdetails.php" style="text-decoration: none">View your details</a><br><br>
				<span style="padding-left:5px"><a id="d" href="updatedetails.php" style="text-decoration: none">Update your detals</a><br><br>
				<a id="d" href="changepassword.php" style="text-decoration: none">Change your password</a><br><br>
				<span style="padding-left:25px"><a id="d" href="billdetails.php" style="text-decoration: none">Bill Details</a><br><br>
				<span style="padding-left:20px"><a id="d" href="printbill.php" style="text-decoration: none">Print your Bill</a><br><br>
				<span style="padding-left:25px"><a id="d" href="#" style="text-decoration: none">Pay your Bill</a><br><br>
				-->	
				<span style="padding-left:35px"><a id="d" href="aboutus.php" style="text-decoration: none">About Us</a><br><br>
				<span style="padding-left:2px"><a id="d" href="img/Electric Bill Payment.jpg" download style="text-decoration: none">Download our App</a><br><br>
				<span style="padding-left:25px"><a id="d" href="login.php" style="text-decoration: none">Pay your bill</a><br><br>
				<span style="padding-left:6px"><a id="d" href="report.php" style="text-decoration: none">Report Something</a><br><br>
				
			</div>
		
	<div class="middle-sub1">
			<center><h1><u>Forgot Password Form</h1></u>
			<form method="post">
			<table>
             <tr>
			<td>
			<label><b> Enter Username:</label><br>
			</td>
			<td>
			<input type="text" class="u_id" name="username" id="username" placeholder="Enter your username" required><br>
			</td>
			</tr>   
                
                
                
			<tr>
			<td>
			<label><b> Enter Email:</label><br>
			</td>
			<td>
			<input type="email" class="u_id" name="email" id="email" placeholder="Enter your email" required><br>
			</td>
			</tr>
			
			<tr>
			<td>
			<label><b> Your Password:</label><br>
			</td>
			<td>
			<?php
			
					$pass = isset($_POST['email']);
					if(isset($_POST['email']))
					{
							$email= $_POST['email'];
                            $username= $_POST['username'];
							$selectquery= mysqli_query($con,"select * from registration where email='{$email}' && username='{$username}'") or die(mysqli_error($con));
							$count = mysqli_num_rows($selectquery);
							$row = mysqli_fetch_array($selectquery);
							
							if($count>0)
							{
								// echo $row['password_real'];
								echo '<input class="u_id" type="text" readonly="readonly"  id="password" name="password" value="'. $row['password_real'] .'">'; 
                                
                                
                                
                                       

                                    

							}
					
							else
							{
								echo '<script type="text/javascript"> alert("Wrong Email OR Password Entered!!") </script>';
							}
						
					}
			?>
			
			
			</td>
			</tr>
			
		
			
			</table>
			<input type="submit" name="submit" class="login" value="Send"><br>
		  <input type="button" name="submit" onclick="window.location='login.php';" class="login" value="Back"><br>
		
		</div>
		</form>
	
	</div>
	<div id="marquee-msg">
    
         <marquee onmouseover="stop()" onmouseout="start()">The last date for Electric bill payment for this month is <?php          $duedate=date("Y-m-11");
                                                                                $curdate=date("Y-m-d");
                                                                                $nextmonth=date('Y-m-11',strtotime("+1 month"));
                                                                                    
                                                                            echo $duedate;
                                                                    ?><span style="padding-left:30px">
                    
                        From 28th of current month till the last date of the same month, payments are not possible
                    
                    </marquee>
             
            
    </div>
	</body>
	</html>
	