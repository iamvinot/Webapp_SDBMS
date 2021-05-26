<?php
session_start();
include("dbconfig.php");
if(!$sqliconn)
{
echo 'usc';
die('Connection unsuccessful'.mysql_error());
}
$sreg=stripslashes($_POST['username']);
$spas=stripslashes($_POST['password']);



$sreg=mysqli_real_escape_string($sqliconn,$sreg);
$spas=mysqli_real_escape_string($sqliconn,$spas);

//$que="SELECT ld.deptname,password,deptid FROM login_details ld, dept_name dn where deptname='{$sreg}' AND password='" . md5($spas) . "'";
$que="SELECT * FROM login_details WHERE deptname='{$sreg}' AND password='{$spas}'";
var_dump($que);
$asd=mysqli_query($sqliconn,$que);
//$que1="SELECT dept_name FROM dept_name"
var_dump($asd);
if($asd)
{
	if(mysqli_num_rows($asd)==1)
	{
echo 'true';
		session_regenerate_id();
		$row=mysqli_fetch_row($asd);
		$_SESSION['deptname']=$row[0];
		$_SESSION['dept_full']=$row[2];
		$_SESSION['deptid']=$row[1];
		session_write_close();
		header("location: ../pages/index.php?connection=success");

	}
	else
		header("location: ../login/index.php?connection=fail");
echo 'usc';
}
mysqli_close($sqliconn);
?>
