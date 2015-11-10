<?php
session_start();
include('connect.php');
$email = $_POST['email'];
$password = $_POST['password'];
$qry = mysql_query("SELECT * FROM register WHERE email='$email' AND password='$password'");
$row = mysql_fetch_array($qry);
if(mysql_num_rows($qry)>0)
{
	$_SESSION['fname'] = $row['fname'];
	$_SESSION['lname'] = $row['lname'];
	$_SESSION['email'] = $row['email'];
	$_SESSION['pnumber'] = $row['pnumber'];
	$_SESSION['type'] = $row['type'];
	header("Location:ppic_upload.php");
}
else
{
	header("Location:login.php?msg=1");
}