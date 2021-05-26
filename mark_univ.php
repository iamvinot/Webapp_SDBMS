<?php 

 

if($_SERVER['REQUEST_METHOD']=='GET'){



$username  = $_GET['username'];



require_once('connection.php');



$sql = "SELECT * FROM university_results WHERE username='".$username."'";



$r = mysqli_query($con,$sql);



$res = mysqli_fetch_array($r);



$result = array();



array_push($result,array(

"username"=>$res['username'],

"sub_1"=>$res['sub_1'],
"sub_2"=>$res['sub_2'],
"sub_3"=>$res['sub_3'],
"sub_4"=>$res['sub_4'],
"sub_5"=>$res['sub_5'],
"sub_6"=>$res['sub_6'],
"remarks"=>$res['remarks']

)

);



echo json_encode(array("result"=>$result));



mysqli_close($con);



}?>