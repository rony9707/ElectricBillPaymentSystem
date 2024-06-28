<?php
session_start();
require_once('config/configbank.php');

//if no session created the pages that require login ID and password won't open
if (!isset($_SESSION["usernameB"]))
{
    echo "<meta http-equiv=\"refresh\" content=\"0; url=login.php\">";
}



?>

<html>
<head>
	<title>
	Credit Card Details
	</title>
	<!-- CSS -->
	<link href="css/index.css" rel="stylesheet" type="text/css"/>
	<link href="css/viewdetails.css" rel="stylesheet" type="text/css"/>
     <link rel="icon" href="img/favicon.png" type="image/png">
	<link rel="stylesheet"  href="css/form_login.css">
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
	
	<span style="padding-left:1060px"><a id="e" href="logout.php" style="text-decoration: none">Logout</a>
	</div>
	
	
	<!-- main -->
	<div id="main">
		
		
		<div class="middle-sub1">
		<center><h1><u><b>Your Credit Details</b></u></h1>
            
            <table>
			<tr>
			<td><b>Username:</td>
			<td><input type="textview" class="ushow_id" readonly="readonly" value="<?php echo $_SESSION['usernameB'] ?>"></input></td>
			</tr>
			
			<tr>
			<td><b>Full Name:</td>
			<td><input type="textview" class="ushow_id" readonly="readonly" value="<?php echo $_SESSION['fullnameB'] ?>"></input></td>
			</tr>
			
			<tr>
			<td><b>Balance:</td>
			<td><input type="textview" class="ushow_id" readonly="readonly" value="<?php echo $_SESSION['balancecredit'] ?>"></input></td>
			</tr>
			
			<tr>
			<td><b>Credit Card Number:</td>
            <td>
            <input type="textview"   readonly="readonly" class="card_number" value="<?php echo $_SESSION['c1'] ?>"        ></input>
            
            <input type="textview"   readonly="readonly" class="card_number" value="<?php echo $_SESSION['c2'] ?>"       ></input>
        
           <input type="textview"   readonly="readonly" class="card_number" value="<?php echo $_SESSION['c3'] ?>"      ></input>
                    
            <input type="textview"   readonly="readonly" class="card_number" value="<?php echo $_SESSION['c4'] ?>"       ></input>
            </td>
			</tr>
			
			<tr>
			<td><b>Expiration Date:</td>
			<td>
                <input type="textview" class="expdate" readonly="readonly" value="<?php echo $_SESSION['yearcredit'] ?>"></input>
                <input type="textview"   readonly="expdate" class="expdate" value="<?php echo $_SESSION['monthcredit'] ?>"        ></input>
            </td>
			</tr>
			
			<tr>
			<td><b>CVV:</td>
			<td><input type="textview" class="ushow_id" readonly="readonly" value="<?php echo $_SESSION['cvvcredit'] ?>"></input></td>
			</tr>
			</table>
            
            
            
            
            
            
            
			
		</div>
		<?php
			if(isset($_POST['logout']))
			{
			session_destroy();
		 
			header('location:login.php');
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
	