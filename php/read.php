<?php
require('connection.php');

$queryAttendance = "SELECT * FROM attendance";
$sqlAttendance = mysqli_query($con, $queryAttendance);

?>