<?php
    session_start();
    session_unset();
    session_destroy();
    header("Location: ../html/LoginPage.php?error=Logout successful");
    exit();
?>
