<?php
 
 
function Connect()
{
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "rootpasswd123";
 $dbname = "messages";
 
 // Create connection
 $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die($conn->connect_error);
 
 return $conn;
}
 
?>