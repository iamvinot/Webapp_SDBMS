<?php 

 

if($_SERVER['REQUEST_METHOD']=='GET'){



$date= $_GET['date'];

$dept= $_GET['dept'];

$year= $_GET['year'];

$section= $_GET['section'];


require_once('connection.php');



$sql = "SELECT * FROM aecdroid_absentees WHERE date='".$date."' AND dept='".$dept."' AND section='".$section."' AND year='".$year."' ";

$r = mysqli_query($con,$sql);



$res = mysqli_fetch_array($r);

$result = array();

array_push($result,array(
"date"=>$res['date'],
"dept"=>$res['dept'],
"section"=>$res['section'],
"abs"=>$res['absentees']
));



echo json_encode(array("result"=>$result));

mysqli_close($con);

}
?>