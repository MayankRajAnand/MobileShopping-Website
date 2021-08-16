<?php

class DBController
{
    // Database connection
    protected $host = 'localhost';
    protected $user = 'root';
    protected $password = '';
    protected $database = 'shopee';

    //connection property
    public $con = null;

    // call constructor
    public function __construct()
    {
        $this->con = mysqli_connect($this->host, $this->user, $this->password, $this->database);
        if ($this->con->connect_error) {
            echo "Connection failed due to " . $this->con->connect_error;
        }
        // } else {
        //     echo "Connection Sucessful";
        // }
    }
    public function __destruct()
    {
        $this->closeConnection();
    }

    //for closing connection
    protected function closeConnection()
    {
        if ($this->con != null) {
            $this->con->close();
            $this->con = null;
        }
    }
}

// //DBController object
// $db = new DBController();
