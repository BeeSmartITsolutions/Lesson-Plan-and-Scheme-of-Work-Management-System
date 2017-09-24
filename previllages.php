<?php 
include("Conn2.php");
$username=$_POST['Username'];
$password=$_POST['Password'];

if(($username == "") || ($password =="")){
session_start();
$_SESSION['message'] = "Please Enter Username and Password";
header("location:index.php");
exit;
}

$sql=mysql_query("select * from Login where Username='$username' and Password='$password'");
$data=mysql_num_rows($sql);
$rows=mysql_fetch_array($sql);
if($data >= 1)
{
session_start();
$_SESSION['id']="auth";
$Type=$rows['Type'];
if($Type=="Administrator"){
header ("location:Administrator_page.php");
exit;
}
elseif($Type=="User") {
header ("location:User_page.php");
exit;
}
 elseif($Type=="Cival") {
header ("location:Cival_page.php");
exit;
}
elseif($Type=="Finance") {
header ("location:Finance.php");
exit;
}
else{
header ("location:Business_Userspage.php");
exit;
}
}
else
{
session_start();
$_SESSION['message'] = "Please Enter correct login Details";
header("location:index.php");
}
?>






