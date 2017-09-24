<?php
session_start();
if(!isset($_SESSION['id'])){
session_start();
$_SESSION['message'] = " Please login";
header("Location:index.php");
exit;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>SCHEME AND LESSON PLAN</title>
<link rel="stylesheet" type="text/css" href="general.css" />
</head>
<body bgcolor="#FF0000">
<table align="center" class="displaytable">
<tr height="20%">
<td align="center" bgcolor="#00FF00"><img src="header2.jpg"width="100%" height="70%" id="top_image" />
<div style=" background-color:#666666;border:groove; border:1px;"><?php include ("admin_menu2.php"); ?></td>
  </tr>
  <tr height="70%" valign="top" style="border:groove; border:">
  <td valign="top"><iframe name="display"   src="SchemeWork.php" width="100%" height="100%" style=" border:#009966; border:1px;"></iframe></td>
  </tr>
  </tr>
</table>


</body>
</html>

