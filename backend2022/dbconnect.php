<?php
$host="localhost";
$user="root";
$password="";
$db="school";
$conn= mysqli_connect($host,$user,$password,$db);

// connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}



?>