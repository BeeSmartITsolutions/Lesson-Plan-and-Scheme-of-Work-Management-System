
<html><head>
<link rel="stylesheet" type="text/css" href="calender.css" />
<script type="text/javascript" src="time.js"></script>
<title></title>
<link rel="stylesheet" type="text/css" href="form.css" />
</head>
<body bgcolor="#00FF00">
<div class="box">
<form name="form" method="post" action="class_insert.php">

<p align="center"><font color="#003399"></font>
<h2><font color="#003399">
</font>
<div align="center"><font color="#003399">Enter Class </font></div>
</h2> 
</p>
<table width="396" border="1" align="center" bgcolor="#00FFFF"    cellspacing="0">

<tr>
  <td>Class </td>
  <td><input type="text" name="class"  id="class" size="35"  value="<?php echo htmlentities($disp_class) ?>" /></td>
 </tr>

</table>
<div align="center">
  <input name="submit" type="submit" value="submit" />
 
  &nbsp;&nbsp;&nbsp;&nbsp;
  <input type="Reset"  value="Reset" />
</form>
</div>
</body>
</html>


