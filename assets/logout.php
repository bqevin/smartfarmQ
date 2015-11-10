<?php
session_start();
unset($_SESSION['fname']);
unset($_SESSION['lname']);
unset($_SESSION['email']);
unset($_SESSION['pnumber']);
unset($_SESSION['type']);
session_destroy();
header("Location: ../login.php");
exit;
?>
