<?php
class Database
{
     
    private $host = "localhostsql8.freemysqlhosting.net";
    private $db_name = "tbl_users";
    private $username = "rootsql8148778";
    private $password = "QztrJN1yFQ";
    public $conn;
     
    public function dbConnection()
 {
     
     $this->conn = null;    
        try
  {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=tbl_users" . $this->db_name, $this->username, $this->password);
   $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        }
  catch(PDOException $exception)
  {
            echo "Connection error: " . $exception->getMessage();
        }
         
        return $this->conn;
    }
}


?>