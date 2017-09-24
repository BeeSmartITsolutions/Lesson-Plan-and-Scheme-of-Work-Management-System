<?php
$con=mysqli_connect("localhost","root","","drugs_records");
if($con)
{
//echo ("connection to isingiro_bank_db granted");
}
else
{
die(' db connection failure'.mysqli_error($con));
}
?>
