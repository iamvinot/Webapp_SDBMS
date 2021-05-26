<?php
session_start();
include("dbconfig.php");
if(!$sqliconn)
{
echo 'usc';
die('Connection unsuccessful'.mysql_error());
}
if(!get_magic_quotes_gpc())
{
$sreg=stripslashes($_POST['deptid']);
$spas=stripslashes($_POST['password']);
}
else{
$sreg=stripslashes($_POST['deptid']);
$spas=stripslashes($_POST['password']);
}

$sreg=mysqli_real_escape_string($sqliconn,$sreg);
$spas=mysqli_real_escape_string($sqliconn,$spas);

$que="SELECT deptid,password FROM login_details where deptid='$sreg' AND password='" . md5($spas) . "' ";
$asd=mysqli_query($sqliconn,$que);

if($asd)
{
	if(mysqli_num_rows($asd)==1)
	{ 
echo 'true';
		session_regenerate_id();
		$row=mysqli_fetch_row($asd);
		$_SESSION['register']=$row[0];
		session_write_close();
		header("location:../pages/index.php?connection=success");
	
	}
	else
		header("location:index.php?connection=fail");
}
mysqli_close($sqliconn);
?>