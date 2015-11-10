<?php
session_start();
include('connect.php');

//Insert new values
$fname = mysql_real_escape_string($_POST['fname']);
$lname = mysql_real_escape_string($_POST['lname']);
$email = mysql_real_escape_string($_POST['email']);
$pnumber = mysql_real_escape_string($_POST['pnumber']);
$password = mysql_real_escape_string($_POST['password']);
$county = mysql_real_escape_string($_POST['county']);
$village = mysql_real_escape_string($_POST['village']);
$type = mysql_real_escape_string($_POST['type']);
$qry =mysql_query("SELECT * FROM register WHERE email='$email'");
$row = mysql_fetch_array($qry);
if(mysql_num_rows($qry)>0)
{
	header("Location:index.php?msg=2");
}
$query =mysql_query("SELECT * FROM register WHERE pnumber='$pnumber'");
$row = mysql_fetch_array($query);
if(mysql_num_rows($query)>0)
{
	header("Location:../register.php?msg=3");
}


if(empty($fname)or empty($lname)or empty($email)or empty($pnumber)or empty($password)or empty($county)or empty($village)or empty($type))
{
	header("Location:../register.php?msg=1");
}
else if(!empty($fname)or !empty($lname)or !empty($email)or !empty($pnumber)or !empty($password)or !empty($county)or !empty($village)or !empty($type))
{
	$insert = "INSERT INTO register(fname,lname,email,pnumber,password,county,village,type)VALUES('$fname','$lname','$email','$pnumber','$password','$county','$village','$type')";
	if(!mysql_query($insert))
	{
		die('Error:'.mysql_error());
	}
	else
	{
		$_SESSION['email'] = $email;
		header("Location:../profile_photo.php");
	}
}
?>