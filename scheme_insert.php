<?php
include("connection.php");  
$id_query=mysql_query("select MAX(scheme_id) AS reg_id from   scheme")or die (mysql_error());
 $id=mysql_fetch_assoc($id_query);
 $next_id = $id['reg_id']+1;
 $number = "NO".$next_id;

//declaring variables for Login
$skills=$_POST['skills'];
$competences=$_POST['competences'];
$outcomes=$_POST['outcomes'];
$content=$_POST['content'];
$activities=$_POST['activities'];
$indictars=$_POST['indictars'];
$learning_aids=$_POST['learning_aids'];
$reference=$_POST['reference'];
$remarks=$_POST['remarks'];
$term_id=$_POST['term_id'];
$class_id=$_POST['class_id'];
$teacher_id=$_POST['teacher_id'];
$method_id=$_POST['method_id'];
$school_id=$_POST['school_id'];
$topic_id=$_POST['topic_id'];
$sub_topic_id=$_POST['sub_topic_id'];
$year_id=$_POST['year_id'];
$week_id=$_POST['week_id'];
$subject_id=$_POST['subject_id'];
$period_id=$_POST['period_id'];

//inserting into table Login
$query1 = mysql_query("INSERT INTO  scheme(scheme_id,skills,competences,content,activities,indictars,learning_aids,outcomes,reference,remarks,term_id,teacher_id,method_id,school_id,topic_id,sub_topic_id,year_id,week_id,subject_id,period_id,number,class_id) 
VALUE(NULL,'".$skills."','".$competences."','".$content."','".$activities."','".$indictars."','".$learning_aids."','".$outcomes."','".$reference."','".$remarks."','".$term_id."','".$teacher_id."','".$method_id."','".$school_id."','".$topic_id."','".$sub_topic_id."','".$year_id."','".$week_id."','".$subject_id."','".$period_id."','".$number."','".$class_id."')");


//checking for an error in the query

if (!$query1)
{

Die ("Error in your query1" . mysql_error());
}
else
{
echo '<b><font color="black"> SCHEME Number <font color="red"> &nbsp;&nbsp; '.$number.' </font> &nbsp;&nbsp;  Has been SUCESSFULLY RECORDED</font> 
  </font></b><br />';

}
?>