<?php
include('connect.php');
$fname = mysql_real_escape_string($_POST['fname']);
$lname = mysql_real_escape_string($_POST['lname']);
$email = mysql_real_escape_string($_POST['email']);
$pnumber = mysql_real_escape_string($_POST['pnumber']);

$county = mysql_real_escape_string($_POST['county']);
$village = mysql_real_escape_string($_POST['village']);
$my_email = $_SESSION['email'];

$qry =mysql_query("SELECT * FROM register WHERE email='$email'");
$row = mysql_fetch_array($qry);
if(mysql_num_rows($qry)>0)
{
	header("Location:edit_profile.php?msg=1");
}
$query =mysql_query("SELECT * FROM register WHERE pnumber='$pnumber'");
$row = mysql_fetch_array($query);
if(mysql_num_rows($query)>0)
{
	header("Location:edit_profile.php?msg=2");
}


if(empty($fname)or empty($lname)or empty($email)or empty($pnumber)or empty($county)or empty($village))
{
	header("Location:edit_profile.php?msg=3");
}
else if(!empty($fname)or !empty($lname)or !empty($email)or !empty($pnumber)or !empty($county)or !empty($village))
{
	$update = "UPDATE register SET fname='$fname',lname='$lname',email='$email',pnumber='$pnumber',county='$county',village='$village' WHERE email='$my_email'";
	if(!mysql_query($update))
	{
		die('Error:'.mysql_error());
	}
	else
	{
		header("Location:profile.php");
	}
}
?>