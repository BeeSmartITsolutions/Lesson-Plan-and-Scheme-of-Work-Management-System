<?php
 include("connection.php"); 
  //auto generate next id.
 
 
//declaring variables for Login
$subtopic=$_POST['subtopic'];

//inserting into table Login
$query1 = mysql_query("INSERT INTO sub_topic(sub_topic_id,subtopic) 
VALUE(NULL,'".$subtopic."')");


//checking for an error in the query

if (!$query1)
{

Die ("Error in your query1" . mysql_error());
}
else
{
echo '<b><font color="black">  '.$subtopic.' <font color="green">  Has been Uploaded To The System</font> 
  </font></b><br />';
	
}
?>