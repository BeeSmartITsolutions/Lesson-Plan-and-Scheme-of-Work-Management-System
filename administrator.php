<?php
session_start();
if(!isset($_SESSION['id'])){
session_start();
$_SESSION['message'] = " ";
header("Location:index.php");
exit;
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link rel="stylesheet" type="text/css" href="help.css"/>
<head>

</head>



<body>

<span class="style1">
<table width="72%" height="550" border="o" align="center" bgcolor="#CC99FF">

  <tr>
    <th height="83" colspan="2" valign="bottom"  bordercolor="#FF0000"> 
      
      <div align="right">
      <img src="IMAGE.jpg" width="867" height="100" />ADMINISTRATOR PAGE
     </a> <?php  $weekday = date("l");
$daynumber = date("dS");
$monthyear = date("F Y");
printf("Date: %s  %s  %s", $weekday, $daynumber, $monthyear);

?>
        <a href="logout.php" class="style2">
  <input type="submit" name="logout" value="Logout" ></a>  </tr>
  <tr>
    <th width="20%" height="317" scope="row" bgcolor="#CC99FF">
	<form name="systems_admin" method="post" action="administrator.php">
	  <p>
	    <input type="submit" name="system_users" value="Enter Users" style="width:115px; background-color:#FFCCCC; color:#0000CC"  />
	  </p>
	  <p>
	    <input type="submit" name="view_users" value="View Users" style="width:115px;background-color:#FFCCCC; color:#0000CC" />
	  </p> <p>
	    <input type="submit" name="district" value="Add District" style="width:115px; background-color:#FFCCCC; color:#0000CC"  />
	  </p>
	  <p>
	    <input type="submit" name="view_users" value="Add Course" style="width:115px;background-color:#FFCCCC; color:#0000CC" />
	  </p>
	   <p>
	    <input type="submit" name="system_users" value="Add Semister" style="width:115px; background-color:#FFCCCC; color:#0000CC"  />
	  </p>
	  <p>
	    <input type="submit" name="view_users" value="Add Hall" style="width:115px;background-color:#FFCCCC; color:#0000CC" />
	  </p>
	  </form>	</th>
    <td width="80%" bordercolor="#990033" bgcolor="#eeeeee">
      <p>
        <?php
	if($_POST['system_users']){include("system_users.php");}
	else if($_POST['view_users']){include("view_users.php");}
	else if($_POST['district']){include("district.php");}
	else if($_POST['view_users']){include("view_users.php");}
	else if($_POST['view_users']){include("view_users.php");}



	
	else { echo "<h4 align=left>.</h4> ";}
		?> 
    </p>
    <p>
      <?PHP if($_POST['index2']){include("index2.php");} ?>
    </p>
    <p>&nbsp;</p></td> 
  </tr>
</table>
</body>
</html>


