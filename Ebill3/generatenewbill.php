<?php
session_start();
include "config/config.php";
include "config/configbank.php";

if (!isset($_SESSION["adminusername"]))
{
    echo "<meta http-equiv=\"refresh\" content=\"0; url=admin.php\">";
}
?>
<html>
<head>
	<title>
	Generate New Bill
	</title>
	<!-- CSS -->
	<link href="css/index.css" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet"  href="css/form_login.css">
     <link rel="icon" href="img/favicon.png" type="image/png">
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
				<span style="padding-left:2px"><a id="d" href="download/Electric%20Bill%20Payment.jpg" style="text-decoration: none">Download our App</a><br><br>
				<span style="padding-left:25px"><a id="d" href="login.php" style="text-decoration: none">Pay your bill</a><br><br>
				<span style="padding-left:6px"><a id="d" href="report.php" style="text-decoration: none">Report Something</a><br><br>
				
			</div>
		
	<div class="middle-sub1">
			<center><h2><u>Welcome Admin</u> </h2><br><br>
			<form class="form" action="" method="post" enctype="multipart/form-data" onsubmit="return validate()"  > 
                <input type="text" class="u_id" name="username" id="Uname" placeholder="Enter the username to generate new bill for next month" required><br><br>
            <input type="submit"  name="update" class="logout" value="Generate New Bill"><br>
                </form>
			
		<?php
		if(isset($_POST['logout']))
			{
			session_destroy();
		 
			header('location:admin.php');
			}
		?>
		
          <!-- generate new bill -->      
        <?php
          if(isset($_POST['update']))
        {      
                                    $username = $_POST['username'];
                                    $units=rand(83,250);
                                    $bill=$units*6;
                                    
                                    $cmonth=date("M");
                                    $nextmonth = date('M', strtotime('+1 month'));
                                    $curdate=date("Y-m-d");
                                    $duedate=date("Y-m-11");
                                    $nextduedate=date('Y-m-11', strtotime('+1 month'));
                                    $formdate=date("Y-m-27");


                                  
                                    
                                        //update database for next month bill and Month of Payment
                                        

                                         $query="UPDATE  billgenerate  SET units='$units',bill='$bill',cmonth='$nextmonth',duedate='$nextduedate' 
                                         WHERE username='$username'";
                                                $query_run = mysqli_query($con,$query);
                                                if($query_run)
                                                {
                                                    echo "<script>
                                                    alert('New bill for the username generated');
                                                    window.location.href='generatenewbill.php';
                                                    </script>";
                                                }
                                                else
                                                {
                                                    echo "<script>
                                                    alert('New Bill did not generate');
                                                    window.location.href='generatenewbill.php';
                                                    </script>";
                                                }
                  
          }
                
                
        ?>
        
                <?php
                
                $curdate=date("Y-m-d");
                $sitecloseday1=date("Y-m-28");
                $sitecloseday2=date("Y-m-29");
                $sitecloseday3=date("Y-m-30");
                $sitecloseday4=date("Y-m-31");

                if($curdate==$sitecloseday1 || $curdate==$sitecloseday2 || $curdate==$sitecloseday3 || $curdate==$sitecloseday4 )
                {
                 echo "<script>
                                               alert('welcome');
                                              
                                               </script>";  
                }
                
                else
                {
                    echo "<script>
                                       alert('New Bill cannot be generated today');
                                       window.location.href='welcomeadmin.php';
                                       </script>";  
                }
                ?>
		
                
                
                
                
                
		</div>
		<form class="form" action="" method="post" onsubmit="return validate()" >
			<center>	<input type="submit" name="logout" class="logout" value="Logout"><br></center>
			</form>
	
	</div>
	
	</body>
	</html>
	