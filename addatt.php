<?php

require_once('connection.php');
if(! $con)
{
die("Connection Usc".mysqli_connect_error());
}

// this is the data coming from the Android app
$date=$_GET['date'];
$dept=$_GET['dept'];
$year=$_GET['year'];
$section=$_GET['section'];
$absentees=$_GET['absentees'];
$que="INSERT INTO aecdroid_absentees(date,dept,year,section,absentees)VALUES('$date','$dept','$year','$section','$absentees')";
$asd=mysqli_query($con,$que);
if($asd)
{
echo 'Successfully Uploaded data';
}
else if(!$asd)
{
echo 'Please enter a different register number';
}
mysqli_close($con);
?>