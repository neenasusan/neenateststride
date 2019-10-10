<?php
class Product{
 
    // database connection and table name
    private $conn;
    private $table_name = "payrollUpdate";
 
    // object properties
    public $clientid;
    public $email;
//    public $fname;
//    public $lname;
//    public $adress;
//    public $pcode;
//    public $ticketset;
//	public $optin;
//	public $modfdate;
	
 
    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }
	
	function read(){
 
    // select all query
    $query = "SELECT *FROM
                " . $this->table_name . " ";
 
    // prepare query statement
    $stmt = $this->conn->prepare($query);
 
    // execute query
    $stmt->execute();
 
    return $stmt;
}
	
function create(){
 
    // query to insert record
    $query = "INSERT INTO
                " . $this->table_name . "
            SET
                clientid=:clientid, email=:email";
 
    // prepare query
    $stmt = $this->conn->prepare($query);
 
    // sanitize
    $this->clientid=htmlspecialchars(strip_tags($this->clientid));
    $this->email=htmlspecialchars(strip_tags($this->email));
    
 
    // bind values
    $stmt->bindParam(":clientid", $this->clientid);
    $stmt->bindParam(":email", $this->email);
   
 
    // execute query
    if($stmt->execute()){
        return true;
    }
 
    return false;
     
}
	
	
function readOne(){
 
    // query to read single record
    $query = "SELECT
                 
            *FROM
                " . $this->table_name . " p
                
            WHERE
                p.clientid = ? ";
 
    // prepare query statement
    $stmt = $this->conn->prepare( $query );
 
    // bind id of product to be updated
    $stmt->bindParam(1, $this->clientid);
 
    // execute query
    $stmt->execute();
 
    // get retrieved row
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
 
    // set values to object properties
    $this->clientid = $row['clientid'];
    $this->email = $row['email'];
    
}
	
	
// update the product
function update(){
 
    // update query
    $query = "UPDATE
                " . $this->table_name . "
            SET
                email = :email
               
            WHERE
                clientid = :clientid";
 
    // prepare query statement
    $stmt = $this->conn->prepare($query);
 
    // sanitize
    $this->email=htmlspecialchars(strip_tags($this->email));
    $this->clientid=htmlspecialchars(strip_tags($this->clientid));
 
    // bind new values
    $stmt->bindParam(':email', $this->email);
	 $stmt->bindParam(':clientid', $this->clientid);
    
    
 
    // execute the query
    if($stmt->execute()){
        return true;
    }
 
    return false;
}
	
function delete(){
 
    // delete query
    $query = "DELETE FROM " . $this->table_name . " WHERE clientid = ?";
 
    // prepare query
    $stmt = $this->conn->prepare($query);
 
    // sanitize
    $this->clientid=htmlspecialchars(strip_tags($this->clientid));
 
    // bind id of record to delete
    $stmt->bindParam(1, $this->clientid);
 
    // execute query
    if($stmt->execute()){
        return true;
    }
 
    return false;
     
}
	
	
function search($keywords){
 
    // select all query
    $query = "SELECT
               p.clientid,p.email
            FROM
                " . $this->table_name . " p
                
            WHERE
                p.email LIKE ? OR p.clientid LIKE ? 
          ";
 
    // prepare query statement
    $stmt = $this->conn->prepare($query);
 
    // sanitize
    $keywords=htmlspecialchars(strip_tags($keywords));
    $keywords = "%{$keywords}%";
 
    // bind
    $stmt->bindParam(1, $keywords);
    $stmt->bindParam(2, $keywords);
   
 
    // execute query
    $stmt->execute();
 
    return $stmt;
}
		
	
}



?>