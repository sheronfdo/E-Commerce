<?php

$conn = new dbConnect();
if ($conn->getConn()->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
