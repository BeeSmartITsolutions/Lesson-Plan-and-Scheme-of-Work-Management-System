// JavaScript Document

function validateTextBox()
{

var form=document.getElementById("form1");
var firstName=form["firstName"].value;
var lastName=form["lastName"].value;
var email=form["email"].value;
var fn_err=document.getElementById("fn_err");
var ln_err=document.getElementById("ln_err");
var em_err=document.getElementById("em_err");
if(firstName==""){
fn_err.innerHTML="Please enter First Name";
}
else
{
fn_err.innerHTML="";
}
if(lastName=="")
{
ln_err.innerHTML="Please enter Last Name";
}else{
ln_err.innerHTML="";
}

if(email=="")
{
em_err.innerHTML="Please enter Email";
}else{
em_err.innerHTML="";
}
if(firstName=="" || lastName=="" || email){
alert("Please fill form data correctly");
return false
}
else
{
	return true;
}
}

