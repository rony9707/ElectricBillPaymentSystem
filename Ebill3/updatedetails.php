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
	Update Details
	</title>
	<!-- CSS -->
	<link href="css/index.css" rel="stylesheet" type="text/css"/>
	<link href="css/viewdetails.css" rel="stylesheet" type="text/css"/>
     <link rel="icon" href="img/favicon.png" type="image/png">
	<link rel="stylesheet"  href="css/form_login.css">
	
	<!-- Java Script -->
	<script type="text/javascript">
	
	
		//Script to only input number in input typer text 
		function isNumber(evt) {
			evt = (evt) ? evt : window.event;
			var charCode = (evt.which) ? evt.which : evt.keyCode;
			if (charCode > 31 && (charCode < 48 || charCode > 57)) {
			return false;
			}
				return true;
			}		
		
			
		
			//Script to only input alphabets in input typer text 
				function onlyAlphabets(e, t) {
            try {
                if (window.event) {
                    var charCode = window.event.keyCode;
                }
                else if (e) {
                    var charCode = e.which;
                }
                else { return true; }
                if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123) || (charCode == 32))
                    return true;
                else
                    return false;
            }
            catch (err) {
                alert(err.Description);
            }
        }
	
			
		
		
		function validate()
		{
			//Fullname must be in characters
			var val = document.getElementById("Fname").value;
   
			if (!val.match(/^[a-z A-Z]+$/)) 
			{
				alert("Only Use Alphabets in Full Name");
				return false;
			}
			
			
				
			
			//Phone number must be in numbers
			var pno=document.getElementById("PNumber").value;
			if(isNaN(pno))
			{
			alert("Phone Number must be in numbers");
			return false;
			}
			
			//Phone nubmer must be 10 digit
			var pnumber_id=document.getElementById("PNumber").value;
			if(pnumber_id.length!=10)
			{
				alert("Phone number must be 10 digits");
				return false;
			}
			
			//Age must be in numbers
			var age=document.getElementById("Age").value;
			if(isNaN(age))
			{
			alert("Age must be in numbers");
			return false;
			}
			
			//Age must not be more than 130
			var age=document.getElementById("Age").value;
			if(age<1 || age>130)
			{
				alert("Please Enter Valid Age");
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
			<span style="padding-left:10px">	<a id="d" href="viewdetails.php" style="text-decoration: none">View your details</a><br><br>
				<span style="padding-left:5px"><a id="d" href="updatedetails.php" style="text-decoration: none">Update your details</a><br><br>
				<a id="d" href="changepassword.php" style="text-decoration: none">Change your password</a><br><br>
				<span style="padding-left:25px"><a id="d" href="billdetails.php" style="text-decoration: none">Bill Details</a><br><br>
				<span style="padding-left:20px"><a id="d" href="printbill.php" style="text-decoration: none">Print your Bill</a><br><br>
				<span style="padding-left:25px"><a id="d" href="paybill.php" style="text-decoration: none">Pay your Bill</a><br><br>
				<span style="padding-left:30px"><a id="d" href="#" style="text-decoration: none">Your Mail</a><br><br>
				
			</div>
		
	<div class="middle-sub1">
		<center><b>
		<form class="form" action="updatedetails.php" method="post" enctype="multipart/form-data" onsubmit="return validate()"  >
			<h1><u>Update your details</u></h1><br>
			
			<table>
			<tr>
			<td><b>Username:</td>
			<td><input type="textview" class="ushow_id" name="username" id="Uname" readonly="readonly" value="<?php echo $_SESSION['username'] ?>"></input>
			</tr>
			
			<tr>
			<td><b>Full Name:</td>
			<td><input type="text" onkeypress="return onlyAlphabets(event,this);" class="ushow_id" name="fullname" id="Fname" placeholder="Enter new Full Name" required   ></input>
			</tr>
			
			<tr>
			<td><b>Phone Number:</td>
			<td><input type="textview" onkeypress="return isNumber(event)" class="ushow_id" name="phone_number" id="PNumber" placeholder="Enter new Phone number" maxlength="10" required  ></input>
			</tr>
			
			<tr>
			<td><b>Email:</td>
			<td><input type="email" class="ushow_id" name="email" id="Email" placeholder="Enter new Email" required  ></input>
			</tr>
			
			<tr>
			<td><b>Age:</td>
			<td><input type="textview" onkeypress="return isNumber(event)" class="ushow_id" name="age" id="Age" placeholder="Enter new Age" maxlength="4" required  ></input>
			</tr>
			
			<tr>
			<td><b>Address:</td>
			<td><input type="textview" class="ushow_id" name="address" id="Address"  placeholder="Enter new Address" required ></input>
			</tr>
			</table>
			<input type="submit" name="update_btn" class="Register" value="Update"><br>
			</form>
			
				
		</div>
		
		<?php
		if(isset($_POST['update_btn']))
			{
			//echo '<script type="text/javascript"> alert("User is Registered") </script>';
			
			$username = $_POST['username'];
			$fullname = $_POST['fullname'];
			$pnumber = $_POST['phone_number'];
			$email = $_POST['email'];
			$age = $_POST['age'];
			$address = $_POST['address'];
			
			$query = "select * from registration WHERE username='$username'";
				$query_run = mysqli_query($con,$query);
				
			//	if(mysqli_num_rows($query_run)>0)
			//		{
					//there is already a user with same username
			//		echo '<script type="text/javascript"> alert("User already exists....try another username") </script>';
			//		}
			//	else
					
					
						
					$query="UPDATE  registration  SET username='$username',fullname='$fullname',phone_number='$pnumber',email='$email',age='$age',address='$address' WHERE username='$username'";
					//$query1="insert into registration (fullname,phone_number,email,age,address) VALUES ('$fullname','$pnumber','$email','$age','$address')";
					$query_run = mysqli_query($con,$query);
					
						
						if($query_run) 
						{	
							
					
					//session_destroy();    //IMP: delete comment line code("//") if updatedetails.php does not work
							echo "<script>
							alert('Details has been updated');
							window.location.href='login.php';
							</script>";
							
							
							
							
						
						}
						else
						{
							echo '<script type="text/javascript"> alert("Error!!") </script>';
						}
					
						
			
			
									
		    }
		
				//session close code
				
				if(isset($_POST['logout']))
				{
					session_unset();
				session_destroy();
		 
				
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
	