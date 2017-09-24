<?php
/* connect to the database*/
$con = new mysqli('localhost', 'root', '', 'scheme');

// check connection
if (mysqli_connect_errno()) 
{
  exit('Connect failed: '. mysqli_connect_error());
}
 
?>