
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="calender.css" />
<script type="text/javascript" src="time.js"></script>
<script src="SpryAssets/SpryValidationSelect.js" type="text/javascript"></script>
<title></title>
<link rel="stylesheet" type="text/css" href="form.css" />
<link href="SpryAssets/SpryValidationSelect.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="box">


<form name="search" method="post" action="searched_plan.php">
  <table width="55%" border="0" align="center">
  <tr>
    <th scope="row"><h3>Select School:</h3></th>
    <td><span id="spryselect1">
      <select name="school">
        <option value="school">--Select--School--</option>
        <?php require_once 'db_config.php'; $query= "select * from school order by school";	$sql=mysqli_query($con, $query);
					if($sql) { while ($row= mysqli_fetch_array($sql)) {
					echo '<option value="'.$row["school"].'">'.$row["school"].'</option>'; } } ?>
      </select>
      <span class="selectRequiredMsg">Please select an item.</span></span>
    <tr>
    <th scope="row"><h3>Select Teacher:</h3></th>
    <td><span id="spryselect2">
      <select name="teacher">
        <option value="teacher">--Select--Teacher--</option>
        <?php require_once 'db_config.php'; $query= "select * from teacher order by  teacher";	$sql=mysqli_query($con, $query);
					if($sql) { while ($row= mysqli_fetch_array($sql)) {
					echo '<option value="'.$row["teacher"].'">'.$row["teacher"].'</option>'; } } ?>
      </select>
      <span class="selectRequiredMsg">Please select an item.</span></span>
    <tr>
    
    <tr>
				  <th scope="row"><h3>Select  Class:</h3></th>
    <td><span id="spryselect3">
      <select name="class">
        <option value="class">--Select--Class--</option>
        <?php require_once 'db_config.php'; $query= "select * from class order by class";	$sql=mysqli_query($con, $query);
					if($sql) { while ($row= mysqli_fetch_array($sql)) {
					echo '<option value="'.$row["class"].'">'.$row["class"].'</option>'; } } ?>
      </select>
      <span class="selectRequiredMsg">Please select an item.</span></span>
    <tr>
    <th scope="row"><h3>Select Subject:</h3></th>
    <td><span id="spryselect4">
      <select name="subject">
        <option value="subject">--Select--subject--</option>
        <?php require_once 'db_config.php'; $query= "select * from subject order by subject";	$sql=mysqli_query($con, $query);
					if($sql) { while ($row= mysqli_fetch_array($sql)) {
					echo '<option value="'.$row["subject"].'">'.$row["subject"].'</option>'; } } ?>
      </select>
      <span class="selectRequiredMsg">Please select an item.</span></span>
    </table>

      <div align="center"><input type="submit" name="search" value="Submit" /></div></td>
</div></form>
<script type="text/javascript">
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1");
var spryselect2 = new Spry.Widget.ValidationSelect("spryselect2");
var spryselect3 = new Spry.Widget.ValidationSelect("spryselect3");
var spryselect4 = new Spry.Widget.ValidationSelect("spryselect4");
</script>
</body>
</html>