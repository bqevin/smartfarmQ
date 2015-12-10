<?php
include('templates/header.php');
$type = $_GET['type'];
$village = $_GET['village'];
$query = "SELECT * FROM products WHERE type='$type' AND village='$village'";
$retval = mysql_query($query,$link);
if(!$retval)
{
	die('Error on 7:'.mysql_error());
}
while($row = mysql_fetch_array($retval,MYSQL_ASSOC))
{
	echo'<img src="data:image;base64,'.$row['photo'].'" style="width:90px;height:90px;" ><br>';
	echo"<span>Type of Product:</span><span>{$row['type']}</span><br>";
	echo"<span>Amount in kgs:</span><span>{$row['amount']}</span><br>";
	echo"<span>Price per kg:</span><span>{$row['price']}</span><br>";
	echo"<span>Suppliers Number:</span><span>{$row['pnumber']}</span><br>";
	echo"<span>Brief Description:</span><span>{$row['description']}</span><br>";
}
?>