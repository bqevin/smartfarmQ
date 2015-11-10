<?php
define('DB_NAME','agritech');
define('DB_USER','root');
define('DB_PASS','');
define('DB_HOST','localhost');
$item_per_page = 4;
$link = mysql_connect(DB_HOST,DB_USER,DB_PASS);
if(!$link)
{
	die('cannot connect:'.mysql_error());
}
$db_selected = mysql_select_db(DB_NAME,$link);
if(!$db_selected)
{
	die('cannot use this db:'.mysql_error());
}
?>