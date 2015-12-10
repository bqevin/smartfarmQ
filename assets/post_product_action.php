<?php
session_start();
include('connect.php');
if(isset($_POST['sumit']))
{
  if(getimagesize($_FILES['image']['tmp_name'])==FALSE)
  {
     header("Location:ppic_upload.php?msg=1");
  }
  else
  {
     $image = addslashes($_FILES['image']['tmp_name']);
	 $name = addslashes($_FILES['image']['name']);
	 $image = file_get_contents($image);
	 $image = base64_encode($image);
	 $type = mysql_real_escape_string($_POST['type']);
	 $price = mysql_real_escape_string($_POST['price']);
	 $amount = mysql_real_escape_string($_POST['amount']);
	 $description = mysql_real_escape_string($_POST['description']);
	 $fname = $_SESSION['fname'];
	 $lname = $_SESSION['lname'];
	 $email = $_SESSION['email'];
	 $pnumber = $_SESSION['pnumber'];
   $village = $_SESSION['village'];
	 
	 
  }
  
  
  $insert = "INSERT INTO products(village,type,price,amount,description,fname,lname,email,pnumber,photo)VALUES('$village','$type','$price','$amount','$description','$fname','$lname','$email','$pnumber','$image')";
  if(!mysql_query($insert))
  {
  die('Error:'.mysql_error());
  }
  else
  {
  header("Location:../profile.php?msg=2");
  }
}
?>