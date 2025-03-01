<!-- Making Connnection with the Database -->

<?php

$host = "localhost";
$server = "root";
$pass = "";
$db = "php_practice";

$conn = new mysqli ($host,$server,$pass,$db);

if($conn->connect_error){
    die("connection failed". $conn->connect_error);
}