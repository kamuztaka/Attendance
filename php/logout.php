<?php
require('connection.php');
session_start();

$_SESSION['status'] = 'invalid';

unset($_SESSION['student-number']);
echo '<script>window.location.href = "/attendance/index.php"</script>';
?>