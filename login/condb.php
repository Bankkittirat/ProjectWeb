<?php
$con= mysqli_connect("localhost","root","","login_db") or die("Error: " . mysqli_error($con));
mysqli_query($con, "SET NAMES 'utf8' ");
error_reporting( error_reporting() & ~E_NOTICE );
date_default_timezone_set('Asia/Bangkok');
// $con= mysqli_connect("localhost","root","","login_db");
// if (mysqli_connect_error($con)) {
//     echo 'failed to connect';
// }
 ?>