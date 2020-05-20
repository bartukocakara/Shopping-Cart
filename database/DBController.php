<?php 

class DBController
{
    // Database Connection Properties
    protected $host = 'localhost';
    protected $username = 'root';
    protected $password = '';
    protected $database = 'shopee';

    //connection property
    public $con = null;
    //call constructor
    public function __construct()
    {
        $this->con = mysqli_connect($this->host, $this->username, $this->password, $this->database);
        if($this->con->connect_error){
            echo "Fail" .$this->con->connect_error;
        }
    }
}