<?php
 include("connection.php"); 
  //auto generate next id.
 
 
//declaring variables for Login
$school=$_POST['school'];

//inserting into table Login
$query1 = mysql_query("INSERT INTO school(school_id,school) 
VALUE(NULL,'".$school."')");


//checking for an error in the query

if (!$query1)
{

Die ("Error in your query1" . mysql_error());
}
else
{
echo '<b><font color="black">  '.$school.' <font color="green">  Has been Uploaded To The System</font> 
  </font></b><br />';
	
}
?>