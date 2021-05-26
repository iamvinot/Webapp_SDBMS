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
$sreg=stripslashes($_POST['username']);
$spas=stripslashes($_POST['password']);
}
else{
$sreg=stripslashes($_POST['username']);
$spas=stripslashes($_POST['password']);
}

$sreg=mysqli_real_escape_string($sqliconn,$sreg);
$spas=mysqli_real_escape_string($sqliconn,$spas);

$que='SELECT deptname,password FROM login_details where deptname='.$sreg.' AND password='.md5($spas);
$asd=mysqli_query($conn,$que);

if($asd)
{
	if(mysqli_num_rows($asd)==1)
	{ 
echo 'true';
		session_regenerate_id();
		$row=mysqli_fetch_row($asd);
		$_SESSION['register']=$row[0];
		session_write_close();
		header("location: ../pages/index.php?connection=success");
	
	}
	else
		header("location: ../login/index.php?connection=fail");
echo 'usc';
}
mysqli_close($conn);
?>