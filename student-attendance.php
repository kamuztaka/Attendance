<?php
  require('./php/session.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>STUDENT ATTENDANCE</title>
  <link rel="stylesheet" href="./css/student-attendance.css?v=<?php echo time(); ?>" />
</head>

<body>
  <div class="main">
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

      <form action="./php/create.php" method="post">
        <input type="text" name="name" class="name" placeholder="Enter your Name" />
        <input type="text" name="subject" class="subject" placeholder="Subject" />
        <input type="date" name="date" class="date" placeholder="Enter your Date" />

        <div class="choice-container">
          <p>Are you attending the class</p>
          <input type="radio" name="choices" id="yes" value="yes" class="yes" />
          <label for="yes">YES</label>
          <input type="radio" name="choices" id="no" value="no" class="no" />
          <label for="no">NO</label>
        </div>

        <input type="submit" name="save" class="save" value="SAVE" />
      </form>
    </div>
  </div>

  <script src="./js/sidebar.js"></script>
</body>

</html>