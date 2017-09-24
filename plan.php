<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>lesson plan</title>
<style type="text/css">
<!--
.style2 {font-weight: bold}
-->
</style>
<link rel="stylesheet" type="text/css" href="calender.css" />
<script type="text/javascript" src="time.js"></script>
<script src="SpryAssets/SpryValidationSelect.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationSelect.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
</head>
<body bgcolor="#FF00FF"><div style="width:100%; height:auto; ">
<form method="POST" name="LessonPlan" class="style2" id="LessonPlan" action="plan_insert.php">
  
  <p align="center"><font size="+6" style="background-color: #00FFFF;">THE LESSON PLAN</font> </p>
  <table width="509" border="1" align="center"    cellspacing="0" bgcolor="#00FF00">
    <tr>
      <td>School:</td>
      <td><span id="spryselect1">
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
      <td>Class:</td>
      <td><span id="spryselect3">
        <select name="class_id" id="class_id">
          <option option value="0">--Select--class--</option>
          <?php require_once 'connection2.php'; $query= "select * from class order by class";	$sql=mysqli_query($con, $query);
					if($sql) { while ($row= mysqli_fetch_array($sql)) {
					echo '<option value="'.$row["class_id"].'">'.$row["class"].'</option>'; } } ?>
        </select>
        <span class="selectRequiredMsg">Please select an item.</span></span></td>
    </tr>
    <tr>
      <td>Subject:</td>
      <td><span id="spryselect4">
        <select name="subject_id" id="subject_id">
          <option option value="0">--Select--Subjecct--</option>
          <?php require_once 'connection2.php'; $query= "select * from subject order by subject";	$sql=mysqli_query($con, $query);
					if($sql) { while ($row= mysqli_fetch_array($sql)) {
					echo '<option value="'.$row["subject_id"].'">'.$row["subject"].'</option>'; } } ?>
        </select>
        <span class="selectRequiredMsg">Please select an item.</span></span></td>
    </tr>
    <tr>
      <td>Topic:</td>
      <td><span id="spryselect5">
        <select name="topic_id" id="topic_id">
          <option option value="0">--Select--Topic--</option>
          <?php require_once 'connection2.php'; $query= "select * from topic order by topic";	$sql=mysqli_query($con, $query);
					if($sql) { while ($row= mysqli_fetch_array($sql)) {
					echo '<option value="'.$row["topic_id"].'">'.$row["topic"].'</option>'; } } ?>
        </select>
        <span class="selectRequiredMsg">Please select an item.</span></span></td>
    </tr>
    <tr>
      <td>Sub Topic:</td>
      <td><span id="spryselect6">
        <select name="sub_topic_id" id="sub_topic_id">
          <option option value="0">--Select--Sub Topic--</option>
          <?php require_once 'connection2.php'; $query= "select * from sub_topic order by subtopic";	$sql=mysqli_query($con, $query);
					if($sql) { while ($row= mysqli_fetch_array($sql)) {
					echo '<option value="'.$row["sub_topic_id"].'">'.$row["subtopic"].'</option>'; } } ?>
        </select>
        <span class="selectRequiredMsg">Please select an item.</span></span></td>
    </tr>
    <tr>
      <td>Method:</td>
      <td><span id="spryselect7">
        <select name="method_id" id="method_id">
          <option option value="0">--Select--Method--</option>
          <?php require_once 'connection2.php'; $query= "select * from method order by method";	$sql=mysqli_query($con, $query);
					if($sql) { while ($row= mysqli_fetch_array($sql)) {
					echo '<option value="'.$row["method_id"].'">'.$row["method"].'</option>'; } } ?>
        </select>
        <span class="selectRequiredMsg">Please select an item.</span></span></td>
    </tr>
    <tr>
      <td width="23%"> Date</td>
      <td width="23%"><input type="hidden" name="submitted" value="<?php echo htmlentities($disp_submitted) ?>" />
        <span id="sprytextfield1">
        <input name="Date" class="input" id="Date" value="<?php echo $_SESSION['from']; ?>" size="10"/>
        <span class="textfieldRequiredMsg">A value is required.</span></span>        <input name="button" type="button" id="button" onclick="displayDatePicker('Date');" value="Pick a date" /></td>
    </tr>
    <tr>
      <td><div align="left">Time</div></td>
      <td><span id="sprytextfield2">
        <label>
          <input type="text" name="timet" value="" />
        </label>
        <span class="textfieldRequiredMsg">A value is required.</span></span></td>
    </tr>
    <tr>
      <td><div align="left">No of Pupils</div></td>
      <td><span id="sprytextfield3">
        <label>
          <input type="text" name="number_of_pupils" value="" />
        </label>
        <span class="textfieldRequiredMsg">A value is required.</span></span></td>
    </tr>
    <tr>
      <td><div align="left">SKILLS</div></td>
      <td><span id="sprytextarea1">
        <label>
          <textarea name="skills" id="skills"></textarea>
        </label>
        <span class="textareaRequiredMsg">A value is required.</span></span></td>
    </tr>
    <tr>
      <td><div align="left">ASPECTS</div></td>
      <td><label>
        <input type="checkbox" name="grammer" value="Grammer" />
        Grammer</label>
          <label><br />
          <input type="checkbox" name="vocab" value="Vocaburary" />
            Vocaburary</label>
        <br />
          <label>
          <input type="checkbox" name="structur" value="structures" />
            Structures</label>
        <br />
          <label>
          <input type="checkbox" name="comprehension" value="comprehension" />
            Comprehension</label>
      </td>
    </tr>
    <tr>
      <td><div align="left">COMPETENCES</div></td>
      <td><span id="sprytextarea2">
        <label>
          <textarea name="competences" id="competences"></textarea>
        </label>
        <span class="textareaRequiredMsg">A value is required.</span></span></td>
    </tr>
    <tr>
      <td><div align="left">CONTENT</div></td>
      <td><span id="sprytextarea3">
        <label>
          <textarea name="content" id="content"></textarea>
        </label>
        <span class="textareaRequiredMsg">A value is required.</span></span></td>
    </tr>
    <tr>
      <td><div align="left">LIFE SKILLS </div></td>
      <td><span id="sprytextarea4">
        <label>
          <textarea name="life_skills" id="life_skills"></textarea>
        </label>
        <span class="textareaRequiredMsg">A value is required.</span></span></td>
    </tr>
    <tr>
      <td><div align="left">VALUES</div></td>
      <td><span id="sprytextarea5">
        <label>
          <textarea name="values_indicators" id="values_indicators"></textarea>
        </label>
        <span class="textareaRequiredMsg">A value is required.</span></span></td>
    </tr>
    <tr>
      <td><div align="left">REFERENCE</div></td>
      <td><span id="sprytextarea6">
        <label>
          <textarea name="reference" id="reference"></textarea>
        </label>
        <span class="textareaRequiredMsg">A value is required.</span></span></td>
    </tr></table>
	<table width="509" border="1" align="center"    cellspacing="0" bgcolor="#00FF00">
      <caption align="center">
      <br />
      LESSON PROCEDURES/DEVELOPMENT 
      </caption><tr>
      <td><div align="center">PHASE</div></td>
      <td><div align="center">TEACHER'S ACTIVITY </div></td>
      <td><div align="center">PUPIL'S ACTIVITY </div></td>
    </tr>
    <tr>
      <td><p>Introduction (10 Minutes) </p></td>
      <td><span id="sprytextarea7">
        <label>
          <textarea name="introduction_tr" id="introduction_tr"></textarea>
        </label>
        <span class="textareaRequiredMsg">A value is required.</span></span></td>
      <td><span id="sprytextarea8">
        <label>
          <textarea name="introduction_pupil" id="introduction_pupil"></textarea>
        </label>
        <span class="textareaRequiredMsg">A value is required.</span></span></td>
    </tr>
    <tr>
      <td>Presentation (20 Minutes) </td>
      <td><span id="sprytextarea9">
        <textarea name="presentation_tr" id="presentation_tr"></textarea>
        <span class="textareaRequiredMsg">A value is required.</span></span></td>
      <td><span id="sprytextarea10">
        <label>
          <textarea name="presentation_pupil" id="presentation_pupil"></textarea>
        </label>
        <span class="textareaRequiredMsg">A value is required.</span></span></td>
    </tr>
    <tr>
      <td>Practice (10 Minutes) </td>
      <td><span id="sprytextarea11">
        <label>
          <textarea name="practice_tr" id="practice_tr"></textarea>
        </label>
        <span class="textareaRequiredMsg">A value is required.</span></span></td>
      <td><span id="sprytextarea12">
        <label>
          <textarea name="practice_pupil" id="practice_pupil"></textarea>
        </label>
        <span class="textareaRequiredMsg">A value is required.</span></span></td>
    </tr>
    <tr>
      <td>Production (20 Minutes) </td>
      <td><span id="sprytextarea13">
        <label>
          <textarea name="production_tr" id="production_tr"></textarea>
        </label>
        <span class="textareaRequiredMsg">A value is required.</span></span></td>
      <td><span id="sprytextarea14">
        <label>
          <textarea name="production_pupil" id="production_pupil"></textarea>
        </label>
        <span class="textareaRequiredMsg">A value is required.</span></span></td>
    </tr>
    <tr>
      <td><div align="left">STRENGTH</div></td>
      <td><span id="sprytextarea15">
        <label>
          <textarea name="strength" id="strength"></textarea>
        </label>
        <span class="textareaRequiredMsg">A value is required.</span></span></td>
    </tr>
    <tr>
      <td><div align="left">WEAKNESS</div></td>
      <td><span id="sprytextarea16">
        <label>
          <textarea name="weakness" id="weakness"></textarea>
        </label>
        <span class="textareaRequiredMsg">A value is required.</span></span></td>
    </tr>
    <tr>
      <td><div align="left">WAYFORWARD</div></td>
      <td><span id="sprytextarea17">
        <label>
          <textarea name="way_forward" id="way_forward"></textarea>
        </label>
        <span class="textareaRequiredMsg">A value is required.</span></span></td>
    </tr>
  </table>
  <div align="center">
        <p>
          <input name="save" type="submit" id="save" value="SAVE" />
          <input type="reset" name="Reset" value="CLEAR" />
        </p>
  </div>
    </form>
</div>
<script type="text/javascript">
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1");
var spryselect2 = new Spry.Widget.ValidationSelect("spryselect2");
var spryselect3 = new Spry.Widget.ValidationSelect("spryselect3");
var spryselect4 = new Spry.Widget.ValidationSelect("spryselect4");
var spryselect5 = new Spry.Widget.ValidationSelect("spryselect5");
var spryselect6 = new Spry.Widget.ValidationSelect("spryselect6");
var spryselect7 = new Spry.Widget.ValidationSelect("spryselect7");
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
var sprytextarea2 = new Spry.Widget.ValidationTextarea("sprytextarea2");
var sprytextarea3 = new Spry.Widget.ValidationTextarea("sprytextarea3");
var sprytextarea4 = new Spry.Widget.ValidationTextarea("sprytextarea4");
var sprytextarea5 = new Spry.Widget.ValidationTextarea("sprytextarea5");
var sprytextarea6 = new Spry.Widget.ValidationTextarea("sprytextarea6");
var sprytextarea7 = new Spry.Widget.ValidationTextarea("sprytextarea7");
var sprytextarea8 = new Spry.Widget.ValidationTextarea("sprytextarea8");
var sprytextarea9 = new Spry.Widget.ValidationTextarea("sprytextarea9");
var sprytextarea10 = new Spry.Widget.ValidationTextarea("sprytextarea10");
var sprytextarea11 = new Spry.Widget.ValidationTextarea("sprytextarea11");
var sprytextarea12 = new Spry.Widget.ValidationTextarea("sprytextarea12");
var sprytextarea13 = new Spry.Widget.ValidationTextarea("sprytextarea13");
var sprytextarea14 = new Spry.Widget.ValidationTextarea("sprytextarea14");
var sprytextarea15 = new Spry.Widget.ValidationTextarea("sprytextarea15");
var sprytextarea16 = new Spry.Widget.ValidationTextarea("sprytextarea16");
var sprytextarea17 = new Spry.Widget.ValidationTextarea("sprytextarea17");
</script>
</body>
</html>