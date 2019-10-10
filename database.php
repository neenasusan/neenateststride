<?php

$dbhost="localhost";
$dbuser="stridemanagement";
$dbpass="6ajnt@bUexVU2C";
$dbname="NewDatabaseTesting";


$dbconnect = mysql_connect($dbhost, $dbuser, $dbpass) or die ("Cannot connect to database: ".mysql_error());
$dbselect = mysql_select_db($dbname) or die("Cannot select database: ".mysql_error());
$dbcharset = mysql_query("SET NAMES utf8", $dbconnect);
$dbcharset = mysql_query("SET character_set_results=utf8", $dbconnect);



//class Database{	
//private $hostname="localhost";
//private $username="stridemanagement";
//private $password="6ajnt@bUexVU2C";
//private $dbname="NewDatabaseTesting";
//public $db;
//	
//	public function getConnection(){
// 
//        $this->db = null;
// 
//        try{
//            $this->db = new PDO("mysql:host=" . $this->hostname . ";dbname=" . $this->dbname, $this->username, $this->password);
//            $this->db->exec("set names utf8");
//        }catch(PDOException $exception){
//            echo "Connection error: " . $exception->getMessage();
//        }
// 
//        return $this->db;
//    }
//	
//	
//}
//
//echo "success";


?>

