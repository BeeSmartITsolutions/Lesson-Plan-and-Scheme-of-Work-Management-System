<?php  
$db_host = "localhost"; 
$db_user = "root";  
$db_pass = "";  
$db_name = "students"; 

// Run the actual connection here  
$db_connect = mysql_connect("$db_host","$db_user","$db_pass");
if(!db_connect){
	die ("couldn't establish connection to the database".mysql_error());
}

//select the database
$db_select = mysql_select_db("$db_name"); 
if(!$db_select){
	die ("couldn't select database".mysql_error());
}             
?>