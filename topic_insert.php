<?php
 include("connection.php"); 
  //auto generate next id.
 
 
//declaring variables for Login
$topic=$_POST['topic'];

//inserting into table Login
$query1 = mysql_query("INSERT INTO topic(topic_id,topic) 
VALUE(NULL,'".$topic."')");


//checking for an error in the query

if (!$query1)
{

Die ("Error in your query1" . mysql_error());
}
else
{
echo '<b><font color="black">  '.$topic.' <font color="green">  Has been Uploaded To The System</font> 
  </font></b><br />';
	
}
?>