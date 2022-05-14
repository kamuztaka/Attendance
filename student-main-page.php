<?php
require('./php/session.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>MAIN PAGE</title>
  <link rel="stylesheet" href="./css/student-main-page.css?v=<?php echo time(); ?>" />
</head>

<body>
  <!-- header -->
  <div class="main">
    <div class="header">
      <img src="./img/saint-jude-college-icon.png" alt="Saint Jude College logo" class="sjc-icon" />
      <p>Saint Jude College</p>
      <h3>PHINMA EDUCATION NETWORK</h3>
      <img src="./img/bar icons.png" class="bar" id="bar" />
      <div class="header2"></div>
    </div>

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

    <div class="subject-container">
      <a href="./student-attendance.php">
        <div class="box">Platform Technologies</div>
      </a>
      <a href="./student-attendance.php">
        <div class="box">Student Success Program</div>
      </a>
      <a href="./student-attendance.php">
        <div class="box">Introduction to Natural Language Processing</div>
      </a>
      <a href="./student-attendance.php">
        <div class="box">System Administrator</div>
      </a>
      <a href="./student-attendance.php">
        <div class="box">Project Management</div>
      </a>
      <a href="./student-attendance.php">
        <div class="box">Information Assurance Security 2</div>
      </a>
      <a href="./student-attendance.php">
        <div class="box">Capstone Research 2</div>
      </a>
    </div>
  </div>

  <script src="./js/sidebar.js"></script>
</body>

</html>