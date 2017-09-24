<?php
 include("connection.php"); 
  //auto generate next id.
 
 
//declaring variables for Login
$period=$_POST['period'];

//inserting into table Login
$query1 = mysql_query("INSERT INTO period(period_id,period) 
VALUE(NULL,'".$period."')");


//checking for an error in the query

if (!$query1)
{

Die ("Error in your query1" . mysql_error());
}
else
{
echo '<b><font color="black">  '.$period.' <font color="green">  Has been Uploaded To The System</font> 
  </font></b><br />';
	
}
?>