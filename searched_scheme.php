<?php
include("connect.php");
include("pdf/class.ezpdf.php");
// test the table functions
// create the quer to be displayed
mysql_connect ("localhost", "root","")  or die (mysql_error());
mysql_select_db ("scheme");

$term=$_POST['school'];
$term1=$_POST['teacher'];
$term2=$_POST['class'];
$term3=$_POST['subject'];
$term4=$_POST['term'];
$term5=$_POST['year'];

$query = "select *, school.school,teacher.teacher,class.class,subject.subject,term.term,year.year,scheme.number,topic.topic,sub_topic. subtopic from  scheme,school,teacher,class,subject,term,year,topic,sub_topic where   scheme.school_id=school.school_id  and scheme.teacher_id=teacher.teacher_id and scheme.class_id=class.class_id and scheme.subject_id=subject.subject_id and scheme.term_id=term.term_id and scheme.year_id=year.year_id and scheme.topic_id=topic.topic_id and scheme.sub_topic_id=sub_topic.sub_topic_id and school = '$term' and teacher = '$term1' and class = '$term2' and subject = '$term3' and term = '$term4' and year = '$term5' group by number ";
// check if the query returned some results

if(mysql_num_rows(mysql_query($query))<1) { echo "No Schemes are available for $term of Teacher $term1  class $term2 subject $term3 of Term $term4  Year $term5  "; exit; }
//start the pdf staff
$pdf =& new Cezpdf();
$pdf->selectFont('pdf/fonts/Helvetica');
//--------------------------------------------------
// initialize the array
//$data = array();
// do the SQL query
$result = mysql_query($query) or die (mysql_error());
// step through the result set, populating the array, note that this could
//also have been written:
// while($data[] = mysql_fetch_assoc($result)) {}
while($data[] = mysql_fetch_array($result, MYSQL_ASSOC)) {}
// make the table
$pdf->ezTable($data,array('school'=>'SCHOOL','teacher'=>'TEACHER','class' =>'CLASS','subject' => 'SUBJECT','term' => 'TERM','year' => 'YEAR','topic' =>  'TOPIC','subtopic' => 'SUB TOPIC','number' => 'Number'),"SCHEMES  for $term of Teacher $term1  class $term2 subject $term3 of Term $term4  Year $term5  ");


// do the output, this is my standard testing output code, adding ?d=1
// to the url puts the pdf code to the screen in raw form, good for
//checking
// for parse errors before you actually try to generate the pdf file.
if (isset($d) && $d){
$pdfcode = $pdf->output(1);
$pdfcode = str_replace("\n","\n<br>",htmlspecialchars($pdfcode));
echo '<html><body>';
echo trim($pdfcode);
echo '</body></html>';
} else {
$pdf->stream();
}
?>