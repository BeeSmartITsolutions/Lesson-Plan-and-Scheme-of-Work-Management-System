
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>


<body><p> </p>
<p> </p> 
<p> </p>
 <form action="scheme_details.php" method="post" name="number" onSubmit="return validate(this)">

	   <script>
function validate(form) {
fail = validatenumber(form.number.value)


if (fail == "") return true
else { alert(fail); return false }
}
</script>
    <link rel="stylesheet" type="text/css" href="form.css" />
<h3>Enter Scheme Number and submit</h4>
  		<table border="0">
        	<tr>
            	
            
          	<tr>
            	<td><h4> Scheme Number:</h4></td>
            	<td><input name="number" type="text" value="" /></td>
          	</tr>
          	<tr>
            	<td>&nbsp;</td>
            	<td>  <input type="submit" name="reg" value="submit"  class="dpButton"/>
				       <script>     

function validatenumber
(field) {
if (field == "") return "Enter  Scheme Number.\n"
else if (field.length < 3)
return "scheme Number  must be at least 3 characters.\n"
return ""
}
   </script>        
</td>
          	</tr>
            


            
            
		</table>
	</form>
</body>
</html>