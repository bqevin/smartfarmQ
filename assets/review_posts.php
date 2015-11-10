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
	echo'<img src="data:image;base64,'.$row['photo'].'" style="width:90px;height:90px;" ><br>';
	echo"<span>Type:</span><span>{$row['type']}</span><br>";
	echo"<span>Price:</span><span>{$row['price']}</span><br>";
	echo"<span>Amount:</span><span>{$row['amount']}</span><br>";
	echo"<span>Description:</span><span>{$row['description']}</span><br>";
	echo"<form method='post'action='edit_posts.php'>
	<input type='submit'value='Edit'></form>";
}
?>