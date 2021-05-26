<?php
$host='localhost';
$user='root';
$pass='root';
$db='student_managemet';
 
$con = mysqli_connect($host,$user,$pass,$db);

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "select * from staff_login where staffid='$username' and password='$password'";

$res = mysqli_query($con,$sql);

$check = mysqli_fetch_array($res);

if(isset($check)){
echo 'success';
}else{
echo 'failure';
}

mysqli_close($con);
?>
