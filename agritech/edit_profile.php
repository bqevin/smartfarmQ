<?php
session_start();
include('connect.php');
?>
<!DOCTYPE html>
<html>
<head></head>
<?php
$email = $_SESSION['email'];
$qry = "SELECT * FROM register WHERE email='$email'";
$retval = mysql_query($qry,$link);
if(!$retval)
{
	die('Error:'.mysql_error());
}
while($row = mysql_fetch_array($retval,MYSQL_ASSOC))
{

echo"<form method='post'action='edit_profile_action.php'>
First Name:<br>
<input type='text'name='fname'value={$row['fname']}><br>
Last Name:<br>
<input type='text'name='lname'value={$row['lname']}><br>
Email:<br>
<input type ='text'name='email'value={$row['email']}><br>
Phone Number:<br>
<input type='text'name='pnumber'value={$row['pnumber']}><br>
County:<br>
<input type='text'name='county'value={$row['county']}><br>
Village:<br>
<input type='text'name='village' value = {$row['village']}><br>
<input type='submit' value='edit'>
</form>";
}
?>
</body></html>
