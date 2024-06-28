<?php
session_start();
require_once('config/config.php');
//if no session created the pages that require login ID and password won't open
if (!isset($_SESSION["username"]))
{
    echo "<meta http-equiv=\"refresh\" content=\"0; url=login.php\">";
}
?>


<html>
<head>
	<title>
	Change Password
	</title>
	<!-- CSS -->
	<link href="css/index.css" rel="stylesheet" type="text/css"/>
     <link rel="icon" href="img/favicon.png" type="image/png">
	<link href="css/viewdetails.css" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet"  href="css/form_login.css">
	
	<!-- Java Script -->
	<script type="text/javascript">
	
		function qwerty()
		{
		}
		
		
		function validate()
		{
			//Password must be same
			var password=document.getElementById("newpassword1").value;
			var cpassword=document.getElementById("newpassword2").value;
			
			if(password!=cpassword)
				{
			alert("Please enter same password");
			return false;
			}
			
			//Password Hints for new  password
			var pass=document.getElementById("newpassword1").value;
			if (!pass.match(/^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])([a-zA-Z0-9]{8,15})$/)) 
			{
				alert("Enter a valid Password");
				return false;
			}
			
			
			
			
				
			
			
		}
	</script>
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

	
									 <a id="c"  href="index1.php" name="home" style="text-decoration: none">Home  </a>
	<span style="padding-left:5px">  <a id="c" href="connectwithus.php" style="text-decoration: none">Connect with us</a>
	<span style="padding-left:5px">  <a id="c" href="#" style="text-decoration: none">Facebook</a>
	<span style="padding-left:5px">  <a id="c" href="#" style="text-decoration: none">Twitter</a>
	
	<span style="padding-left:765px"><a id="e" href="logout.php" style="text-decoration: none">Logout</a>
	
	</div>
	
	
	<!-- main -->
	<div id="main">
		<div class="left-sub1"> 
				<span style="padding-left:10px"><a id="d" href="viewdetails.php" style="text-decoration: none">View your details</a><br><br>
				<span style="padding-left:5px"><a id="d" href="updatedetails.php" style="text-decoration: none">Update your details</a><br><br>
				<a id="d" href="changepassword.php" style="text-decoration: none">Change your password</a><br><br>
				<span style="padding-left:25px"><a id="d" href="billdetails.php" style="text-decoration: none">Bill Details</a><br><br>
				<span style="padding-left:20px"><a id="d" href="printbill.php" style="text-decoration: none">Print your Bill</a><br><br>
				<span style="padding-left:25px"><a id="d" href="paybill.php" style="text-decoration: none">Pay your Bill</a><br><br>
				<span style="padding-left:30px"><a id="d" href="#" style="text-decoration: none">Your Mail</a><br><br>
		</div>
		
		
			
	
		
		<div class="middle-sub1">
	
		<center><b>
		<form class="form" action="" method="post" enctype="multipart/form-data" onsubmit="return validate()"  >
			<h1><u>Change Password</u></h1><br>
			
			<table>
			
			<tr>
			<td><b>Username:</td>
			<td><input type="textview" class="ushow_id" name="username" id="Uname" readonly="readonly" value="<?php echo $_SESSION['username'] ?>"></input>
			</tr>
			
			<tr>
			<td><b>Current Password:</td>
			<td>
			
			<input type="password" class="ushow_id" name="oldpassword" id="Pass" placeholder="Enter your password" required> </b>   
			
			<div class="tooltip">!
				<span class="tooltiptext">1)Password must be between 8 to 15 characters<br>
										  2)Passowrd must have 1 Upper Case Character<br>
										  3)Passowrd must have 1 Lower Case Character<br>
										  4)Passowrd must have 1 Numeric Character<br>
										  5)No special characters are allowed<br></span>
				
			</div>
			
			</tr>
			
			<tr>
			<td><b>New Password:</td>
			<td><input type="password" class="ushow_id" name="newpassword1" id="newpassword1" placeholder="Enter new password" required></input>
			</tr>
			
			<tr>
			<td><b>Repeat New Password:</td>
			<td><input type="password" class="ushow_id" name="newpassword2" id="newpassword2" placeholder="Repeat New Password" required ></input>
			</tr>
			
			

			</table>
			<input type="submit" style="width:170px" name="change_pass" class="Register" value="Change Password"><br>
			</form>
			
				
		</div>
		
		<?php
		
		
				
				
				
				//password change code
			 if(isset($_POST['change_pass']))
			 {
				
					$username = $_POST['username'];
				 $oldpassword = $_POST['oldpassword'];
				 $newpassword1 = $_POST['newpassword1'];
				 $newpassword2 = $_POST['newpassword2'];
				  $enctyped_passwordold = md5($oldpassword);
				  $enctyped_passwordnew = md5($newpassword1);
				 
				
				//check if current password is right or wrong
				$query = "select password,password_real from registration WHERE username='$username' ";
				$result = mysqli_query($con,$query);

				$row = mysqli_fetch_array($result);
				
				$row1=$row['password'];
				
				
				if ($enctyped_passwordold===$row1)
				{
				
				
				 //if current password is right,update password code
				$query="UPDATE  registration  SET password='$enctyped_passwordnew',password_real='$newpassword1' 
                WHERE password='$enctyped_passwordold' && username='$username'";
				$query_run = mysqli_query($con,$query);		
					
					if($query_run) 
						{
							session_destroy();
							echo "<script>
							alert('Password has been updated');
							window.location.href='login.php';
							</script>";
						}
				}
				
				
				//if current password is wrong
				else
						{
							echo '<script type="text/javascript"> alert("Current password is wrong!!") </script>';
						}
				
					
				
							
				
			 }
			 
			 
			?>
		
			
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
	