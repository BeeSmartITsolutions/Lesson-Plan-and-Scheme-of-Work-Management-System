<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>scheme</title>
<link rel="stylesheet" type="text/css" href="general.css" />
<link rel="stylesheet" type="text/css" href="general.css" />

<link rel="stylesheet" href="files/flora.css" type="text/css" media="screen, projection">
<link rel="stylesheet" href="files/thickbox.css" type="text/css" media="screen, projection">
<link rel="stylesheet" type="text/css" href="files/jqueryslidemenu.css" media="screen, projection">

<link href="files/style.css" type="text/css" rel="stylesheet" media="screen, projection">
<script src="files/ga.js" async="" type="text/javascript"></script><script src="files/jquery.js"></script>
<script type="text/javascript" src="files/jquery_003.js"></script>
<script src="files/jquery_004.js"></script>
<script type="text/javascript">var arrowimages={down:["downarrowclass",  23], right:["rightarrowclass"]}</script> 
<script src="files/jqueryslidemenu.js" type="text/javascript"></script>
<script src="files/jquery_002.js" type="text/javascript"></script>
<script type="text/javascript" src="files/thickbox.js"></script>

<script type="text/javascript" src="files/jquery_005.js"></script>
<script type="text/javascript" src="files/init.js"></script>

</head>

<body background="pics/bg_repeat_blue.jpg">

<div id="content" class="container  margin-top:50%;">
  <div id="right_bar">
<div id="main_content">
<div class="slide">
 
<div bg class="bx-wrapper" style="width:950px; position:relative;">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p align="center"><img src="header2.jpg" width="100%" height="100%</h5>" /> LOGIN PAGE:
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <hr align="center" color="#FF3300" /></p>
<br><br>
  <p>&nbsp;</p><div align="center">
     <form id="form1" name="Previllages" method="post" action="Previllages.php">

	           <font color="green" size="+1">
<?php  $weekday = date("l");
$daynumber = date("dS"); 
$monthyear = date("F Y");
printf(" %s  %s  %s", $weekday, $daynumber, $monthyear);
?></font>
 <p></p>
<font color="#990000" size="+1">
<?php
echo $_SESSION['message'];
session_destroy();
?>
	            <table width="34%" border="0" align="center" class="style5">
	              <tr>
	                <td width="35%" class="style7">UserName:</td>
                    <td width="65%"> <input type="text" name="Username" size="15" />&nbsp;</td>
	              </tr>
	              <tr>
	                <td class="style7">Password:</td>
              <td>    <input type="password" name="Password" size="15" /></td>
            </tr>
	              <tr>
	                <td height="49"></td>
              <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="log" type="submit" class="Button" id="log" value="Login" />
                <input type="reset" name="Submit2" value="Reset" /></td>
            </tr>
                </table>
	            </form>
	            </p>
                    
            <p>&nbsp;</p>
                      <p>&nbsp;</p>
                      <p>&nbsp;</p>
                      <p>&nbsp;</p>
                      <p>&nbsp;</p>
                      <p>&nbsp;</p>
                      <p>&nbsp;</p>
                      <p>&nbsp;</p>
                      
  </div>
	          <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</div>
</div>
</div>
  </div>
</div>

</body>
</html>
