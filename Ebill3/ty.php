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
	Thank You
	</title>
	<!-- CSS -->
	<link href="css/index.css" rel="stylesheet" type="text/css"/>
     <link rel="icon" href="img/favicon.png" type="image/png">
	<link href="css/viewdetails.css" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet"  href="css/form_login.css">
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
		<h1><u>Transaction Successfull Acknowledgement Slip</u></h1><br>
            
                   <div class="print">
                       
                       Thank you <?php echo $_SESSION['fullname'] ?> for your cencern towards the environemnt by paying online<br><br>
                       <table border=1>
                           
                         <tr>
                        <td> Customer Name:</td>
                       <td> <?php echo $_SESSION['fullname'] ?></td>
                        </tr>    
                           
                           <tr>
                        <td> Customer ID:</td>
                       <td> <?php echo $_SESSION['c_id'] ?></td>
                        </tr>  
                    
                        <tr>
                        <td> Payment Month:</td>
                       <td> <?php echo $_SESSION['cmonth'] ?></td>
                        </tr>  
                           
                         <tr>
                        <td> Transaction Amount:</td>
                       <td> <?php echo $_SESSION['bill'] ?></td>
                        </tr>   
                           
                       </table>
                       
                       
                    </div>
		
		
		
            </div>
		
		<!-- session destroy code -->
		<?php
			if(isset($_POST['logout']))
			{
				session_unset();
			session_destroy();
			
			
			
			}
			
			
			
			
			
		?>
	
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
	