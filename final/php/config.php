<?php
$host = "localhost";
$userName = "root";
$password = "";
$dbName = "movies_online";
// connection with database
$connect = new mysqli($host, $userName, $password, $dbName);
// connection verification
if ($connect->connect_error) {
die("Connection failed " . $connect->connect_error);
}
?>