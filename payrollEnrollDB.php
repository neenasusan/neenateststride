
<?php

include("database.php");
$usertable="payrollEnroll";
$yourfield = "clientid";


$db=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if(isset($_POST['clientid']) && isset($_POST['email'])) {
    $clientid = $_POST['clientid']; 
    $email = $_POST['email'];
	$fname=$_POST['fname'];
	$lname = $_POST['lname'];
	$address = $_POST['address'];
	$city = $_POST['city'];
	$province = $_POST['province'];
	$pcode = $_POST['pcode'];
	$wphone = $_POST['wphone'];
	$hphone = $_POST['hphone'];
	$mphone = $_POST['mphone'];
	$ticketset = $_POST['ticketset'];
	$payrollselection=$_POST['payrollselection'];
	$optin = $_POST['optin'];
	$modfdate = date("Y-m-d");
	
}
	
$query = "select *from payrollEnroll where clientid = '$clientid' OR email = '$email'";
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
	echo '<script language="javascript">';
	echo 'alert("SORRY YOU ARE ALREADY ENROLLED")';
	echo '</script>';

	header( "Refresh:1; url=http://canvas.millions.com/grfx4.dv/payrollUpdate.php");
	exit;		
}
else{
	
	$query = "INSERT INTO payrollEnroll (clientid,email,fname,lname,address,city,province,pcode,wphone,hphone,mphone,ticketset,payrollselection,optin,modfdate) VALUES ('$clientid','$email','$fname','$lname','$address','$city','$province','$pcode','$wphone','$hphone','$mphone','$ticketset','$payrollselection','$optin','$modfdate')";
	$result=mysqli_query($db,$query);
	
	$query2 = "INSERT INTO payrollUpdate (clientid,email,fname,lname,address,city,province,pcode,wphone,hphone,mphone,ticketset,payrollselection,optin,modfdate) VALUES ('$clientid','$email','$fname','$lname','$address','$city','$province','$pcode','$wphone','$hphone','$mphone','$ticketset','$payrollselection','$optin','$modfdate')";
	$result=mysqli_query($db,$query2);
	echo "CONGRATULATIONS YOU ARE ENROLLED NOW";
}
mysqli_close($db);
?>

