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
	View Details
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
		<h1><u> AAA Limited</u></h1>
		
		<?php echo '<img class="avatar" src="'.$_SESSION["imglink"].'">'; ?><br><br>
            <form class="form" action="" method="post" enctype="multipart/form-data" onsubmit="return validate()"  > 
		<table border=1>
            
            
            <tr>
			<td><b>Username:</td>
			<td><input type="textview" name="username" class="ushow_id" readonly="readonly" value="<?php echo $_SESSION['username'] ?>"></input>
			</tr>
			
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
			<td><input type="textview" class="ushow_id" name="status" readonly="readonly" value="<?php echo $_SESSION['status'] ?>"></input>
			</tr>
			
			
			</table>
			
            <input type="submit" name="paybill1" class="Register" value="PAY"><br>
			<input type="button" class="Register" value="Back" onclick="window.location.href='login.php'"><br>
			
			</form>	
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
		
		
		
        <?php
        $curdate=date("Y-m-d");
        $sitecloseday1=date("Y-m-28");
        $sitecloseday2=date("Y-m-29");
        $sitecloseday3=date("Y-m-30");
        $sitecloseday4=date("Y-m-31");
        
        if($curdate==$sitecloseday1 || $curdate==$sitecloseday2 || $curdate==$sitecloseday3 || $curdate==$sitecloseday4 )
        {
         echo "<script>
                                       alert('You cannot pay today, payments will be opened from 1st day of next month');
                                       window.location.href='viewdetails.php';
                                       </script>";  
        }
       else
        {
        
			if(isset($_POST['paybill1']))
                {
                $status1="PAID";
                $status0="Not Paid";
                $cstatus =  $_SESSION['status'];
                
                $cmonthdatabase=$_SESSION['cmonth'];
                $cmonth=date("M");
                    $curdate=date("Y-m-d");
                    $duedate=date("Y-m-11");
                    $day1ofnextmonth=date('1-m-11',strtotime("+1 month"));
                    $formdate=date("Y-m-27");
                    $nextmonth=date('Y-m-11',strtotime("+1 month"));
                        if($curdate>$duedate && $curdate<$formdate && $cmonth==$cmonthdatabase && $cstatus==$status0)
                        {
                            
                            //u cannot pay as if 11>currentdate>27
                            echo "<script>
							alert('Last date of payment is over');
							
							</script>";
                            
                        }
                        else
                        { 
                             if($curdate>$formdate && $cstatus==$status0 )
                                {
                                    echo "<script>
							         alert('You have not paid the last month, please contact site owners');
							         window.location.href='paybill.php';
							         </script>";
                                }  
                             else{
                                 if($status1 == $cstatus)
                            
                                    {
                                            echo "<script>
                                        alert('You have already paid');
                                        window.location.href='paybill.php';
                                        </script>";
                                     }
                                 
                            else
                            {
                                if($cmonth !=  $cmonthdatabase )
                                {
                                    echo "<script>
                                        alert('You have not paid the last month, please contact site owners');
                                        window.location.href='paybill.php';
                                        </script>";
                                    
                                }
                                else{
                                
                            
                                        echo "<script>
                                        alert('Proceed to our Payment Portal');
                                        window.location.href='payportal1.php';
                                        </script>";
                                    }
                                
                            }
                            }
                        }
                
                        
                
                    
                
                
                
                
            }
			
			
       }
			
			
		?>
	
       
	
         
	
	</body>
	</html>
	