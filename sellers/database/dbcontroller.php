<?php


class DBCONTROLLER{

//connect variables

protected $host = 'localhost';
protected $username = 'root';
protected $password = '';
protected $dbname = 'shopit';

public $conn = null;

public function __construct()
{
    $this->conn = mysqli_connect($this->host, $this->username,$this->password,$this->dbname);
    if ($this->conn->connect_error) {
       echo "FAILED" . $this->conn->connect_error;
    }
}

//close connection when not
public function __destruct()
{
    $this->closeConnection();
}

protected function closeConnection(){
    if ($this->conn != null) {
      $this->conn->close();
      $this->conn = null;
    }
}




}