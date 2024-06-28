<?php
session_start();
require_once('config/config.php');
$query="select * from registration";
$result=mysqli_query($con,$query);

if (!isset($_SESSION["adminusername"]))
{
    echo "<meta http-equiv=\"refresh\" content=\"0; url=admin.php\">";
}
?>


<html>
<head>
	<title>
	Customer Details
	</title>
	<!-- CSS -->
	<link href="css/index.css" rel="stylesheet" type="text/css"/>
     <link rel="icon" href="img/favicon.png" type="image/png">
	<link rel="stylesheet"  href="css/form_login.css">
	
	<!-- Script for print button-->
	<script>
		function printContent(el){
		var restorepage = document.body.innerHTML;
		var printcontent = document.getElementById(el).innerHTML;
		document.body.innerHTML = printcontent;
		window.print();
		document.body.innerHTML = restorepage;
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
				<span style="padding-left:2px"><a id="d" href="img/Electric Bill Payment.jpg " download style="text-decoration: none">Download our App</a><br><br>
				<span style="padding-left:25px"><a id="d" href="login.php" style="text-decoration: none">Pay your bill</a><br><br>
				<span style="padding-left:6px"><a id="d" href="#" style="text-decoration: none">Report Something</a><br><br>
				
			</div>
		
	<div class="middle-sub1" id="print">
			<center><h2><u>Customer Details</u> </h2><br><br>
			
			<table align="center" bgcolor="white" border="1px"  >
			
			<tr>
              <th>Consumer ID</th>
            <th>Username</th>
			  <th>Full Name</th>
			  <th>Phone Number</th>
			  <th>Email</th>
			  <th>Age</th>
			  <th>Address</th>
              
			</tr>
			<?php 
			while($rows=mysqli_fetch_assoc($result))
			{
			?>
			<tr>
				<td><?php echo $rows['c_id'];  ?>  </td>
                <td><?php echo $rows['username'];  ?>  </td>
				<td><?php echo $rows['fullname'];  ?>  </td>
				<td><?php echo $rows['phone_number'];  ?>  </td>
				<td><?php echo $rows['email'];  ?>  </td>
				<td><?php echo $rows['age']; ?>  </td>
				<td><?php echo $rows['address'];  ?>  </td>
			</tr>
			<?php
			}
			?>
         
			</table>
			
			
		
		
		
		</div>
	<span style="padding-left:200px"><input type="button" class="logout" value="Print" onclick="printContent('print')">
		<span style="padding-left:677px"><input type="button" onclick="window.location.href='welcomeadmin.php'" name="logout" class="logout" value="BACK">
		
				<center>
				<a class="logout" href="adminlogout.php" style="text-decoration: none">Logout</a>
			</center>
		
	
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
	