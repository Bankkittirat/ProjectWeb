<?php 
session_start();

include("login/condb.php");




$conpon = ["wew"];
$discount = [1];
function getComment($con){
    $sql3 = "SELECT * FROM coupon;";
    $result = $con->query($sql3);

    while ($row = $result->fetch_assoc()){
    
    $_SESSION["coupon"] = $row["coupon"];
    $_SESSION["discount"] = $row["discount"];
    array_push($conpon, $_SESSION["coupon"]);
    array_push($discount, $_SESSION["discount"]);
    }

                                        }	
                                        getComment($con);
                                        
                                       print_r($conpon);
                                       print_r($discount);                          
?>