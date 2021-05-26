<?php
$username="root";
$password="root";
$dbname="student_managemet";
$host="localhost";

$conn = new PDO('mysql:host='.$host.';dbname='.$dbname, $username, $password);
$sqliconn= mysqli_connect($host,$username,$password,$dbname);
 ?>
