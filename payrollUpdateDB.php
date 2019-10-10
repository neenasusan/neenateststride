<?php


include("database.php");
$usertable="payrollEnroll";
$yourfield = "clientid";

$db=mysqli_connect($hostname,$username,$password,$dbname);


if(isset($_POST['clientid']) && isset($_POST['email'])) {
    $clientid = $_POST['clientid']; 
    $email = $_POST['email'];
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
	$fname=$table[2];
	$lname=$table[3];
	$address=$table[4];
	$city=$table[5];
	$province=$table[6];
	$pcode=$table[7];
	$ticketset=$table[11];
	$optin=$table[13];
	$modfdate=$table[14];
	$name=$fname." ".$lname;
//	$faddress=$address.",".$city;
//	$phoneno=$table[3];
}

$row = mysqli_fetch_array($result,MYSQLI_NUM);
$n = mysqli_affected_rows($db);

if($n >= 1){
//	$arr = explode(' ',trim($modfdate));
//	$modfdate= $arr[0]; 
	
	$todaysdate ="2019-12-25";
	
	$qual=date_create($modfdatedb);
	date_add($qual,date_interval_create_from_date_string("14 days"));
	$qualifieddate=date_format($qual,"Y-m-d");
	
	if(strtotime($qualifieddate) < strtotime($todaysdate))
	{		
		include('payrollUpdateForm.php');
    	header('payrollUpdateForm.php');
		exit;
		
	}
	
	else
	{
		$difdate = strtotime($qualifieddate) - strtotime($todaysdate);
		
		$difdate = round($difdate / (60 * 60 * 24));
		
		echo " Try After $difdate days ";	
		
	}
		
}
else{
	echo '<script language="javascript">';
	echo 'alert("you are not a valid user")';
	echo '</script>';

	header( "Refresh:1; url=http://canvas.millions.com/payrollEnroll.php");
	exit;
	
}
mysqli_close($db);

?>