<?php
 include("connection.php"); 
  //auto generate next id.
 
 
//declaring variables for Login
$term=$_POST['term'];

//inserting into table Login
$query1 = mysql_query("INSERT INTO term(term_id,term) 
VALUE(NULL,'".$term."')");


//checking for an error in the query

if (!$query1)
{

Die ("Error in your query1" . mysql_error());
}
else
{
echo '<b><font color="black">  '.$term.' <font color="green">  Has been Uploaded To The System</font> 
  </font></b><br />';
	
}
?>