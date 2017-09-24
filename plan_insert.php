<?php
 include("connection.php");  
 
 $id_query=mysql_query("select MAX(plan_id) AS reg_id from  lesson_plan")or die (mysql_error());
 $id=mysql_fetch_assoc($id_query);
 $next_id = $id['reg_id']+1;
 $number = "NO".$next_id;

//declaring variables for Login
$plan=$_POST['plan'];
$number_of_pupils=$_POST['number_of_pupils'];
$skills=$_POST['skills'];
$aspect=$_POST['aspect'];
$competences=$_POST['competences'];
$content=$_POST['content'];
$life_skills=$_POST['life_skills'];
$values_indicators=$_POST['values_indicators'];
$reference=$_POST['reference'];
$introduction_tr=$_POST['introduction_tr'];
$presentation_tr=$_POST['presentation_tr'];
$practice_tr=$_POST['practice_tr'];
$production_tr=$_POST['production_tr'];
$introduction_pupil=$_POST['introduction_pupil'];
$presentation_pupil=$_POST['presentation_pupil'];
$practice_pupil=$_POST['practice_pupil'];
$production_pupil=$_POST['production_pupil'];
$strength=$_POST['strength'];
$weakness=$_POST['weakness'];
$way_forward=$_POST['way_forward'];
$school_id=$_POST['school_id'];
$subject_id=$_POST['subject_id'];
$teacher_id=$_POST['teacher_id'];
$class_id=$_POST['class_id'];
$sub_topic_id=$_POST['sub_topic_id'];
$topic_id=$_POST['topic_id'];
$method_id=$_POST['method_id'];
$Date=$_POST['Date'];
$timet=$_POST['timet'];
$skills=$_POST['skills'];
$competences=$_POST['competences'];
$content=$_POST['content'];

$grammer=$_POST['grammer'];
$vocab=$_POST['vocab'];
$structur=$_POST['structur'];
$comprehension=$_POST['comprehension'];

//inserting into table 
$query1 = mysql_query("INSERT INTO  lesson_plan(plan_id,number,number_of_pupils,skills,competences,content,life_skills,reference,introduction_tr,presentation_tr,practice_tr,production_tr,introduction_pupil,presentation_pupil,practice_pupil,production_pupil,strength 	,weakness,way_forward,school_id,subject_id,teacher_id,class_id,sub_topic_id,topic_id,values_indicators,Date,timet,grammer,vocab,structur,comprehension,method_id) 
VALUE(NULL,'".$number."','".$number_of_pupils."','".$skills."','".$competences."','".$content."','".$life_skills."','".$reference."','".$introduction_tr."','".$presentation_tr."','".$practice_tr."','".$production_tr."','".$introduction_pupil."','".$presentation_pupil."','".$practice_pupil."','".$production_pupil."','".$strength."','".$weakness."','".$way_forward."','".$school_id."','".$subject_id."','".$teacher_id."','".$class_id."','".$sub_topic_id."','".$topic_id."','".$values_indicators."','".$Date."','".$timet."','".$grammer."','".$vocab."','".$structur."','".$comprehension."','".$method_id."')");


//checking for an error in the query

if (!$query1)
{

Die ("Error in your query1" . mysql_error());
}
else
{
echo '<b><font color="black"> LESSON PLAN  Number <font color="red"> &nbsp;&nbsp; '.$number.' </font> &nbsp;&nbsp;  Has been SUCESSFULLY RECORDED</font> 
  </font></b><br />';

	
}
?>