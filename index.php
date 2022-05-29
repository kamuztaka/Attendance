<?php
require('./php/connection.php');
session_start();

if ($_SESSION['status'] == 'invalid' || empty($_SESSION['status'])) {
  $_SESSION['status'] = 'invalid';
}

if ($_SESSION['status'] == 'valid') {
  echo "<script>window.location.href = '/attendance/student-main-page.php'</script>";
}

if (isset($_POST['login'])) {
  $studentNumber = trim($_POST['student-number']);
  $password = trim($_POST['password']);

  if (empty($studentNumber) || empty($password)) {
    echo '<script>alert("Please fill out the fields")</script>';
  } else {
    $queryLogin = "SELECT * FROM accounts WHERE username = '$studentNumber' AND password = '$password'";
    $sqlLogin = mysqli_query($con, $queryLogin);
    $result = mysqli_fetch_array($sqlLogin);

    if(mysqli_num_rows($sqlLogin) > 0) {
      $_SESSION['status'] = 'valid';
      $_SESSION['student-number'] = $result['student-number'];
      echo '<script>window.location.href = "/attendance/student-main-page.php"</script>';
    } else {
      $_SESSION['status'] = 'invalid';
      echo '<script>alert("Wrong student number and password")</script>';
    }
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>LOGIN</title>
  <!-- css -->
  <link rel="stylesheet" href="./css/index.css?v=<?php echo time(); ?>" />
</head>

<body>
  <div class="main">
    <!-- header -->
    <div class="header">
      <img src="./img/saint-jude-college-icon.png" alt="Saint Jude College logo" class="sjc-icon" />
      <p>Saint Jude College</p>
      <h3>PHINMA EDUCATION NETWORK</h3>
    </div>

    <div class="header2"></div>

    <!-- form -->
    <div class="form-container">
      <form action="index.php" method="post">
        <h1>Student Login</h1>
        <input type="text" class="student-number" name="student-number" placeholder="Enter your Student Number" />
        <input type="password" class="password" name="password" placeholder="Enter your password" />
        <a href="#">Forgot Password</a>
        <input type="submit" class="btn-login" name="login" value="LOGIN" />
      </form>
    </div>
  </div>
</body>

</html>