<?php
session_start();
include "config/config.php";
include "config/configbank.php";

?>
<html>
<head>
	<title>
	Login Page
	</title>
	<!-- CSS -->
	<link href="css/index.css" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet"  href="css/form_login.css">
    <link href="css/index.css" rel="stylesheet" type="text/css"/>
    <link rel="icon" href="img/favicon.png" type="image/png">
	
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
			<center><h2>Login Form</h2>
			<img src="img/avatar.png" class="avatar">
			<form class="form" action="login.php" method="post" onsubmit="return validate()" >
			<label><b> Username:</label><br>
			<input type="text" class="u_id" name="uname" id="Uname" placeholder="Enter your username" required><br>
			<label> Password:</b></label><br>
			<span style="padding-left:10px">
			<input type="password" class="p_id" name="pass" id="Pass" placeholder="Enter your password" required> </b>     
			
			<div class="tooltip">!
				<span class="tooltiptext">1)Password must be between 8 to 15 characters<br>
										  2)Passowrd must have 1 Upper Case Character<br>
										  3)Passowrd must have 1 Lower Case Character<br>
										  4)Passowrd must have 1 Numeric Character<br>
										  5)No special characters are allowed<br></span>
				
			</div><br>
			Forgot Password? Click <a href="forgotpass.php">here</a><br>
			<input type="submit" name="login" class="login" value="Login"><br>
			
			<input type="button" class="register" value="Register" onclick="window.location.href='register.php'"><br>
			</form>
			</center>
		<?php
        
    
		if(isset($_POST['login']))
		{
			$username = $_POST['uname'];
			$password = $_POST['pass'];
           
			$enctyped_password = md5($password);
			
			//CODE TO CREATES SESSIONS FROM EBILL DATABASE
			$query= "select * from registration where username='$username' AND password='$enctyped_password';   ";
			
			
			$query_run=mysqli_query($con,$query);
			if(mysqli_num_rows($query_run)>0)
			{
				$row = mysqli_fetch_assoc($query_run);
				
				//valid
				$_SESSION['username']=$row['username'];
				$_SESSION['imglink']=$row['imglink'];
				$_SESSION['fullname']=$row['fullname'];	
				$_SESSION['phone_number']=$row['phone_number'];	
				$_SESSION['email']=$row['email'];	
				$_SESSION['age']=$row['age'];
				$_SESSION['c_id']=$row['c_id'];	
				$_SESSION['address']=$row['address'];
				$_SESSION['password_real']=$row['password_real'];
				
			
			$query= "select * from billgenerate where username='$username' ";
			$query_run=mysqli_query($con,$query);
			$row = mysqli_fetch_assoc($query_run);
				$_SESSION['bill']=$row['bill'];	
				$_SESSION['units']=$row['units'];
				$_SESSION['cmonth']=$row['cmonth'];	
				$_SESSION['duedate']=$row['duedate'];
				
				
           $query= "select * from status where username='$username' ";
			$query_run=mysqli_query($con,$query);
			$row = mysqli_fetch_assoc($query_run);
                $_SESSION['status']=$row['status'];	
				
				
         //CODE TO CREATES SESSIONS FROM BANK DATABASE
            
			
	/*		$query= "select * from registration where fullname='$constant' ; ";
			$query_run=mysqli_query($conn,$query);
			if(mysqli_num_rows($query_run)>0)
			{
				$row = mysqli_fetch_assoc($query_run);
				
				//valid
				$_SESSION['usernameB']=$row['username'];
				
				$_SESSION['fullnameB']=$row['fullname'];	
				$_SESSION['phone_numberB']=$row['phone_number'];	
				$_SESSION['emailB']=$row['email'];	
				
				$_SESSION['c_idB']=$row['c_id'];	
				$_SESSION['addressB']=$row['address'];
				$_SESSION['password_realB']=$row['password_real'];
				
			
			$query= "select * from credit where fullname='$constant' ";
			$query_run=mysqli_query($conn,$query);
			$row = mysqli_fetch_assoc($query_run);
				$_SESSION['balancecredit']=$row['balance'];	
				$_SESSION['c1']=$row['c1'];
				$_SESSION['c2']=$row['c2'];	
				$_SESSION['c3']=$row['c3'];
				$_SESSION['c4']=$row['c4'];
                $_SESSION['cvvcredit']=$row['cvv'];
                $_SESSION['monthcredit']=$row['month'];
                $_SESSION['yearcredit']=$row['year'];
				
           $query= "select * from debit where fullname='$constant' ";
			$query_run=mysqli_query($conn,$query);
			$row = mysqli_fetch_assoc($query_run);
                $_SESSION['balancedebit']=$row['balance'];	
				$_SESSION['d1']=$row['c1'];
				$_SESSION['d2']=$row['c2'];	
				$_SESSION['d3']=$row['c3'];
				$_SESSION['d4']=$row['c4'];
                $_SESSION['cvvdebit']=$row['cvv'];
                $_SESSION['monthdebit']=$row['month'];
                $_SESSION['yeardebit']=$row['year'];
                
            }*/
			header('location:welcomeuser.php'); 
			
            }
			else
			{
				//invalid
				echo '<script type="text/javascript"> alert("Username or Password is not correct") </script>';
			}
		}
       
   
		?>
		
		
		</div>
		
	
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
	