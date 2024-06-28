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
	Print your Bill
	</title>
	<!-- CSS -->
	<link href="css/index.css" rel="stylesheet" type="text/css"/>
     <link rel="icon" href="img/favicon.png" type="image/png">
	<link href="css/viewdetails.css" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet"  href="css/form_login.css">
	<!-- CSS links over -->
	
	
	
	
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
		
	<div class="middle-sub1" id="print">
		<center><b>
		<h1><u> AAA Limited</u></h1>
		
		<?php echo '<img class="avatar" src="'.$_SESSION["imglink"].'">'; ?><br><br>
		<table border=1>
			
			<tr>
			<td><b>Full Name:</td>
			<td><input type="textview" class="ushow_id" name="fname" readonly="readonly" value="<?php echo $_SESSION['fullname'] ?>"></input>
			</tr>
			
			<tr>
			<td><b> Your Consumer ID:</td>
			<td><input type="textview" class="ushow_id" name="c_id" readonly="readonly" value="<?php echo $_SESSION['c_id'] ?>"></input>
			</tr>
			
			<tr>
			<td><b>Units:</td>
			<td><input type="textview" class="ushow_id" readonly="readonly" value="<?php echo $_SESSION['units'] ?>"></input>
			</tr>
			
			<tr>
			<td><b>Bill:</td>
			<td><input type="textview" class="ushow_id" readonly="readonly" value="र <?php echo $_SESSION['bill'] ?>"></input>
			</tr>
			
			<tr>
			<td><b>Month of payment:</td>
			<td><input type="textview" class="ushow_id" readonly="readonly" value="<?php echo $_SESSION['cmonth'] ?>"></input>
			</tr>
			
			<tr>
			<td><b>Due Date:</td>
			<td><input type="textview" class="ushow_id" readonly="readonly" value="<?php echo $_SESSION['duedate'] ?>"></input>
			</tr>
			
			<tr>
			<td><b>Status:</td>
			<td><input type="textview" class="ushow_id" readonly="readonly" value="<?php echo $_SESSION['status'] ?>"></input>
			</tr>
			
			
			
			
			
			</table>
			
			
			
				
		</div>
		<center><input type="button" class="Register" value="Print" onclick="printContent('print')"><br></center>
			<center><input type="button" class="Register" value="Back" onclick="window.location.href='login.php'"><br></center>
		<?php
		
		 
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
	