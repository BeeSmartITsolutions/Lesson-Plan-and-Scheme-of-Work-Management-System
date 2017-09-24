<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>SCHEME OF WORK</title>
<style type="text/css">
<!--
.style2 {font-weight: bold}
-->
</style>
<script src="SpryAssets/SpryValidationSelect.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationSelect.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
</head>
<body bgcolor="#FF00FF">
<form method="POST" name="LessonPlan" class="style2" id="LessonPlan" action="scheme_insert.php">
  
  <p align="center"><font size="+6" style="background-color: #00FFFF;">THE SCHEME OF WORK</font> </p>
  <table width="509" border="1" align="center"    cellspacing="0" bgcolor="#00FF00">

 <tr>
  <td>School:</td><td><span id="spryselect1">
    <select name="school_id" id="school_id">
      <option option value="0">--Select--School--</option>
      <?php require_once 'connection2.php'; $query= "select * from school order by school";	$sql=mysqli_query($con, $query);
					if($sql) { while ($row= mysqli_fetch_array($sql)) {
					echo '<option value="'.$row["school_id"].'">'.$row["school"].'</option>'; } } ?>
    </select>
    <span class="selectRequiredMsg">Please select an item.</span></span></td>
 </tr>


 <tr>
  <td>Teacher:</td>
  <td><span id="spryselect2">
    <select name="teacher_id" id="teacher_id">
      <option option value="0">--Select--Teacher--</option>
      <?php require_once 'connection2.php'; $query= "select * from  teacher order by teacher";	$sql=mysqli_query($con, $query);
					if($sql) { while ($row= mysqli_fetch_array($sql)) {
					echo '<option value="'.$row["teacher_id"].'">'.$row["teacher"].'</option>'; } } ?>
    </select>
    <span class="selectRequiredMsg">Please select an item.</span></span></td>
 </tr>
<tr>
  <td>Class:</td><td><span id="spryselect3">
    <select name="class_id" id="class_id">
      <option option value="0">--Select--class--</option>
      <?php require_once 'connection2.php'; $query= "select * from class order by class";	$sql=mysqli_query($con, $query);
					if($sql) { while ($row= mysqli_fetch_array($sql)) {
					echo '<option value="'.$row["class_id"].'">'.$row["class"].'</option>'; } } ?>
    </select>
    <span class="selectRequiredMsg">Please select an item.</span></span></td>
 </tr>
<tr>
  <td>Subject:</td><td><span id="spryselect4">
    <select name="subject_id" id="subject_id">
      <option option value="0">--Select--Subjecct--</option>
      <?php require_once 'connection2.php'; $query= "select * from subject order by subject";	$sql=mysqli_query($con, $query);
					if($sql) { while ($row= mysqli_fetch_array($sql)) {
					echo '<option value="'.$row["subject_id"].'">'.$row["subject"].'</option>'; } } ?>
    </select>
    <span class="selectRequiredMsg">Please select an item.</span></span></td>
 </tr>
<tr>
  <td>Term:</td><td><span id="spryselect5">
    <select name="term_id" id="term_id">
      <option option value="0">--Select--Term--</option>
      <?php require_once 'connection2.php'; $query= "select * from term order by term";	$sql=mysqli_query($con, $query);
					if($sql) { while ($row= mysqli_fetch_array($sql)) {
					echo '<option value="'.$row["term_id"].'">'.$row["term"].'</option>'; } } ?>
    </select>
    <span class="selectRequiredMsg">Please select an item.</span></span></td>
 </tr>
<tr>
  <td>Year:</td><td><span id="spryselect6">
    <select name="year_id" id="year_id">
      <option option value="0">--Select--Year--</option>
      <?php require_once 'connection2.php'; $query= "select * from year order by year";	$sql=mysqli_query($con, $query);
					if($sql) { while ($row= mysqli_fetch_array($sql)) {
					echo '<option value="'.$row["year_id"].'">'.$row["year"].'</option>'; } } ?>
    </select>
    <span class="selectRequiredMsg">Please select an item.</span></span></td>
 </tr>
<tr>
  <td>Week:</td><td><span id="spryselect7">
    <select name="week_id" id="week_id">
      <option option value="0">--Select--Week--</option>
      <?php require_once 'connection2.php'; $query= "select * from week order by week";	$sql=mysqli_query($con, $query);
					if($sql) { while ($row= mysqli_fetch_array($sql)) {
					echo '<option value="'.$row["week_id"].'">'.$row["week"].'</option>'; } } ?>
    </select>
    <span class="selectRequiredMsg">Please select an item.</span></span></td>
 </tr>
<tr>
  <td>Period:</td><td><span id="spryselect8">
    <select name="period_id" id="period_id">
      <option option value="0">--Select--Period--</option>
      <?php require_once 'connection2.php'; $query= "select * from period order by period";	$sql=mysqli_query($con, $query);
					if($sql) { while ($row= mysqli_fetch_array($sql)) {
					echo '<option value="'.$row["period_id"].'">'.$row["period"].'</option>'; } } ?>
    </select>
    <span class="selectRequiredMsg">Please select an item.</span></span></td>
 </tr>
<tr>
  <td>Topic:</td><td><span id="spryselect9">
    <select name="topic_id" id="topic_id">
      <option option value="0">--Select--Topic--</option>
      <?php require_once 'connection2.php'; $query= "select * from topic order by topic";	$sql=mysqli_query($con, $query);
					if($sql) { while ($row= mysqli_fetch_array($sql)) {
					echo '<option value="'.$row["topic_id"].'">'.$row["topic"].'</option>'; } } ?>
    </select>
    <span class="selectRequiredMsg">Please select an item.</span></span></td>
 </tr>
<tr>
  <td>Sub Topic:</td><td><span id="spryselect10">
    <select name="sub_topic_id" id="sub_topic_id">
      <option option value="0">--Select--Sub Topic--</option>
      <?php require_once 'connection2.php'; $query= "select * from sub_topic order by subtopic";	$sql=mysqli_query($con, $query);
					if($sql) { while ($row= mysqli_fetch_array($sql)) {
					echo '<option value="'.$row["sub_topic_id"].'">'.$row["subtopic"].'</option>'; } } ?>
    </select>
    <span class="selectRequiredMsg">Please select an item.</span></span></td>
 </tr>
<tr>
  <td>Method:</td><td><span id="spryselect11">
    <select name="method_id" id="method_id">
      <option option value="0">--Select--Method--</option>
      <?php require_once 'connection2.php'; $query= "select * from method order by method";	$sql=mysqli_query($con, $query);
					if($sql) { while ($row= mysqli_fetch_array($sql)) {
					echo '<option value="'.$row["method_id"].'">'.$row["method"].'</option>'; } } ?>
    </select>
    <span class="selectRequiredMsg">Please select an item.</span></span></td>
 </tr>
     <tr>
        <td><div align="left">SKILLS</div></td><td><span id="sprytextarea1">
          <label>
            <textarea name="skills" id="Skills"></textarea>
          </label>
    <span class="textareaRequiredMsg">A value is required.</span></span></td></tr>
	
	<tr>
        <td><div align="left">LEARNING OUTCOMES</div></td><td><span id="sprytextarea1">
          <label>
            <textarea name="outcomes" id="Skills"></textarea>
          </label>
    <span class="textareaRequiredMsg">A value is required.</span></span></td></tr>
	
	<tr>
        <td><div align="left">COMPETENCES</div></td><td><span id="sprytextarea2">
          <label>
            <textarea name="competences" id="Competences"></textarea>
          </label>
          <span class="textareaRequiredMsg">A value is required.</span></span></td></tr><tr>
        <td><div align="left">CONTENT</div></td><td><span id="sprytextarea3">
          <label>
            <textarea name="content" id="Content"></textarea>
          </label>
          <span class="textareaRequiredMsg">A value is required.</span></span></td></tr><tr>
        <td><div align="left">ACTIVITIES</div></td><td><span id="sprytextarea4">
          <label>
            <textarea name="activities" id="Activities"></textarea>
          </label>
          <span class="textareaRequiredMsg">A value is required.</span></span></td></tr><tr>
        <td><div align="left">INDICATORS OF LIFE SKILLS AND VALUES </div></td><td><span id="sprytextarea5">
          <label>
            <textarea name="indictars" id="Indicators"></textarea>
          </label>
          <span class="textareaRequiredMsg">A value is required.</span></span></td></tr><tr>
        <td><div align="left">LEARNING AIDS </div></td><td><span id="sprytextarea6">
          <label>
            <textarea name="learning_aids" id="Aids"></textarea>
          </label>
          <span class="textareaRequiredMsg">A value is required.</span></span></td></tr><tr>
        <td><div align="left">REFERENCE</div></td><td><span id="sprytextarea7">
          <label>
            <textarea name="reference" id="Reference"></textarea>
          </label>
          <span class="textareaRequiredMsg">A value is required.</span></span></td></tr><tr>
        <td><div align="left">REMARKS</div></td><td><span id="sprytextarea8">
          <label>
            <textarea name="remarks" id="Remarks"></textarea>
          </label>
          <span class="textareaRequiredMsg">A value is required.</span></span></td>
      </tr>
  </table>
    <p align="left">
<label>
    
      <div align="center">
        <div align="center">
          <input name="save" type="submit" id="save" value="Save" />
          <input type="reset" name="Reset" value="Reset" />
        </div>
</label>
<div align="center"></div>
      <div align="left"></div>
    </form>
<script type="text/javascript">
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1");
var spryselect2 = new Spry.Widget.ValidationSelect("spryselect2");
var spryselect3 = new Spry.Widget.ValidationSelect("spryselect3");
var spryselect4 = new Spry.Widget.ValidationSelect("spryselect4");
var spryselect5 = new Spry.Widget.ValidationSelect("spryselect5");
var spryselect6 = new Spry.Widget.ValidationSelect("spryselect6");
var spryselect7 = new Spry.Widget.ValidationSelect("spryselect7");
var spryselect8 = new Spry.Widget.ValidationSelect("spryselect8");
var spryselect9 = new Spry.Widget.ValidationSelect("spryselect9");
var spryselect10 = new Spry.Widget.ValidationSelect("spryselect10");
var spryselect11 = new Spry.Widget.ValidationSelect("spryselect11");
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
var sprytextarea2 = new Spry.Widget.ValidationTextarea("sprytextarea2");
var sprytextarea3 = new Spry.Widget.ValidationTextarea("sprytextarea3");
var sprytextarea4 = new Spry.Widget.ValidationTextarea("sprytextarea4");
var sprytextarea5 = new Spry.Widget.ValidationTextarea("sprytextarea5");
var sprytextarea6 = new Spry.Widget.ValidationTextarea("sprytextarea6");
var sprytextarea7 = new Spry.Widget.ValidationTextarea("sprytextarea7");
var sprytextarea8 = new Spry.Widget.ValidationTextarea("sprytextarea8");
</script>
</body>
</html>