<?php
session_start();
include('connect.php');
?>
<!DOCTYPE>
<html>
<title></title>
<body>
<form method="post"action="direct_login_action.php">
Email:<br>
<input type="text"name="email"><br>
Password:<br>
<input type="text"name="password"><br>
<input type="submit"value="login"></form>