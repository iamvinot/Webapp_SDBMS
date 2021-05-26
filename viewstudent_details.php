<?php 

 

if($_SERVER['REQUEST_METHOD']=='GET'){



$regno= $_GET['regno'];



require_once('connection.php');



$sql = "SELECT * FROM student_details WHERE regno='".$regno."'";

$r = mysqli_query($con,$sql);
$res = mysqli_fetch_array($r);
$coursecode=$res['course_code'];
$deptsql="SELECT *FROM course_details where course_code='".$coursecode."'";
$d=mysqli_query($con,$deptsql);

$deptres=mysqli_fetch_array($d);

$result = array();

array_push($result,array(
"regno"=>$res['regno'],
"name"=>$res['name'],
"course_name"=>$deptres['course_name'],
"yop"=>$res['yop'],
));

echo json_encode(array("result"=>$result));

mysqli_close($con);

}
?>