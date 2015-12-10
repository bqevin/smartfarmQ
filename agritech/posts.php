<?php
session_start();
include('connect.php');
?>
<html>
<head></head>
<body>
<?php
$email = $_SESSION['email'];
$qry = "SELECT * FROM  products WHERE email='$email'";
$results = mysql_query($qry,$link);
if(!$results)
{
	die('Error:'.mysql_error());
}
while($row = mysql_fetch_array($results,MYSQL_ASSOC))
{
	echo'<img src="data:image;base64,'.$row['photo'].'" style="border-radius:50%50%50%50%;width:90px;height:90px;" ><br>';
	echo"<span>Type:</span><span>{$row['type']}</span>";
	echo"<span>Price:</span><span>{$row['price']}</span>";
	echo"<span>Amount:</span><span>{$row['amount']}</span>";
	echo"<span>Description:</span><span>{$row['description']}</span>";
}
?>