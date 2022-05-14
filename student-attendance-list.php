<?php
require('./php/read.php');
require('./php/session.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ATTENDANCE LIST</title>
  <link rel="stylesheet" href="./css/student-attendance-list.css?v=<?php echo time(); ?>">
</head>

<body>
  <div class="main">
    <!-- header -->
    <div class="header">
      <img src="./img/saint-jude-college-icon.png" alt="Saint Jude College logo" class="sjc-icon" />
      <p>Saint Jude College</p>
      <h3>PHINMA EDUCATION NETWORK</h3>
      <img src="./img/bar icons.png" class="bar" id="bar" />
      <div class="header2"></div>
    </div>

    <!-- sidebar -->
    <div class="sidebar-main close" id="sidebar">
      <a href="student-main-page.php">
        <p>Student Subjects</p>
      </a>
      <a href="student-attendance-list.php">
        <p>Attendance</p>
      </a>
      <form action="./php/logout.php" method="post">
        <input type="submit" value="Logout">
      </form>
      <span id="close">&#x292B;</span>
    </div>

    <!-- attendance sheets -->
    <div class="attendance-container">
      <h1>Attendance</h1>

      <?php while($results = mysqli_fetch_array($sqlAttendance)) { ?>
      <div class="box-container">
        <p>Name: <?php echo $results['name'] ?> </p>
        <p>Subject: <?php echo $results['subject'] ?> </p>
        <p>Date: <?php echo $results['date'] ?> </p>
        <p>Do you attend a Class?: <?php echo $results['choices'] ?> </p>
      </div>
      <?php } ?>

    </div>
  </div>
  </div>

  <script src="./js/sidebar.js"></script>
</body>

</html>