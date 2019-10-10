<?php

include("database.php");
$usertable="payrollEnroll";
$yourfield = "clientid";


$db=mysqli_connect($hostname,$username,$password,$dbname);


if(isset($_POST['clientid']) && isset($_POST['email'])) {
    $clientid = $_POST['clientid']; 
    $email = $_POST['email'];
	$address = $_POST['address'];
	$pcode = $_POST['pcode'];
	$ticketset = $_POST['ticketset'];
	$payrollselection=$_POST['payrollselection'];
	$optin = $_POST['optin'];
	$modfdate = date("Y-m-d");
	
}

$query = "select *from payrollUpdate where clientid = '$clientid' AND email = '$email'";
$result=mysqli_query($db,$query);


while($row = mysqli_fetch_assoc($result))
{
	
	 foreach ($row as $field => $value) { 
         $table[]= $value;
    }
	
	$clientid = $table[0];
	$email=$table[1];
	
	
} 
	

$row = mysqli_fetch_array($result,MYSQLI_NUM);
$n = mysqli_affected_rows($db);

if($n >= 1){

		$query1 = "UPDATE `payrollUpdate` SET `address`='".$address."',`pcode`='".$pcode."',`ticketset`='".$ticketset."',`optin`='".$optin."',`modfdate`='".$modfdate."' WHERE `clientid` = $clientid";
		$result=mysqli_query($db,$query1);
	
		$query2 = "INSERT INTO payrollChange (clientid,email,address,pcode,ticketset,optin,modfdate) VALUES ('$clientid','$email','$address','$pcode','$ticketset','$optin','$modfdate')";
		$result=mysqli_query($db,$query2);	
		
		 echo "SUCCESSFULLY UPDATED YOUR INFORMATION"; 
		
	}
		

else{
	echo "YOU ARE NOT A VALID USER";
	
}
mysqli_close($db);

?>