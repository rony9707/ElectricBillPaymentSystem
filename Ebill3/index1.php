<?php
session_start();
include "config/config.php";
include "config/configbank.php";

//if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')) {

//header ("Location: login.php");}


?>




<html>


<head>
	<title>
	Online Electric Bill Payment
	</title>
	<!-- CSS -->
	<link href="css/index.css" rel="stylesheet" type="text/css"/>
	<link href="css/sliderindex1.css" rel="stylesheet" type="text/css"/>
    <link rel="icon" href="img/favicon.png" type="image/png">
	<!-- style for controlling the slideshow -->

</head>

<body style="background-color:#34efe0">
	<!-- header -->
<div id="header">
    
	<table>
	<tr>
	<td> <span style="padding-left:300px"><a  href="index1.php" style="text-decoration: none" target="_parent"> <b><font id="font1">Online Electric Bill Payment</font></b></span></a></td>
	<td> <span style="padding-left:180px"><a  href="index1.php"><img id="logo"  src="img/logo.jpg" height="70px"  alt="logo.png" /></span></a></td>
	</table>
	
	</tr>
	</div>
	
	<!-- main-wrapper -->
	<div id="main-wrap">
									 <a id="c" href="index1.php" style="text-decoration: none">Home  </a>
	<span style="padding-left:5px">  <a id="c" href="connectwithus.php" style="text-decoration: none">Connect with us</a>
	<span style="padding-left:5px">  <a id="c" href="#" style="text-decoration: none">Facebook</a>
	<span style="padding-left:5px">  <a id="c" href="#" style="text-decoration: none">Twitter</a>
	<span style="padding-left:690px"><a id="b"  href="login.php" style="text-decoration: none">Login</a>
	<span style="padding-left:5px"><a  id="b" href="register.php" style="text-decoration: none">Register</a>
	</div>
        
    
	
	
	<!-- main -->
	<div id="main">
	
		<div class="left-sub1"> 
			<!--	<span style="padding-left:35px"><a id="d" href="admin.php" style="text-decoration: none">ADMIN</a><br><br>
				<!--
				<span style="padding-left:10px"><a id="d" href="viewdetails.php" style="text-decoration: none">View your details</a><br><br>
				<span style="padding-left:5px"><a id="d" href="updatedetails.php" style="text-decoration: none">Update your detals</a><br><br>
				<a id="d" href="changepassword.php" style="text-decoration: none">Change your password</a><br><br>
				<span style="padding-left:25px"><a id="d" href="billdetails.php" style="text-decoration: none">Bill Details</a><br><br>
				<span style="padding-left:20px"><a id="d" href="printbill.php" style="text-decoration: none">Print your Bill</a><br><br>
				<span style="padding-left:25px"><a id="d" href="#" style="text-decoration: none">Pay your Bill</a><br><br>
				-->	
				<span style="padding-left:35px"><a id="d" href="aboutus.php" style="text-decoration: none">About Us</a><br><br>
				<span style="padding-left:2px"><a id="d" href="download/Electric%20Bill%20Payment.jpg" download  style="text-decoration: none">Download our App</a><br><br>
				<span style="padding-left:25px"><a id="d" href="login.php" style="text-decoration: none">Pay your bill</a><br><br>
				<span style="padding-left:6px"><a id="d" href="report.php" style="text-decoration: none">Report Something</a><br><br>
				<span style="padding-left:0px"><a id="d" href="http://157.240.23.35" style="text-decoration: none">Link your account with facebook</a><br><br>

				
		</div>
		
		
		
	
		
		
		
		<div class="right-sub1">
		<a href="https://paytm.com/" target="_blank" ><img src="img/paytm.jpg" style="width:100%" height="490"></a>
		
		</div>
                    
                    
                    
    <div class="slider_container">

      <div class="slides">
        <input type="radio" name="r" id="r1" checked>
        <input type="radio" name="r" id="r2">
        <input type="radio" name="r" id="r3">
        <input type="radio" name="r" id="r4">
        <input type="radio" name="r" id="r5">
        <div class="slide s1">
          <img src="img/slide1.jpg" alt="">
        </div>
        <div class="slide">
          <img src="img/slide2.jpg" alt="">
        </div>
        <div class="slide">
          <img src="img/slide3.jpg" alt="">
        </div>
        <div class="slide">
          <img src="img/slide4.jpg" alt="">
        </div>
        <div class="slide">
          <img src="img/slide5.jpg" alt="">
        </div>
    </div>

      <div class="navigation">
        <label for="r1" class="bar"></label>
        <label for="r2" class="bar"></label>
        <label for="r3" class="bar"></label>
        <label for="r4" class="bar"></label>
        <label for="r5" class="bar"></label>
      </div>
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
		
		
	<!-- if page is refreshed...session destroy -->
	<?php
	$pageWasRefreshed = isset($_SERVER['HTTP_CACHE_CONTROL']) && $_SERVER['HTTP_CACHE_CONTROL'] === 'max-age=0';

	if($pageWasRefreshed ) {
		session_destroy();
		
	} 
	
    
                    
                    
	?>
	
	
     
         
		
		
		
		
		
	</body>
	
	</html>
	