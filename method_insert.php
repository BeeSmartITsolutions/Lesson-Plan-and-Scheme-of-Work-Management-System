<?php
 include("connection.php"); 
  //auto generate next id.
 
 
//declaring variables for Login
$method=$_POST['method'];

//inserting into table Login
$query1 = mysql_query("INSERT INTO method(method_id,method) 
VALUE(NULL,'".$method."')");


//checking for an error in the query

if (!$query1)
{

Die ("Error in your query1" . mysql_error());
}
else
{
echo '<b><font color="black">  '.$method.' <font color="green">  Has been Uploaded To The System</font> 
  </font></b><br />';
	
}
?>