<?php 

require_once('dbconfig.php');
if(! $conn)
{
die("Connection Usc".mysqli_connect_error());
}

// this is the data coming from the Form

$date=$_POST['date'];
$dept=$_POST['dept'];
$year=$_POST['year'];
$section=$_POST['section'];
$absentees=$_POST['absentees'];
$que="INSERT INTO aecdroid_absentees(date,dept,year,section,absentees)VALUES('$date','$dept','$year','$section','$absentees')";
//$asd=mysqli_query($con,$que);
$asd=mysqli_query($sqliconn,$que);

if($asd)
{
		header("location: ../pages/add_att_web.php?remarks=success");
}
else if(!$asd)
{
		header("location: ../pages/add_att_web.php?remarks=failure");
}
//mysqli_close($con);
mysqli_close($sqliconn);

?>