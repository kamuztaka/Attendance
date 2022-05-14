<?php
    session_start();

    if ($_SESSION['status'] == 'invalid' || empty($_SESSION['status'])) {
        $_SESSION['status'] = 'invalid';

        unset($_SESSION['student-number']);

        echo '<script>window.location.href = "/capstone-project/index.php"</script>';
    }

?>