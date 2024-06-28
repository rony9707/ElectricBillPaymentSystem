<?php
session_start();
require_once('config/config.php');
require_once('config/configbank.php');
//if no session created the pages that require login ID and password won't open
if (!isset($_SESSION["username"]))
{
    echo "<meta http-equiv=\"refresh\" content=\"0; url=login.php\">";
}

?>


<html>
<head>
	<title>
	Credit Card Payment
	</title>
	<!-- CSS -->
	<link href="css/index.css" rel="stylesheet" type="text/css"/>
	<link href="css/viewdetails.css" rel="stylesheet" type="text/css"/>
     <link rel="icon" href="img/favicon.png" type="image/png">
	<link rel="stylesheet"  href="css/form_login.css">
	
	
		<!-- Java Script -->
	<script type="text/javascript">
        
        
        //Script to type only numbers indebit card number and CVV
		function isNumber(evt) {
			evt = (evt) ? evt : window.event;
			var charCode = (evt.which) ? evt.which : evt.keyCode;
			if (charCode > 31 && (charCode < 48 || charCode > 57)) {
			return false;
			}
				return true;
			}		
		
			
		
			//Script to type only alphabets in debt card owner name
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
		
        
        
        
		
		
		function validate()
		{
			//Name of card owner
			var val = document.getElementById("name").value;
   
			if (!val.match(/^[a-z A-Z]+$/)) 
			{
				alert("Only Use Alphabets in Name of card owner");
				return false;
			}
			
			
			
			
			//Credit card number must be in numbers
			var pno=document.getElementById("CCN").value;
			if(isNaN(pno))
			{
			alert("Credit Card Number must be in numbers");
			return false;
			}
			
			//Credit Card nubmer must be 16 digit
			var pnumber_id=document.getElementById("CCN").value;
			if(pnumber_id.length!=16)
			{
				alert("Credit Card Number must be 16 digits");
				return false;
			}
			
			//CVV must be in numbers
			var cvv=document.getElementById("CVV").value;
			if(isNaN(cvv))
			{
			alert("CVV must be in numbers");
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
		<h1><u>Enter Credit Card Details</u></h1><br>
		<form class="form" action="" method="post" enctype="multipart/form-data" onsubmit="return validate()"  > 
		<table>
            
            <tr>
			<td><b>Username:</td>
			<td><input type="textview"  class="ushow_id" name="username" id="Uname" readonly="readonly" value="<?php echo $_SESSION['username'] ?>"></input>
			</tr>
            
		
			<tr>
			<td><b>Credit Card Number:</td>
			<td><input type="text"  onkeypress="return isNumber(event)" class="card_number" name="c1" id="DCN" maxlength="4"   required   ></input>
            
            <input type="text"  onkeypress="return isNumber(event)" class="card_number" name="c2" id="DCN" maxlength="4"   required   ></input>
        
           <input type="text"  onkeypress="return isNumber(event)" class="card_number" name="c3" id="DCN" maxlength="4"   required   ></input>
                    
            <input type="text"  onkeypress="return isNumber(event)" class="card_number" name="c4" id="DCN" maxlength="4"   required   ></input></td>
			</tr>
			
			<tr>
			
			<tr>
			<td><b>Expiration Date:</td>
			<td>
			
			<select name="month" >
                            <option value="January" >January</option>
                            <option value="February" >February </option>
                            <option value="March" >March</option>
                            <option value="April" >April</option>
                            <option value="May" >May</option>
                            <option value="June" >June</option>
                            <option value="July" >July</option>
                            <option value="August" >August</option>
                            <option value="September" >September</option>
                            <option value="October" >October</option>
                            <option value="November" >November</option>
                            <option value="December" >December</option>
            </select>
                        <select name="year" >
                            
							<option value="2022"> 2022</option>
							<option value="2023"> 2023</option>
							<option value="2024"> 2024</option>
							<option value="2025"> 2025</option>
							<option value="2026"> 2026</option>
							<option value="2027"> 2027</option>
							<option value="2028"> 2028</option>
							<option value="2029"> 2029</option>
                        </select>
			
			</td>
			</tr>
			
			<tr>
			<td><b>CVV:</td>
			<td><input type="text" class="ushow_id" onkeypress="return isNumber(event)" name="cvv" maxlength="4" id="CVV" placeholder="Enter your CVV" required   ></input></td>
			</tr>
			
			<tr>
			<td><b>Name of Owner of Card:</td>
			<td><input type="text" class="ushow_id" onkeypress="return onlyAlphabets(event,this);" name="cardowner" id="name" placeholder="Enter your Name" required   ></input></td>
			</tr>
			
			<tr>
			<td><b>Bill in र:</td>
			<td><input type="textview" class="ushow_id" name="ebill" readonly="readonly" value=" <?php echo $_SESSION['bill'] ?>"></input><br></td>
			</tr>
			
			<tr>
			<td><b>Status:</td>
			<td><input type="textview" name="status" class="ushow_id" readonly="readonly" value="<?php echo $_SESSION['status'] ?>"></input>
			</tr>
			</table>
			
			
			<input type="submit" name="credit_cp" class="Register" value="PAY"><br>
			
			
		
			</form>
		
			
				
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
        <!-- payment code -->
        
        
        
		<!-- payment code -->
		<?php
        if(isset($_POST['credit_cp']))
        {
        $username = $_POST['username'];
        
            
        
        $c1 = $_POST['c1'];
        $c2 = $_POST['c2'];
        $c3 = $_POST['c3'];
        $c4 = $_POST['c4'];
        $cvv=  $_POST['cvv'];   
        $month = $_POST['month'];   
        $year= $_POST['year'];
        $nameofcard = $_POST['cardowner'];
        
        $curdate=date("Y-m-d");
        $duedate=date("Y-m-11");
        $formdate=date("Y-m-27");
            
        
        $nextmonth=date('Y-m-11',strtotime("+1 month"));
        $paid="PAID";  
		
	       $query= "select * from credit where c1='$c1' && c2='$c2' && c3='$c3' && c4='$c4' && month='$month' 
                        && year='$year' && fullname='$nameofcard' && cvv='$cvv';   ";
            
            $query_run=mysqli_query($conn,$query);
            
            if(mysqli_num_rows($query_run)>0)
            {
                
                //update balance
                
                $query="select balance from credit where c1='$c1' && c2='$c2' && c3='$c3' && c4='$c4' && month='$month' 
                        && year='$year' && fullname='$nameofcard' && cvv='$cvv';   ";
                $query_run=mysqli_query($conn,$query);
                $rows=mysqli_fetch_assoc($query_run);
                 $bankbalance=$rows['balance'];
                $ebill=$_SESSION['bill'];
                $newbankbalance= $bankbalance - $ebill;
                
                $updatequery= "UPDATE  credit  SET balance='$newbankbalance' where c1='$c1' && c2='$c2' && c3='$c3' && c4='$c4' && month='$month' 
                        && year='$year' && fullname='$nameofcard' && cvv='$cvv';   ";
                $query_run1 = mysqli_query($conn,$updatequery);
                
                //update not paid to paid
                $query2="UPDATE  status  SET status='$paid' WHERE username='$username'";
                $query_run2 = mysqli_query($con,$query2);
                
                if($query_run2)
                {
                   
                
                
                                    echo "<script>
                                            alert('Payment is Completed');
                                            window.location.href='logout.php';
                                    </script>";

                                    }

                                
            }
            else
                                {
                                    echo "<script>
                                                alert('Please check your card details!!');
                                                window.location.href='ccp.php';
                                                </script>";
                                }
        }
		?>
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
       
	<div id="marquee-msg">
    
         <marquee onmouseover="stop()" onmouseout="start()">The last date for Electric bill payment for this month is <?php          $duedate=date("Y-m-11");
                                                                                $curdate=date("Y-m-d");
                                                                                $nextmonth=date('Y-m-11',strtotime("+1 month"));
                                                                                    
                                                                            echo $duedate;
                                                                    ?><span style="padding-left:30px">
                    
                        From 28th of current month till the last date of the same month, payments are not possible
                    
                    </marquee>
             
            
    </div>
            
    </div>
	</body>
	</html>
	