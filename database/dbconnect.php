<?php
class dbConnect
{
    private $servername = "localhost";
    private $username = "root";
    private $password = "Jamith@5000";
    private $dbName = "bookstore";
    
    private $conn =  mysqli_connect($servername, $username, $password, $dbName);

    public function getConn(){
        $conn = null;
        return self::$conn;
    }
    
}
