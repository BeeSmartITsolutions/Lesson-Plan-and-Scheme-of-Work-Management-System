<?php
$host_server="localhost";
$username="root";
$password="";
$db_name="drugs_records";
$db=mysql_connect($host_server,$username,$password);
if (!$db)
{
echo 'Failed to connect to the database';
}
else

$s= mysql_select_db($db_name,$db);

?>