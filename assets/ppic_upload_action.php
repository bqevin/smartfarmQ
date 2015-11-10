<?php
session_start();
include('connect.php');
if(isset($_POST['sumit']))
{
  if(getimagesize($_FILES['image']['tmp_name'])==FALSE)
  {
     header("Location:../profile_photo.php?msg=1");
  }
  else
  {
    $image = addslashes($_FILES['image']['tmp_name']);
	 $name = addslashes($_FILES['image']['name']);
	 $image = file_get_contents($image);
	 $image = base64_encode($image);
	 $email = $_SESSION['email'];
	 
	 
  }
  }
  $insert = "INSERT INTO ppic(photo,email)VALUES('$image','$email')";
  if(!mysql_query($insert))
  {
  die('Error:'.mysql_error());
  }
  else
  {
  unset($_SESSION['email']);
  session_destroy();
  header("Location:../login.php");
  exit();
  }
  ?>