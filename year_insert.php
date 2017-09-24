<?php
 include("connection.php"); 
  //auto generate next id.
 
 
//declaring variables for Login
$year=$_POST['year'];

//inserting into table Login
$query1 = mysql_query("INSERT INTO year(year_id,year) 
VALUE(NULL,'".$year."')");


//checking for an error in the query

if (!$query1)
{

Die ("Error in your query1" . mysql_error());
}
else
{
echo '<b><font color="black">  '.$year.' <font color="green">  Has been Uploaded To The System</font> 
  </font></b><br />';
	
}
?>