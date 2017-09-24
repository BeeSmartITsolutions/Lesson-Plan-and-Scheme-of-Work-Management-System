<?php
$host_server = "localhost";
$root		 = "root";
$passwd		 = "";
$db			 ="drugs_records";
$db_conn =mysql_connect($host_server, $root,$passwd) or die ("could not connect to the database.");
mysql_select_db($db, $db_conn) or die ("could not select the database.");
?>