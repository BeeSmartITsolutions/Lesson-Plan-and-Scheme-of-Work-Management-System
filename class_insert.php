<?php
 include("connection.php"); 
  //auto generate next id.
 
 
//declaring variables for Login
$class=$_POST['class'];

//inserting into table Login
$query1 = mysql_query("INSERT INTO class(class_id,class) 
VALUE(NULL,'".$class."')");


//checking for an error in the query

if (!$query1)
{

Die ("Error in your query1" . mysql_error());
}
else
{
echo '<b><font color="black">  '.$class.' <font color="green">  Has been Uploaded To The System</font> 
  </font></b><br />';
	
}
?>