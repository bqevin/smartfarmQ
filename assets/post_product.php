<?php
session_start();
include('connect.php');
?>
<html>
<title></title>
<body>
<?php
if(isset($_GET['msg']))
{
	$message = $_GET['msg'];
	if($message==1)
	{
		echo"posted successfully!";
	}
	if($message==2)
	{
		echo"posted successfully!";
	}
}
?>
<form method="post"action="post_product_action.php" enctype="multipart/form-data">
Type Of Product:<br>
<select name="type">
<option value="horticulture">Holticultural product </option>
<option value="cereals">Cereal product </option>
<option value="fruits">Fruits </option>
<option value="nuts">Nuts</option>
</select><br>
Price per kg:<br>
<input type="text"name="price"><br>
Amount in kgs:<br>
<input type="text" name="amount"><br>
Description:<br>
<textarea name="description" rows="5" cols="40"></textarea><br>
<input type="file"name="image"/><br><br>
<input type="submit"name="sumit"value="post">
</form>
</body></html>
