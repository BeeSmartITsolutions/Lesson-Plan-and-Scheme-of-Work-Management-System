<?php 
class student {

public function insert()
{
	if(isset($_POST['submit']))
	{
		require_once("db_config.php");			
		 
		 $date = $_POST['Date'];
		  $first_name = $_POST['First_name'];
		  $lastname = $_POST['Last_name'];
		  $time_to= $_POST['time_to'];
		  $care_taker = $_POST['care_taker'];
		  $contact = $_POST['contact'];
		  $cell = $_POST['cell'];
		  $Parish= $_POST['Parish'];
		  $sub_county = $_POST['sub_county'];
		  $county= $_POST['county'];
		  $other_name = $_POST['other_name'];
		  $District_id = $_POST['District_id'];
		  $Religion_id = $_POST['Religion_id'];
		  $Gender_id= $_POST['Gender_id'];
          $patient_number=$_POST['patient_number'];
		  $patient_visit_number=$_POST['patient_visit_number'];
		  

	
		
			  $reg_query= "INSERT INTO patient_registration VALUES(NULL,'".$this->Date=$date."','".$this->First_name=$first_name."','".$this->Last_name=$lastname."','".$this->time_to=$time_to."','".$this->care_taker=$care_taker."','".$this->contact=$contact."','".$this->cell=$cell."','".$this->Parish=$Parish."','".$this->sub_county=$sub_county."','".$this->county=$county."','".$this->other_name=$other_name."','".$this->patient_number=$patient_number."','".$this->patient_visit_number=$patient_visit_number."','".$this->District_id=$District_id."','".$this->Religion_id=$Religion_id."','".$this->Gender_id=$Gender_id."')"; echo mysqli_error($con);
		  if (mysqli_query ($con, $reg_query)) 
		{
			  echo '<b><font color="green"> Thanks '.$first_name.' Your Hospital Number is '.$patient_number.' !</font></b><br />';
		} 
		else
		{
			echo '<b><font color="red">Error in Patient Registration. </font></b><br />'; echo mysqli_error($con);
		}	
	} 
}

//fuction for creating admission form.
public function registration()
{
	//if(isset($_POST['admit']))
	{
		require_once 'db_config.php';
	?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="calender.css" />
<script type="text/javascript" src="time.js"></script>
<title>patients Registration</title>
<link rel="stylesheet" type="text/css" href="form.css" />

</head>
<body>
<script type='text/javascript'>

function formValidator(){
	// Make quick references to our fields
	var First_name = document.getElementById('First_name');
	var Last_name = document.getElementById('Last_name');
	var other_name = document.getElementById('other_name');
	var care_taker = document.getElementById('care_taker');
	var contact = document.getElementById('contact');

	
	var cell = document.getElementById('cell');
	var Parish = document.getElementById('Parish');
	var sub_county = document.getElementById('sub_county');
	var county = document.getElementById('county');


	// Check each input in the order that it appears in the form! 
	
	if(isAlphabet(First_name, "Please enter  First Name and in letters only")){
	if(isAlphabet(Last_name, "Please enter  Last Name")){
	if(isAlphabet(other_name, "Please enter Other Name")){
	if(isAlphabet(care_taker, "Please enter Care taker's Name")){
	if(isInteger(contact, "Please enter Care taker's Contact")){

	if(isAlphabet(cell, "Please enter  Village/Cell")){
	if(isAlphabet(Parish, "Please enter  Parish/Ward")){
	if(isAlphabet(sub_county, "Please enter Sub_County/Division")){
	if(isAlphabet(county, "Please enter County/Municipality ")){
	
	

	return true; 
				
				
				}
				}
				
				}
				}
				
				}
				}
				
				}
				}
				}
				
							
	return false;
	}				
	






function isAlphabet(elem, helperMsg){
	var alphaExp = /^[a-zA-Z]+$/;
	if(elem.value.match(alphaExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}





function isAlphabet(elem, helperMsg){
	var alphaExp = /^[a-zA-Z]+$/;
	if(elem.value.match(alphaExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}




function isAlphabet(elem, helperMsg){
	var alphaExp = /^[a-zA-Z0-9]+$/;
	if(elem.value.match(alphaExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}





function isAlphabet(elem, helperMsg){
	var alphaExp = /^[a-zA-Z]+$/;
	if(elem.value.match(alphaExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}




function isInteger(elem, helperMsg){
	var intExp = /^[0-9]+$/;
	if(elem.value.match(intExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}





function isAlphabet(elem, helperMsg){
	var alphaExp = /^[a-zA-Z0-9]+$/;
	if(elem.value.match(alphaExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}





function isAlphabet(elem, helperMsg){
	var alphaExp = /^[a-zA-Z]+$/;
	if(elem.value.match(alphaExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}




function isAlphabet(elem, helperMsg){
	var alphaExp = /^[a-zA-Z0-9]+$/;
	if(elem.value.match(alphaExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}





function isAlphabet(elem, helperMsg){
	var alphaExp = /^[a-zA-Z]+$/;
	if(elem.value.match(alphaExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}



</script>

  <h3 >Patients Registration </h3><?php 


echo date("l F d, Y, h:i A");
?>
   <form action="registration_insertion.php" onsubmit='return formValidator()' method="post" name="drug">

    <table  border="0"    cellspacing="0">
      <tr>
        <td > <h4>Date:</h4></td>
        <input type="hidden" name="submitted" value="<?php echo htmlentities($disp_submitted) ?>">
        <td ><input name="Date" class="input" id="Date" value="<?php echo $_SESSION['from']; ?>"/>
            <input name="button2" type="button" id="button" onClick="displayDatePicker('Date');" value="Pick a date"  class="dpButton"/></td>
      </tr>
      <?php
	  
	  function random_num($n=5)
	  {
	  return rand(0, pow(10,$n));
	  }
	  
	  ?>
      
        <tr>
        <td><h4>Patient Hospital Number:</h4></td>
        <td ><input type="text" name="patient_number" id="patient_number" value="<?php echo date('Y')."/HICH/".random_num(5)?>" readonly="readonly"/></td>
      </tr>
       <tr>
        <td><h4>Patient Visit Number:</h4></td>
        <td ><input type="text" name="patient_visit_number" id="patient_visit_number" value="<?php echo date('F/Y')."/HICH/".random_num(5)?>" readonly="readonly"/></td>
      </tr>
      <tr>
        <td><h4>First Name:</h4></td>
        <td ><input type="text" name="First_name" id="First_name" /></td>
      </tr>
      <tr>
        <td ><h4>Last Name:</h4></td>
        <td><input type="text" name="Last_name" id="Last_name" value="<?php echo htmlentities($disp_Last_name) ?>"/></td></tr>
             <tr>
        <td ><h4>Other Name:</h4></td>
        <td><input type="text" name="other_name" id="other_name" value="<?php echo htmlentities($disp_Last_name) ?>"/></td></tr>
      <tr>
        <td><h4> Date Of Birth:</h4></td>
        <input type="hidden" name="submitted" value="<?php echo htmlentities($disp_submitted) ?>">
        <td><input name="time_to" class="input" id="time_to" value="<?php echo $_SESSION['from']; ?>" size="10"/>
            <input name="time_to" type="button" id="button" onClick="displayDatePicker('time_to');" value="DOB" class="dpButton"/></td>
      </tr>
       <tr>
        <td><h4>Care_Taker's Name :</h4></td>
        <td><input type="text" name="care_taker" id="care_taker" value="<?php echo htmlentities($disp_E_mail) ?>"/></td>
      </tr>
      <tr>
        <td><h4>Care_Taker's Contact :</h4></td>
        <td><input type="text" name="contact" id="contact" value="<?php echo htmlentities($disp_E_mail) ?>"/></td>
      </tr>
        <tr>
        <td><h4>Village/Cell:</h4></td>
        <td><input type="text" name="cell" id="cell" value="<?php echo htmlentities($disp_E_mail) ?>"/>
        </td>
      </tr>
        <tr>
        <td><h4>Parish/Ward:</h4></td>
        <td><input type="text" name="Parish" id="Parish" value="<?php echo htmlentities($disp_E_mail) ?>"/>
        </td>
      </tr>
        <tr>
        <td><h4>Sub_County/Division:</h4></td>
        <td><input type="text" name="sub_county" id="sub_county" value="<?php echo htmlentities($disp_E_mail) ?>"/>
        </td>
      </tr>
        <tr>
        <td><h4>County/Municipality:</h4></td>
        <td><input type="text" name="county" id="county" value="<?php echo htmlentities($disp_E_mail) ?>"/>
        </td>
      </tr>
      
      
      <tr>
        <td><h4> District:</h4></td>
        <td><select name="District_id">
                  <option value="class_name">--Select--District--</option>
                  <?php require_once 'db_config.php'; $query= "select * from district order by Name";	$sql=mysqli_query($con, $query);
					if($sql) { while ($row= mysqli_fetch_array($sql)) {
					echo '<option value="'.$row["District_id"].'">'.$row["Name"].'</option>'; } } ?>
                </select>
        </td>
      </tr>
      <tr>
        <td><h4>Select Religion:</h4></td>
        <td><select name="Religion_id">
                  <option value="class_name">--Select--Religion--</option>
                  <?php require_once 'db_config.php'; $query= "select * from religion order by Name";	$sql=mysqli_query($con, $query);
					if($sql) { while ($row= mysqli_fetch_array($sql)) {
					echo '<option value="'.$row["Religion_id"].'">'.$row["Name"].'</option>'; } } ?>
                </select>
        </td>
      </tr>
      <tr>
        <td><h4>Select Gender:</h4></td>
        <td><select name="Gender_id">
                  <option value="class_name">--Select--Gender--</option>
                  <?php require_once 'db_config.php'; $query= "select * from gender order by Name";	$sql=mysqli_query($con, $query);
					if($sql) { while ($row= mysqli_fetch_array($sql)) {
					echo '<option value="'.$row["Gender_id"].'">'.$row["Name"].'</option>'; } } ?>
                </select></td>
      </tr>
    
     

              
             <tr><td></td><td>

  <input type="submit" name="" value="submit" class="dpButton"/>

<input name="button" type="Reset" value="Reset" class="dpButton"/></td></tr>

  </table>



	</form>
<?php }
}

//fuction for submitting data collected on student registration to the database.
public function register()
{
	if(isset($_POST['submit']))
		{
            // Connect to database
			require_once("db_config.php");
					  
	  $date = $_POST['Date'];
		  $first_name = $_POST['First_name'];
		  $lastname = $_POST['Last_name'];
		  $time_to= $_POST['time_to'];
		  $care_taker = $_POST['care_taker'];
		  $contact = $_POST['contact'];
		  $cell = $_POST['cell'];
		  $Parish= $_POST['Parish'];
		  $sub_county = $_POST['sub_county'];
		  $county= $_POST['county'];
		  $other_name = $_POST['other_name'];
		  $District_id = $_POST['District_id'];
		  $Religion_id = $_POST['Religion_id'];
		  $Gender_id= $_POST['Gender_id'];
          $patient_number=$_POST['patient_number'];
		  $patient_visit_number=$_POST['patient_visit_number'];

		  //$this->mrk = $_POST['mk'];
		  
		  
		  $mrk_query= "INSERT INTO patient_registration VALUES(NULL,'".$this->First_name=$first_name."','".$this->Last_name=$lastname."','".$this->Date=$Date."','".$this->cell=$cell."','".$this->Parish=$Parish."','".$this->sub_county=$sub_county."','".$this->county=$county."','".$this->other_name=$other_name."','".$this->patient_number=$patient_number."','".$this->patient_visit_number=$patient_visit_number."','".$this->District_id=$District_id."')"; echo mysqli_error($con);
		  if (mysqli_query ($con, $mrk_query)) 
		  {
			echo '<p align="center"><b><font color="green">Patient  Registration  for '.$first_name.'  '.$lastname.' Hospital Number '.$patient_number.' 
			<br> Patient Visit Number '.$patient_visit_number.'   has succesfully been done </font></b></p><br />';
		} 
		else
		{
			echo '<b><font color="red">Error in  registration for old patient ! . </font></b><br />'; echo mysqli_error($con);
		}
	}
}






//fuction for creating registration form.
public function student_form()
{ 
	if(isset($_POST['reg']))
	{
	require_once 'db_config.php';
	
	//Get data from the admission table to be display them in the Registration form.
	$selct_query=mysqli_query($con, "SELECT * FROM   scheme,school,teacher,class,subject,term,year,topic,sub_topic,period,week,method where   scheme.school_id=school.school_id  and scheme.teacher_id=teacher.teacher_id and scheme.class_id=class.class_id and scheme.subject_id=subject.subject_id and scheme.term_id=term.term_id and scheme.year_id=year.year_id and scheme.topic_id=topic.topic_id and scheme.sub_topic_id=sub_topic.sub_topic_id and scheme.period_id=period.period_id and scheme.week_id=week.week_id and scheme.method_id=method.method_id and number ='".$_POST['number']."';");
$rows = mysqli_fetch_array($selct_query);
?>                  
  <form action="cash_insert.php" method="post" name="drug" onSubmit="return validate(this)">

<link rel="stylesheet" type="text/css" href="form.css" />
  <B>
  <DIV style="text-align:center; font-size:36px;">THE SCHEME OF WORK </DIV>
  </B>
    <DIV style="text-align:left; margin-left:50px; font-size:20px; font-family:'Times New Roman', Times, serif;">
<b>SCHOOL :</b><?php echo $rows['school']; ?><br />
<b>TEACHER :</b>&nbsp;<?php echo $rows['teacher']; ?><br />
<b>CLASS :</b>&nbsp;<?php echo $rows['class']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<b>SUBJECT :</b>&nbsp;<?php echo $rows['subject']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<b>TERM :</b>&nbsp;<?php echo $rows['term']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<b>YEAR :</b>&nbsp;<?php echo $rows['year']; ?><br />
<b>LEARNING OUTCOMES :</b><br /><?php echo $rows['outcomes']; ?>
  <table border="1">
<tr>
<td><b>WEEK</b></td><td><b>PERIOD</b></td><td><b>TOPIC</b></td><td><b>SUB TOPIC</b></td><td><b>SKILLS</b></td><td><b>COMPETENCES</b></td><td><b>CONTENT</b></td><td><b>METHODS</b></td><td><b>ACTIVITIES</b></td><td><b>INDICATORS OF LIFE SKILLS AND VALUES</b></td><td><b>LEARNING AIDS</b></td><td><b>REFERENCE</b></td><td><b>REMARKS</b></td>
</tr><tr>
<td><?php echo $rows['week']; ?></td><td><?php echo $rows['period']; ?></td><td><?php echo $rows['topic']; ?></td><td><?php echo $rows['subtopic']; ?></td><td><?php echo $rows['skills']; ?></td><td><?php echo $rows['competences']; ?></td><td><?php echo $rows['content']; ?></td><td><?php echo $rows['method']; ?></td><td><?php echo $rows['activities']; ?></td><td><?php echo $rows['indictars']; ?></td><td><?php echo $rows['learning_aids']; ?></td><td><?php echo $rows['reference']; ?></td><td><?php echo $rows['remarks']; ?></td>
</tr>
  </table>
  </DIV>
        
<script>
function validatesurname
(field) {
if (field == "") return "THE REGISTRATION  NUMBER YOU ENTERED IS INVALID AND CAN NOT PROCEESD WITH PAYMENT PROCESS PROCESS.\n"
else if (field.length < 8)
return "Receipt Number  must be at least 8 characters.\n"
return ""
}
   </script>     
          
		</form>
<?php } 
  else 
  {
?>
  
<form action="Patient_details_Triage.php" method="post" name="reg">
    <link rel="stylesheet" type="text/css" href="form.css" />
  		<table border="0">
        	<tr>
            
		</table>
	</form>
<?php
		} 
	} 
}
?>