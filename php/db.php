<?php

class db{
    private $host = "localhost";
    private $username ="root";
    private $db = "mca_staff";
    private $password = "";
    
    protected $conn;
    
    
    public function __construct(){
        try{
            $this->conn = new PDO("mysql:host=$this->host;dbname=$this->db",$this->username,$this->password);
            
            
        }
        catch(Exception $e)
        {
            echo $e->getMessage();
        }
    }


}

    
?>