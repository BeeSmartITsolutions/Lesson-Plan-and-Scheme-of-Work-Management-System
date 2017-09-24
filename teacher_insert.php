<?php
 include("connection.php"); 
  //auto generate next id.
 
 
//declaring variables for Login
$teacher=$_POST['teacher'];

//inserting into table Login
$query1 = mysql_query("INSERT INTO teacher(teacher_id,teacher) 
VALUE(NULL,'".$teacher."')");


//checking for an error in the query

if (!$query1)
{

Die ("Error in your query1" . mysql_error());
}
else
{
echo '<b><font color="black">  '.$teacher.' <font color="green">  Has been Uploaded To The System</font> 
  </font></b><br />';
	
}
?>