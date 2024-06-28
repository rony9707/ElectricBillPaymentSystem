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
	Welcome <?php echo $_SESSION['fullname'] ?>
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
	
	
	</div>
	
	
	<!-- main -->
	<div id="main">
		
		
		<div class="middle-sub1">
		<center><h2>Welcome
				<?php echo $_SESSION['fullnameB'] ?> </h2>
			
			<form class="form" action="" method="post" onsubmit="return validate()" >
                
                <a id="f" href="creditdetails.php" style="text-decoration: none">Credit Details  </a><br><br>
                <a id="f" href="debitdetails.php" style="text-decoration: none">Debit Details  </a><br>
                
                
                
                
                
                
				<input type="submit" name="logout" class="logout" value="Logout"><br>
			</form>
		</div>
		<?php
			if(isset($_POST['logout']))
			{
			session_destroy();
		 
			header('location:logout.php');
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
	