<?php
require('connection.php');
session_start();

$_SESSION['status'] = 'invalid';

unset($_SESSION['student-number']);
echo '<script>window.location.href = "/capstone-project/index.php"</script>';
?>