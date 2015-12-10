<?php
session_start();
include('connect.php');
?>
<!DOCTYPE html>
<html>
<body>
<form name="ppic_upload"method="post"action="ppic_upload_action.php"enctype="multipart/form-data"/>
<input type="file"name="image"/><br><br>
<input type="submit"value="upload" name ="sumit"style="background-color:#66CC00;color:white;border-radius:5px;width:100px;height:40px;"></form></body></html>