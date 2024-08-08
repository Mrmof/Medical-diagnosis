<?php 
session_start();
class Config{
    public $hostname = 'localhost';
    public $username = 'root';
    public $password = '';
    public $database = 'diagnosis';

    public $connection;

    public function __construct()
    {
        $this->connection = new mysqli($this->hostname, $this->username, $this->password, $this->database);

        if ($this->connection->connect_error) {
            die('connection failed'.$this->connection->error);
        }
    }

    public function connection()
    {
        return $this->connection;
    }

}

// $connect = new Config();
// $connect->connection();