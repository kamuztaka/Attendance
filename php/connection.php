<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'capstone';

$con = mysqli_connect($host, $user, $password, $database);

if (mysqli_connect_error()) {
  echo 'not connected';
} 

?>