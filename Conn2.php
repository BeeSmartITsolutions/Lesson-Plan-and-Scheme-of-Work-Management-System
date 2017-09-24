<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "scheme";
$conn = mysql_connect($host,$user,$password)or die(mysql_error());
mysql_select_db($db,$conn)or die(mysql_error());
?>