<?php

$server = "localhost";
$user = "root";
$pass = "";
$databaseName = 'demo_database';


$conn = new mysqli($server,$user,$pass);

if($conn->connect_error){
  die("Connection Failed:".$conn->connect_error);
}

$sql = "CREATE DATABASE $databaseName";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}
 ?>
