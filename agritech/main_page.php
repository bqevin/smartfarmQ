<?php
session_start();
include('connect.php');
?>
<!DOCTYPE html>
<html>
<title></title>
<body>
<span><a href="home.php"style="text-decoration:none;">Home</a></span>&nbsp
<span><a href="profile.php"style="text-decoration:none;">Profile</a></span>&nbsp

<span><a href='post_product.php'style='text-decoration:none;'>Submit Product</a></span>&nbsp &nbsp


<span><a href="review_posts.php"style="text-decoration:none;">Posts</a></span>&nbsp
<span>
<form method="post" action="village_search.php">
<input type="text"name="village"><input type="submit"value="search"></form></span>//weka drop down ya villages hapo
<span><a href ="logout.php"style="text-decoration:none;">Logout</a></span>&nbsp<br>
<?php
$qry = "SELECT * FROM products";
$retval = mysql_query($qry,$link);
if(!$retval)
{
	die('cannot fetch data:'.mysql_error());

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
</body></html>