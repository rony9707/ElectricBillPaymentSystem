<?php

include "config/config.php";
include "config/configbank.php";
$query="select * from debit";

$result=mysqli_query($conn,$query);
while($rows=mysqli_fetch_assoc($result))
{
	 echo $rows['fullname'];  
	 echo $rows['c1'];  
}


?>