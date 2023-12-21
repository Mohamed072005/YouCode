<?php

class DataBase 
{
    private $host_name = 'localhost';
    private $db_name = 'youcode';
    private $user_name = 'root';
    private $password = '';
    private $conn;

    public function connect(){
        try{
            $this->conn = new PDO("mysql:host={$this->host_name};dbname={$this->db_name}", $this->user_name, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->conn;
        }catch (PDOException $e){
            echo "No Connect" . $e->getMessage();
        }
        
    }
}
?>