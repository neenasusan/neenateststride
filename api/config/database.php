<?php
class Database{	
private $hostname="localhost";
private $username="stridemanagement";
private $password="6ajnt@bUexVU2C";
private $dbname="NewDatabaseTesting";
public $conn;
	
	public function getConnection(){
 
        $this->conn = null;
 
        try{
            $this->conn = new PDO("mysql:host=" . $this->hostname . ";dbname=" . $this->dbname, $this->username, $this->password);
            $this->conn->exec("set names utf8");
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }
 
        return $this->conn;
    }
	
	
}



?>

