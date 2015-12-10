<?php
session_start();
include('connect.php');
?>
<!DOCTYPE html>
<html>
<form method="post"action=action="<?php echo $_SERVER['PHP_SELF'];?>">
Type Of Product:<br>
<select name="type">
<option value="horticulture">Holticultural product </option>
<option value="cereals">Cereal product </option>
<option value="fruits">Fruits </option>
<option value="nuts">Nuts</option>
</select><br>
<input type="submit"value="search"></form></br>
<?php
$type = $_POST['type'];
$village = $_POST['village'];
$qry = "SELECT AVG(amount) FROM products WHERE type='$type' AND village='$village'";
$retval = mysql_query($qry,$link);
if(!$retval)
{
	die('Error on 19:' .mysql_error());
}
while($row = mysql_fetch_array($retval,MYSQL_ASSOC))
{
	$type = $row['type'];
	$village = $row['village'];
	echo"The average amount of $type in $village village is AVG(amount) <a href='view_more_details.php?type=$type & village=$village'>see more</a>";
}
?></body></html>