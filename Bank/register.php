<?php

include "config/configbank.php";

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
			
			
		}
	</script>

</head>

<body style="background-color:#34efe0">
	<!-- header -->
<div id="header">
	<table>
	<tr>
	<td> <span style="padding-left:500px"><a  href="index1.php" style="text-decoration: none" target="_parent"> <b><font id="font1">ABC BANK</font></b></span></a></td>
	
	</table>
	
	</tr>
	</div>
	
	<!-- main-wrapper -->
	<div id="main-wrap">
									 <a id="c" href="index1.php" style="text-decoration: none">Home  </a>
	
	<span style="padding-left:989px"><a id="b"  href="login.php" style="text-decoration: none">Login</a>
	<span style="padding-left:5px"><a  id="b" href="register.php" style="text-decoration: none">Register</a>
	</div>
	
	
	<!-- main -->
	<div id="main">
		<div class="left-sub1"> 
				
				<span style="padding-left:35px"><a id="d" href="#" style="text-decoration: none">About Us</a><br><br>
				
				
			</div>
		
	<div class="middle-sub1">
			<center><h2>Registration Form</h2>
			<!-- start of form -->
			<form class="form" action="register.php" method="post" enctype="multipart/form-data" onsubmit="return validate()"  >
			
			
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
			
			$address = $_POST['address'];
			
			//contstant
			$constant=101;
			
			//generate balance for  credit card
			$balancecredit=rand(10000,40000);
            
            //generate balance for  debit card
			$balancedebit=rand(10000,40000);
			
			//generate c1,c2,c3 and c4 for credit card
			$c1=rand(1000,9999);
            $c2=rand(1000,9999);
            $c3=rand(1000,9999);
            $c4=rand(1000,9999);
            
            //generate c1,c2,c3 and c4 for debitt card
			$d1=rand(1000,9999);
            $d2=rand(1000,9999);
            $d3=rand(1000,9999);
            $d4=rand(1000,9999);
			$c_id = "select c_id from registration where username = '$username' ";
			
			$result = mysqli_query($conn,$c_id);
			
			
            //generate cvv for credit card
			$cvvcredit=rand(111,9999);
            
            
			//generate cvv for debit card
			$cvvdebit=rand(111,9999);
            
            
            //md5 password
            $enctyped_password = md5($password);
			
            
            
            
            
            //generate random month for credit
                $randmt = mt_rand(1,12);
                if($randmt == 1)
                {
                    $randommonth1 = "January";
                }
                elseif($randmt == 2)
                {
                    $randommonth1 = "February";
                }
                elseif($randmt == 3)
                {
                    $randommonth1 = "March";
                }
                elseif($randmt == 4)
                {
                    $randommonth1 = "April";
                }
                elseif($randmt == 5)
                {
                    $randommonth1 = "May";
                }
                elseif($randmt == 6)
                {
                    $randommonth1 = "June";
                }
                elseif($randmt == 7)
                {
                    $randommonth1 = "July";
                }
                elseif($randmt == 8)
                {
                    $randommonth1 = "August";
                }
                elseif($randmt == 9)
                {
                    $randommonth1 = "September";
                }
                elseif($randmt == 10)
                {
                    $randommonth1 = "October";
                }
                elseif($randmt == 11)
                {
                    $randommonth1 = "November";
                }
                else
                {
                    $randommonth1 = "December";
                }
                $monthcredit=$randommonth1;

            
            
            //generate random month for debit
                    $randmt1 = mt_rand(1,12);

                if($randmt1 == 1)
                {
                    $randommonth1 = "January";
                }
                elseif($randmt1 == 2)
                {
                    $randommonth1 = "February";
                }
                elseif($randmt1 == 3)
                {
                    $randommonth1 = "March";
                }
                elseif($randmt1 == 4)
                {
                    $randommonth1 = "April";
                }
                elseif($randmt1 == 5)
                {
                    $randommonth1 = "May";
                }
                elseif($randmt1 == 6)
                {
                    $randommonth1 = "June";
                }
                elseif($randmt1 == 7)
                {
                    $randommonth1 = "July";
                }
                elseif($randmt1 == 8)
                {
                    $randommonth1 = "August";
                }
                elseif($randmt1 == 9)
                {
                    $randommonth1 = "September";
                }
                elseif($randmt1 == 10)
                {
                    $randommonth1 = "October";
                }
                elseif($randmt1 == 11)
                {
                    $randommonth1 = "November";
                }
                else
                {
                    $randommonth1 = "December";
                }
                $monthdebit=$randommonth1;
			
			
            
            
            
            //generate random year for credit
            
                $randyr = mt_rand(1,8);
                if($randyr == 1)
                {
                    $randomyear = "2022";
                }
                elseif($randyr == 2)
                {
                    $randomyear = "2023";
                }
                elseif($randyr == 3)
                {
                    $randomyear = "2024";
                }
                elseif($randyr == 4)
                {
                    $randomyear = "2025";
                }
                elseif($randyr == 5)
                {
                    $randomyear = "2026";
                }
                elseif($randyr == 6)
                {
                    $randomyear = "2027";
                }
                elseif($randyr == 7)
                {
                    $randomyear = "2028";
                }
                elseif($randyr == 8)
                {
                    $randomyear = "2029";
                }

                 $yearcredit=$randomyear;
            
            
            
            //generate random year for debit
                $randyr1 = mt_rand(1,8);
                if($randyr1 == 1)
                {
                    $randomyear1 = "2022";
                }
                elseif($randyr1 == 2)
                {
                    $randomyear1 = "2023";
                }
                elseif($randyr1 == 3)
                {
                    $randomyear1 = "2024";
                }
                elseif($randyr1 == 4)
                {
                    $randomyear1 = "2025";
                }
                elseif($randyr1 == 5)
                {
                    $randomyear1 = "2026";
                }
                elseif($randyr1 == 6)
                {
                    $randomyear1 = "2027";
                }
                elseif($randyr1 == 7)
                {
                    $randomyear1 = "2028";
                }
                elseif($randyr1 == 8)
                {
                    $randomyear1 = "2029";
                }

                 $yeardebit=$randomyear1;
			
			
				
			
				$query = "select * from registration WHERE username='$username'";
		
				$query_run = mysqli_query($conn,$query);
				
				if(mysqli_num_rows($query_run)>0)
					{
					//there is already a user with same username
					echo '<script type="text/javascript"> alert("The username already exists....try another username") </script>';
					}
				
				
				
				else
				{
					
						$query="insert into registration (username,fullname,password,password_real,phone_number,email,address) VALUES ('$username','$fullname','$enctyped_password','$password','$pnumber','$email','$address');";
                    
						$query.="insert into credit(fullname,username,balance,c1,c2,c3,c4,cvv,month,year) VALUES  ('$fullname','$username','$balancecredit','$c1','$c2','$c3','$c4','$cvvcredit','$monthcredit','$yearcredit');";
                    
                        $query.="insert into debit(fullname,username,balance,c1,c2,c3,c4,cvv,month,year) VALUES 
                        ('$fullname','$username','$balancedebit','$d1','$d2','$d3','$d4','$cvvdebit','$monthdebit','$yeardebit');";
					
					$query_run=mysqli_multi_query($conn,$query);
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
    
         <marquee onmouseover="stop()" onmouseout="start()">The last date for Electric bill payment is <?php          $duedate=date("Y-m-11");
                                                                                $curdate=date("Y-m-d");
                                                                                $nextmonth=date('Y-m-11',strtotime("+1 month"));
                                                                                    
                                                                            if($curdate>$duedate)
                                                                            {
                                                                               echo $nextmonth;
                                                                            }
                                                                           else
                                                                            {
                                                                                echo $duedate;
                                                                            }
                                                                    ?><span style="padding-left:30px">
                    
                        From 28th of current month till the last date of the same month payments are not possible
                    
                    </marquee>
             
            
    </div>
	
	</body>
	</html>
	