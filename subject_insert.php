<?php
 include("connection.php"); 
  //auto generate next id.
 
 
//declaring variables for Login
$subject=$_POST['subject'];

//inserting into table Login
$query1 = mysql_query("INSERT INTO subject(subject_id,subject) 
VALUE(NULL,'".$subject."')");


//checking for an error in the query

if (!$query1)
{

Die ("Error in your query1" . mysql_error());
}
else
{
echo '<b><font color="black">  '.$subject.' <font color="green">  Has been Uploaded To The System</font> 
  </font></b><br />';
	
}
?>