




<html>


<head>
	<title>
	Bank
	</title>
	<!-- CSS -->
	<link href="css/index.css" rel="stylesheet" type="text/css"/>
	<link href="css/sliderindex1.css" rel="stylesheet" type="text/css"/>
    
	<!-- style for controlling the slideshow -->

</head>

<body style="background-color:#34efe0">
	<!-- header -->
<div id="header">
    
	<table>
	<tr>
	<td> <span style="padding-left:500px"><a  href="index1.php" style="text-decoration: none" target="_parent"> <b><font id="font1">ABC BANK</font></b></span></a></td>
	
        </tr>
	</table>
	
	
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
				

				
		</div>
		
		
		
	
		
		
		
		<div class="right-sub1">
		<a href="https://paytm.com/" target="_blank" ><img src="img/paytm.jpg" style="width:100%" height="490"></a>
		
		</div>
                    
                    
                    
    <div class="slider_container">

      
        <div class="slide s1">
          <img src="img/slide1.jpg" alt="">
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
	