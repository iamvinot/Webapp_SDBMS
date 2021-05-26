<?php
$host='localhost';
$user='root';
$pass='root';
$db='student_managemet';

$con = mysqli_connect($host,$user,$pass,$db);

$regno = $_POST['regno'];

$sql = "select * from student_details where regno='$regno'";

$res = mysqli_query($con,$sql);

$check = mysqli_fetch_array($res);

if(isset($check)){
echo 'success';
}else{
echo 'failure';
}

mysqli_close($con);
?>
