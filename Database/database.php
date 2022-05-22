<?php
class database
{
    private $username;
    private $password;
    private $servername;
    private $dbname;

    function __construct()
    {
        $this->servername = "localhost";
        $this->username = "root";
        $this->password = "";
        $this->dbname = "infotag";
        
    }
    function db_connection()
    {
        // Create connection
        $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        echo "Connected successfully";
        return $conn;
    }
    function dd_close($conn)
    {
        $conn->close();
    }
}
