<?php 
  require('connection.php');

  if (isset($_POST['save'])) {
    $name = trim($_POST['name']);
    $subject = trim($_POST['subject']);
    $date = trim($_POST['date']);
    $choice = trim($_POST['choices']);

    $sqlCreate = "INSERT INTO attendance VALUES( null, '$name', '$subject', '$date', '$choice')";
    $queryCreate = mysqli_query($con, $sqlCreate);

    echo '<script>window.location.href = "/attendance/student-attendance-list.php"</script>';
  } else {
    echo '<script>window.location.href = "/attendance/student-attendance.php"</script>';
  }


?>