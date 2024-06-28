<?php

include "config/config.php";

?>



<html>

<head>
	<title>
	Register Page
	</title>
	<!-- CSS -->
	<link href="css/index.css" rel="stylesheet" type="text/css"/>
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
		
		
	
	
		// user img upload
		function PreviewImage() {
			var oFReader = new FileReader(); 
			oFReader.readAsDataURL(document.getElementById("imglink").files[0]);
		
			oFReader.onload = function (oFREvent){
			document.getElementById("uploadPreview").src = oFREvent.target.result;
		};
		};
		
		function validate()
		{
			//Fullname must be in characters
			var val = document.getElementById("Fname").value;
   
			if (!val.match(/^[a-z A-Z]+$/)) 
			{
				alert("Only Use Alphabets in Full Name");
				return false;
			}
			
			//Password must be same
			var password=document.getElementById("Pass").value;
			var cpassword=document.getElementById("CPass").value;
			
			if(password!=cpassword)
				{
			alert("Please enter same password");
			return false;
			}
			
			//Password Hints
			var pass=document.getElementById("Pass").value;
			if (!pass.match(/^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])([a-zA-Z0-9]{8,15})$/)) 
			{
				alert("Enter a valid Password");
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
	<td> <span style="padding-left:180px"><a  href="index1.php"><img id="logo"  src="img/logo.jpg" height="70px" alt="logo.jpg" /></span></a></td>
	</table>
	
	</tr>
	</div>
	
	<!-- main-wrapper -->
	<div id="main-wrap">
									 <a id="c" href="index1.php" style="text-decoration: none">Home  </a>
	<span style="padding-left:5px">  <a id="c" href="connectwithus.php" style="text-decoration: none">Connect with us</a>
	<span style="padding-left:5px">  <a id="c" href="#" style="text-decoration: none">Facebook</a>
	<span style="padding-left:5px">  <a id="c" href="#" style="text-decoration: none">Twitter</a>
	<span style="padding-left:770px"><a id="b"  href="login.php" style="text-decoration: none">Login</a>
	</div>
	
	
	<!-- main -->
	<div id="main">
		<div class="left-sub1"> 
				
				<span style="padding-left:35px"><a id="d" href="aboutus.php" style="text-decoration: none">About Us</a><br><br>
				<span style="padding-left:2px"><a id="d" href="img/Electric Bill Payment.jpg" download style="text-decoration: none">Download our App</a><br><br>
				<span style="padding-left:25px"><a id="d" href="login.php" style="text-decoration: none">Pay your bill</a><br><br>
				<span style="padding-left:6px"><a id="d" href="report.php" style="text-decoration: none">Report Something</a><br><br>
				
			</div>
		
	<div class="middle-sub1">
			<center><h2>Registration Form</h2>
			<!-- start of form -->
			<form class="form" action="register.php" method="post" enctype="multipart/form-data" onsubmit="return validate()"  >
			
			<img src="img/avatar.png" class="avatar" id="uploadPreview"><br><br>
			<label><b> Upload your image:</label><br></b>
			<input type="file" id="imglink" name="imglink" class='imglink' accept=".jpg,.jpeg,.png" onchange="PreviewImage();"/><br><br>
			<!-- start of form -->
			<form class="form" action="register.php" method="post"  >
			<label><b> Username:</label><br>
			<input type="text" class="u_id" name="uname" id="Uname" placeholder="Enter your username" required><br><br>
			<label><b> Full Name:</label><br>
			<input type="text" onkeypress="return onlyAlphabets(event,this);" class="u_id" name="fname" id="Fname" placeholder="Enter your full name" required><br><br>
			<label> Password:</b></label><br>
			
			<span style="padding-left:10px">
			<input type="password" class="p_id" name="pass" id="Pass" placeholder="Enter your password" required> </b>     
			
			<div class="tooltip">!
				<span class="tooltiptext">1)Password must be between 8 to 15 characters<br>
										  2)Passowrd must have 1 Upper Case Character<br>
										  3)Passowrd must have 1 Lower Case Character<br>
										  4)Passowrd must have 1 Numeric Character<br>
										  5)No special characters are allowed<br></span>
				
			</div>
			
			
			
			<br><br><b>
			<label>Confirm Password:</label><br>
			<input type="password" class="p_id" name="cpass" id="CPass" placeholder="Enter your password" required><br><br>
			<label> Phone Number:</label><br>
			<input type="text" onkeypress="return isNumber(event)" class="p_id" name="pnumber" id="PNumber" placeholder="Enter your phone number" maxlength="10" required><br><br>
			<label> Email:</label><br>
			<input type="email" class="p_id" name="email" id="Email" placeholder="Enter your Email" required><br><br>
			<label>Age:</label><br>
			<input type="text" onkeypress="return isNumber(event)" class="p_id"  name="age" id="Age" placeholder="Enter your Age" maxlength="3" required><br><br>
			<label> Address:</label><br>
			<textarea type ="text" class="p_id" name="address" id="Address" placeholder="Enter your address" required></textarea><br><br>
                
                <!--
            <label> Security Question:</label><br>
            <select class="p_id">
              <option name="pet" value="pet">What is the name of your first pet?</option><br>
              <option name="love" value="love">Who is your first love?</option>
              <option name="town" value="town">What is the name of the town you were born?</option>
              <option name="address" value="audi">Audi</option>
            </select><br>
			<textarea type ="text" class="p_id" name="address" id="Address" placeholder="Enter your answer" required></textarea><br><br>
			-->
			<input type="submit" name="register_btn" class="Register" value="Register"><br>
			<input type="reset" class="Register" value="Reset" ><br>
			<input type="button" class="Register" value="Back" onclick="window.location.href='login.php'"><br>
			</form>
			</center>
			<!-- end of form -->
		
		<?php
		if(isset($_POST['register_btn']))
		{
			//echo '<script type="text/javascript"> alert("User is Registered") </script>';
			$username = $_POST['uname'];
			$fullname = $_POST['fname'];
			$password = $_POST['pass'];
			$cpassword = $_POST['cpass'];
			$pnumber = $_POST['pnumber'];
			$email = $_POST['email'];
			$age = $_POST['age'];
			$address = $_POST['address'];
			
			
			//image upload
			$img_name = $_FILES['imglink']['name'];
			$img_size = $_FILES['imglink']['size'];
			$img_temp = $_FILES['imglink']['tmp_name'];
			
			//unit and bill generate
			$units=rand(83,250);
			$bill=$units*6;
			$c_id = "select c_id from registration where username = '$username' ";
			
			$result = mysqli_query($con,$c_id);
			
			//generate customer ID
			$numbers = range(0, 1000000);
			shuffle($numbers);
			
			//generate current date
			$cdate=date_default_timezone_get();
			
			
			
			//generate currnt month
			$cmonth=date("M");
			$nextmonth = date('M', strtotime('+1 month'));
			
			//date_lastdate
			
			$duedate=date("Y-m-11");
			
			//Status
			$status="Not Paid";
			
			
			
			//image upload
			$directory = 'uploads/';
			$target_file = $directory.$img_name;
			
			//md5 password
				$enctyped_password = md5($password);
			
			
			
			
			
				
			
				$query = "select * from registration WHERE username='$username'";
		
				$query_run = mysqli_query($con,$query);
				
				if(mysqli_num_rows($query_run)>0)
					{
					//there is already a user with same username
					echo '<script type="text/javascript"> alert("The username already exists....try another username") </script>';
					}
				
				else if(file_exists($target_file))
					{
					echo '<script type="text/javascript"> alert("Image file already exists....try another image file") </script>';
					}
					
				else if($img_size>2017952)
					{
					echo '<script type="text/javascript"> alert("Image file size is greater than 2MB....try another image file") </script>';
					}
				
				
				else
				{
					move_uploaded_file($img_temp,$target_file);
						$query="insert into registration (username,fullname,password,password_real,phone_number,email,age,address,imglink) VALUES        ('$username','$fullname','$enctyped_password','$password','$pnumber','$email','$age','$address','$w');";
                    
						$query.="insert into billgenerate(units,bill,username,cmonth,duedate) VALUES                             ('$units','$bill','$username','$cmonth','$duedate');";
                    
                        $query.="insert into status(username,full_name,email,status) VALUES ('$username','$fullname','$email','$status');";
					
					$query_run=mysqli_multi_query($con,$query);
						if($query_run)
						{
							echo '<script type="text/javascript"> alert("User Registered.....Go to login page to login") </script>';
						}
						else
						{
							echo '<script type="text/javascript"> alert("Error!!") </script>';
						}
				
				
				
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
	