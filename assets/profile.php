<?php
session_start();
include('connect.php');
?>
<!DOCTYPE html>
<html>
<body>
<?php
$email = $_SESSION['email'];
$query = "SELECT * FROM ppic WHERE email='$email'";
$results = mysql_query($query,$link);
if(!$results)
{
	die('cannot fetch data:'.mysql_error());
}
while($row = mysql_fetch_array($results,MYSQL_ASSOC))
{
	echo'<img src="data:image;base64,'.$row['photo'].'" style="border-radius:50%50%50%50%;width:90px;height:90px;" ><br>';
}
$qry = "SELECT * FROM register WHERE email='$email'";
$retval = mysql_query($qry,$link);
if(!$retval)
{
	die('Error:'.mysql_error());
}
while($row = mysql_fetch_array($retval,MYSQL_ASSOC))
{
	$fname = $row['fname'];
	echo"<span>First Name:</span> <span>{$row['fname']}</span><br>";
	echo"<span>Last Name:</span> <span>{$row['lname']}</span><br>";
	echo"<span>Email:</span> <span>{$row['email']}</span><br>";
	echo"<span>Phone Number:</span > <span>{$row['pnumber']}</span><br>";
	echo"<span>County:</span> <span>{$row['county']}</span><br>";
	echo"<span>Village:</span <span>{$row['village']}</span><br>";
	echo"<span>Registered as:</span> <span>{$row['type']}</span><br>";
	echo"<form method='post'action='edit_profile.php'>
	<input type='submit'value='edit profile'>";

}
?>
</body>
</html>