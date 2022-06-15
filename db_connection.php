<?php
$host = "localhost";
$user = "root";
$password = "";
$dbName = "murangadb";
//Connect to the db
$connection = mysqli_connect($host,$user,$password,$dbName);
//Checking if the connection failed to stop any further processes
if (!isset($connection)){
    die("DB connection failed");
}



