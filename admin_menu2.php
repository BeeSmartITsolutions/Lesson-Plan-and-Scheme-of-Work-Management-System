<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><link rel="stylesheet" type="text/css" href="drop.css" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title></head><body></p>

<script type="text/javascript">
// Copyright 2006-2007 javascript-array.com

var timeout	= 500;
var closetimer	= 0;
var ddmenuitem	= 0;

// open hidden layer
function mopen(id)
{	
	// cancel close timer
	mcancelclosetime();

	// close old layer
	if(ddmenuitem) ddmenuitem.style.visibility = 'hidden';

	// get new layer and show it
	ddmenuitem = document.getElementById(id);
	ddmenuitem.style.visibility = 'visible';

}
// close showed layer
function mclose()
{
	if(ddmenuitem) ddmenuitem.style.visibility = 'hidden';
}

// go close timer
function mclosetime()
{
	closetimer = window.setTimeout(mclose, timeout);
}

// cancel close timer
function mcancelclosetime()
{
	if(closetimer)
	{
		window.clearTimeout(closetimer);
		closetimer = null;
	}
}

// close layer when click-out
document.onclick = mclose;
</script> 
</head>
<body topmargin="0px">
<ul id="sddm">
 <li> 
  
    <a href="#"
        onmouseover="mopen('m1')" 
        onmouseout="mclosetime()">MENU<blink><span class="style2"><font color="#000000">|</font></span></blink></a>
        <div id="m1" 
            onmouseover="mcancelclosetime()" 
            onmouseout="mclosetime()">
               <a href="class.php" target="display">Add Class</a>
		<a href="method.php" target="display">Add Method</a>
		<a href="period.php" target="display">Add Period</a>
		<a href="school.php" target="display">Add School</a>
		<a href="subject.php" target="display">Add Subject</a>
		<a href="sub_topic.php" target="display">Add Sub topic</a>
	    <a href="teacher.php" target="display">Add Teacher</a>
		<a href="term.php" target="display">Add Term</a>
           <a href="topic.php" target="display">Add Topic</a>
		<a href="week.php" target="display">Add Week</a>
		<a href="year.php" target="display">Add Year</a></li>
		  <li><a href="SchemeWork.php" target="display">ADD SCHEME</a></li>
		  <li><a href="search_scheme.php" target="display">SEARCH SCHEMES</a></li>
		  		  <li><a href="scheme_number.php" target="display">VIEW SCHEME DETAILS</a></li>

		    <li><a href="plan.php" target="display">ADD LESSON PLAN</a></li>
					  <li><a href="search_plan.php" target="display">SEARCH LESSON PLAN</a></li>
					  		  		  <li><a href="plan_number.php" target="display">VIEW LESSON PLAN DETAILS</a></li>
  <li><a href="Logout.php">Logout</a></li>



    
</ul>
<div style="clear:both"></div>
</div>
<div align="center">
WELCOME TO THE ADMINISTRATOR'S PAGE &nbsp; &nbsp; &nbsp; DATE: &nbsp; &nbsp; &nbsp;<?php
echo date ('jS F, Y');?>
</div>
</body>
</html>
